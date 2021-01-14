<?php
require 'env.php';
require 'vendor/autoload.php';

$jsonError = [
    'id' => null,
    'url' => 'Please check your URL',
    'status' => ''
];

if (!isset($_GET['url'])) {
    echo json_encode($jsonError);
    die;
}


$url = $_GET['url'];
if (empty($url)) {
    echo json_encode($jsonError);
    die;
}

try {
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', trim($url));
    $status = $res->getStatusCode();

    $value = [
        'id' => null,
        'url' => $url,
        'status' => $status
    ];
    echo json_encode($value);
} catch(\Exception $e) {
    echo json_encode($jsonError);
}