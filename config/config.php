<?php

$protocolo = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];

$scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$carpetaBase = preg_replace('/\/panel$/', '', $scriptName);
$carpetaBase = rtrim($carpetaBase, '/');

define('BASE_URL', $protocolo . $host . $carpetaBase . '/');

 