<?php
include (dirname(__FILE__).'/../../config/config.inc.php');
include (dirname(__FILE__).'/kavenegar.php');
header('Content-Type: application/json');
if (Tools::getValue('token') != Tools::encrypt(Configuration::get('PS_SHOP_NAME')))
	die('Error: Invalid Token');
$kavenegar = new Kavenegar();
echo Tools::jsonEncode($kavenegar->getCredit());