<?php



Auth::routes( [ 'verify' => true ] );


//<editor-fold desc="Guest Routes">
Route::group( [ 'middleware' => [ 'guest' ] ], function () {

	Route::get( '/', function () {
		return view( 'frontend.home' );
	} );

	Route::resource( 'service-request', 'ServiceRequestController' );

} );
//</editor-fold>

//static pages route
Route::get('business-partners', 'FrontendController@businessPartners')->name('business-partners');
Route::get('facts-n-stats', 'FrontendController@factsStats')->name('facts-n-stats');
Route::get('community-index', 'FrontendController@communityIndex')->name('community-index');
Route::get('fleet-servic-request', 'FrontendController@fleetServiceRequest')->name('fleet-servic-request');
Route::get('request-estimate', 'FrontendController@requestEstimate')->name('request-estimate');
Route::get('insurance-quote', 'FrontendController@insuranceQuote')->name('insurance-quote');
Route::get('all-services', 'FrontendController@allServices')->name('all-services');

Route::get('instant-loan-check', 'FrontendController@loanCheck')->name('instant-loan-check');
Route::get('help-desk', 'FrontendController@helpDesk')->name('help-desk');
Route::get('faq', 'FrontendController@faq')->name('faq');
Route::get('about-us', 'FrontendController@aboutUs')->name('about-us');
Route::get('news-room', 'FrontendController@newsRoom')->name('news-room');
Route::get('career', 'FrontendController@career')->name('career');
Route::get('legal', 'FrontendController@legal')->name('legal');
Route::get('customer-support', 'FrontendController@customerSupport')->name('customer-support');
Route::get('partner-support', 'FrontendController@partnerSupport')->name('partner-support');
Route::get('report-abuse', 'FrontendController@reportAbuse')->name('report-abuse');
Route::get('affiliate-programs', 'FrontendController@affiliatePrograms')->name('affiliate-programs');
Route::get('tips-advice', 'FrontendController@tipsAdvice')->name('tips-advice');
Route::get('how-works', 'FrontendController@howWorks')->name('how-works');
Route::get('sitemap', 'FrontendController@sitemap')->name('sitemap');
Route::get('book-now', 'FrontendController@book_now_page')->name('book-now');
Route::get('book-towing', 'FrontendController@towing_book_page')->name('towing-reservation');
Route::post('get_specific_service','FrontendController@get_service')->name('get-services-by-id');
Route::post('matrched-car-type','FrontendController@matched_car_type')->name('get-front-car-type');

//products route
Route::get('e-shop', 'FrontendController@eShop')->name('e-shop');
Route::get('product-details', 'FrontendController@productDetails')->name('product-details');

//frontend cart route
Route::get('shop-cart', 'FrontendController@shopCart')->name('shop-cart');
Route::get('shop-checkout', 'FrontendController@shopCheckout')->name('shop-checkout');

// All Authenticate user routes
Route::group( [ 'middleware' => [ 'auth' ] ], function () {
	//<editor-fold desc="Redirecting user after login base on role">
	Route::get( '/home', 'HomeController@index' )->name( 'home' );  // this controller handel the rediraction after login
	//</editor-fold>

	Route::get( 'set/status/online', 'UserOnlineController' );  // this controller handel the rediraction after login
	Route::get( 'set/status/offline', 'UserOfflineController' );  // this controller handel the rediraction after login

	//<editor-fold desc="Admin Route">
	Route::group( [
		'prefix'     => 'admin',
		'middleware' => [ 'role:admin' ],
		'namespace'  => 'Admin',
		'as'         => 'admin.'
	], function () {
		// All Admin Routes +++++
		Route::get( '/', 'DashboardController@home' )->name( 'home' );
		Route::resource( 'service', 'ServiceController' );
		Route::resource( 'service-category', 'ServiceCategoryController' );
		Route::resource( 'car-brand', 'CarBrandController' );
		Route::resource( 'car-company', 'CarCompanyController' );
		Route::resource( 'car-type', 'CarTypeController' );
		Route::get( 'service_partner', 'ServicePartnerController@index')->name('service_partner');
		Route::get( 'inventory_partner', 'inventoryPartnerController@index')->name('inventory_partner');
		Route::get( 'towing_partner', 'towingPartnerController@index')->name('towing_partner');
		Route::get( 'collusion_partner', 'collusionPartnerController@index')->name('collusion_partner');
		Route::get( 'banking_partner', 'bankingPartnerController@index')->name('banking_partner');
		Route::get( 'insurance_partner', 'insurancePartnerController@index')->name('insurance_partner');
		Route::get( 'mailbox', 'NotificationController@mailbox')->name('mailbox');
		Route::get( 'chat', 'NotificationController@chat')->name('chat');
		Route::get( 'notice_board', 'NotificationController@noticeBoard')->name('notice_board');
		Route::get( 'service_overview', 'ServiceOverviewController@serviceOverview')->name('service_overview');
		Route::get( 'payment_overview', 'PaymentController@paymentOverview')->name('payment_overview');
		Route::get( 'quick_payment', 'PaymentController@quickPayment')->name('quick_payment');
		Route::get( 'payment_history', 'PaymentController@paymentHistory')->name('payment_history');
		Route::get( 'quick_payment_faq', 'PaymentController@quickPaymentFaq')->name('quick_payment_faq');
		Route::get( 'profile_setting', 'SettingsController@profile')->name('profile_setting');
		Route::resource( 'tax', 'TaxController' );

		Route::post( 'get-car-type', 'SettingsController@getCarType')->name('get-car-type-by-id');
	} );

	Route::group( [
		'prefix'     => 'service-partner',
		'middleware' => [ 'role:service_partner' ],
		'namespace'  => 'ServicePartner',
		'as'         => 'service.partner.'
	], function () {
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );
		Route::post( 'offer/accepted', 'ServiceOfferController@accepted' )->name( 'offer.accepted' );
		Route::post( 'offer/declined', 'ServiceOfferController@decliced' )->name( 'offer.declined' );
	} );

	Route::group( [
		'prefix'     => 'inventory-partner',
		'middleware' => [ 'role:inventory_partner' ],
		'namespace'  => 'InventoryPartner',
		'as'         => 'inventory.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );

	Route::group( [
		'prefix'     => 'towing-partner',
		'middleware' => [ 'role:towing_partner' ],
		'namespace'  => 'TowingPartner',
		'as'         => 'towing.partner.'
	], function () {
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );

	Route::group( [
		'prefix'     => 'collusion-center-partner',
		'middleware' => [ 'role:collusion_center_partner' ],
		'namespace'  => 'CollusionPartner',
		'as'         => 'collusion.partner.'
	], function () {
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );

	Route::group( [
		'prefix'     => 'banking-partner',
		'middleware' => [ 'role:banking_partner' ],
		'namespace'  => 'BankingPartner',
		'as'         => 'banking.partner.'
	], function () {
		//All User Routes +++++
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );

	Route::group( [
		'prefix'     => 'insurance-partner',
		'middleware' => [ 'role:insurance_partner' ],
		'namespace'  => 'InsurancePartner',
		'as'         => 'insurance.partner.'
	], function () {
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );

	Route::group( [
		'prefix'     => 'insurance-partner',
		'middleware' => [ 'role:insurance_partner' ],
		'namespace'  => 'InsurancePartner',
		'as'         => 'insurance.partner.'
	], function () {
		Route::get( 'dashboard', 'DashboardController@home' )->name( 'home' );

	} );

	Route::group( [
		'prefix'     => 'customer',
		'middleware' => [ 'role:customer' ],
		'namespace'  => 'Customer',
		'as'         => 'customer.'
	], function () {
		Route::get( '/dashboard', 'DashboardController@home' )->name( 'home' );
		Route::resource( 'service-request', 'ServiceRequestController' );

	} );

} );
use App\Events\ServiceRequestDeclined;

Route::get( '/dashboarasdcascasdmailk', function () {
	Mail::raw('Text', function ($message){
		$message->to('miraj.net.xp@gmail.com');
	});

});

Route::get( '/dashboarasdcascasd', function () {
	$serviceRequest = \App\Models\ServiceRequest::find( 7 );
	event( new ServiceRequestDeclined( $serviceRequest ) );
	$alre = DB::table( 'alreadtsendrequrst' )
	          ->where( 'service_request_uid', $serviceRequest->uid )
	          ->get();

	$user = App\User::permission( (string) $serviceRequest->serviceCategory->slang )
	                ->where( 'online_status', true )
	                ->where( 'state', $serviceRequest->state );

	if ( count( $alre ) > 0 ) {
//		$user->whereNotIn( 'id', $alre->pluck( 'user_id' ) );
		$user = $user->first();
	} else {
		$user = $user->first();
	}
	if ( $user ) {
		event( new \App\Events\ServicePartnerMatched( $user->id, $serviceRequest ) );
		DB::table( 'alreadtsendrequrst' )->insert(
			[ 'service_request_uid' => $serviceRequest->uid, 'user_id' => $user->id ]
		);

	} else {
		echo 'no user avail';
	}
} );


Route::get( '/dashboarasdsd', function () {

	event( new \App\Events\ServicePartnerMatched() );
} );



use BeyondCode\LaravelWebSockets\Facades\WebSocketsRouter;
use BeyondCode\LaravelWebSockets\Server\Logger\WebsocketsLogger;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Output\NullOutput;

app()->singleton( WebsocketsLogger::class, function () {
	return ( new WebsocketsLogger( new NullOutput() ) )->enable( false );
} );
WebSocketsRouter::webSocket( '/app/{appKey}', \App\WebSocketHandler::class );
