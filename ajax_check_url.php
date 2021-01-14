<?php
require 'env.php';
require 'vendor/autoload.php';

$url = BASE_URL;

$client = new GuzzleHttp\Client();
$res = $client->request('GET', $url);
$status = $res->getStatusCode();

$value = [
    'id' => null,
    'url' => $url,
    'status' => $status
];
echo json_encode($value);