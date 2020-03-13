<?php
/**
 * Created by PhpStorm.
 * User: Matrix
 * Date: 3/28/2019
 * Time: 7:53 PM
 */

namespace App\Http;


use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;

class SocketController implements MessageComponentInterface {

	public function onOpen( ConnectionInterface $connection ) {
		// TODO: Implement onOpen() method.
	}

	public function onClose( ConnectionInterface $connection ) {
		// TODO: Implement onClose() method.
	}

	public function onError( ConnectionInterface $connection, \Exception $e ) {
		// TODO: Implement onError() method.
	}

	public function onMessage( ConnectionInterface $connection, MessageInterface $msg ) {
		// TODO: Implement onMessage() method.
	}
}