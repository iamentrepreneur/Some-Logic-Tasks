<?php

function getClientIp(): string
{
    if (!empty($_GET['ip']) && filter_var($_GET['ip'], FILTER_VALIDATE_IP)) {
        return $_GET['ip'];
    }

    $keys = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_CF_CONNECTING_IP',
        'HTTP_X_REAL_IP',
        'REMOTE_ADDR',
    ];

    foreach ($keys as $key) {
        if (!empty($_SERVER[$key])) {
            $ip = $_SERVER[$key];

            if (str_contains($ip, ',')) {
                $ip = trim(explode(',', $ip)[0]);
            }

            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }

    return '1.1.1.1';
}

function resolvePhoneByCity(?string $city, array $phones, string $defaultPhone): string
{
    if ($city === null) {
        return $defaultPhone;
    }

    if (isset($phones[$city])) {
        return $phones[$city];
    }

    foreach ($phones as $cityName => $phone) {
        if (mb_stripos($city, $cityName) !== false) {
            return $phone;
        }
    }

    return $defaultPhone;
}
