<?php

namespace App;

use App\Events\UserOffline;
use App\Events\UserOnline;
use Exception;
use Ratchet\ConnectionInterface;
use BeyondCode\LaravelWebSockets\Apps\App;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;
use BeyondCode\LaravelWebSockets\QueryParameters;
use BeyondCode\LaravelWebSockets\Facades\StatisticsLogger;
use BeyondCode\LaravelWebSockets\Dashboard\DashboardLogger;
use BeyondCode\LaravelWebSockets\WebSockets\Channels\ChannelManager;
use BeyondCode\LaravelWebSockets\WebSockets\Exceptions\UnknownAppKey;
use BeyondCode\LaravelWebSockets\WebSockets\Exceptions\WebSocketException;
use BeyondCode\LaravelWebSockets\WebSockets\Messages\PusherMessageFactory;

class WebSocketHandler implements MessageComponentInterface {
	/** @var \BeyondCode\LaravelWebSockets\WebSockets\Channels\ChannelManager */
	protected $channelManager;

	public function __construct( ChannelManager $channelManager ) {
		$this->channelManager = $channelManager;
	}

	public function onOpen( ConnectionInterface $connection ) {
		$this
			->verifyAppKey( $connection )
			->generateSocketId( $connection )
			->establishConnection( $connection );
	}

	public function onMessage( ConnectionInterface $connection, MessageInterface $message ) {
		$message = PusherMessageFactory::createForMessage( $message, $connection, $this->channelManager );

		$message->respond();

		StatisticsLogger::webSocketMessage( $connection );
	}

	public function onClose( ConnectionInterface $connection ) {
		$this->channelManager->removeFromAllChannels( $connection );

		$uid = QueryParameters::create( $connection->httpRequest )->get( 'uid' );
		event( new UserOffline( $uid ) );

		DashboardLogger::disconnection( $connection );
		StatisticsLogger::disconnection( $connection );
	}

	public function onError( ConnectionInterface $connection, Exception $exception ) {
		if ( $exception instanceof WebSocketException ) {
			$connection->send( json_encode(
				$exception->getPayload()
			) );
		}
	}

	protected function verifyAppKey( ConnectionInterface $connection ) {
		$appKey = QueryParameters::create( $connection->httpRequest )->get( 'appKey' );

		if ( ! $app = App::findByKey( $appKey ) ) {
			throw new UnknownAppKey( $appKey );
		}

		$connection->app = $app;

		return $this;
	}

	protected function generateSocketId( ConnectionInterface $connection ) {
		$socketId = sprintf( '%d.%d', random_int( 1, 1000000000 ), random_int( 1, 1000000000 ) );

		$connection->socketId = $socketId;

		return $this;
	}

	protected function establishConnection( ConnectionInterface $connection ) {
		$uid = QueryParameters::create( $connection->httpRequest )->get( 'uid' );
		event( new UserOnline( $uid ) );

		$connection->send( json_encode( [
			'event' => 'pusher:connection_established',
			'data'  => json_encode( [
				'socket_id'        => $connection->socketId,
				'activity_timeout' => 30,
			] ),
		] ) );

		DashboardLogger::connection( $connection );

		StatisticsLogger::connection( $connection );

		return $this;
	}
}
