<?php 
/*
 * Varopago API v1 Client for PHP (version 1.0.0)
 */

if (!function_exists('curl_init')) {
	throw new Exception('CURL PHP extension is required to run Varopago client.');
}
if (!function_exists('json_decode')) {
	throw new Exception('JSON PHP extension is required to run Varopago client.');
}
if (!function_exists('mb_detect_encoding')) {
	throw new Exception('Multibyte String PHP extension is required to run Varopago client.');
}

require(dirname(__FILE__) . '/data/VaropagoApiError.php');
require(dirname(__FILE__) . '/data/VaropagoApiConsole.php');
require(dirname(__FILE__) . '/data/VaropagoApiResourceBase.php');
require(dirname(__FILE__) . '/data/VaropagoApiConnector.php');
require(dirname(__FILE__) . '/data/VaropagoApiDerivedResource.php');
require(dirname(__FILE__) . '/data/VaropagoApi.php');

require(dirname(__FILE__) . '/resources/VaropagoBankAccount.php');
require(dirname(__FILE__) . '/resources/VaropagoCapture.php');
require(dirname(__FILE__) . '/resources/VaropagoCard.php');
require(dirname(__FILE__) . '/resources/VaropagoCharge.php');
require(dirname(__FILE__) . '/resources/VaropagoCustomer.php');
require(dirname(__FILE__) . '/resources/VaropagoFee.php');
require(dirname(__FILE__) . '/resources/VaropagoPayout.php');
require(dirname(__FILE__) . '/resources/VaropagoPlan.php');
require(dirname(__FILE__) . '/resources/VaropagoRefund.php');
require(dirname(__FILE__) . '/resources/VaropagoSubscription.php');
require(dirname(__FILE__) . '/resources/VaropagoTransfer.php');
require(dirname(__FILE__) . '/resources/VaropagoWebhook.php');
require(dirname(__FILE__) . '/resources/VaropagoToken.php');
?>
