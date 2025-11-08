<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/helpers.php';

use Dadata\DadataClient;

$config = require __DIR__ . '/config.php';

$dadata = new DadataClient($config['token'], $config['secret']);

$ip = getClientIp();

$result = $dadata->iplocate($ip);
$city   = $result['data']['city'] ?? null;

$phone  = resolvePhoneByCity($city, $config['phones'], $config['default_phone']);
