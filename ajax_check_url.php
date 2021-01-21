<?php
require 'env.php';
require 'vendor/autoload.php';

$jsonError = [
    'id' => null,
    'url' => 'Please check your URL',
    'status' => '',
    'is_error' => 1
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

$statusCode = null;
$statusName = null;
try {
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', trim($url));
    $statusCode = $res->getStatusCode();
    $statusName = $res->getReasonPhrase();

    $value = [
        'id' => null,
        'url' => $url,
        'status' => $statusCode,
        'status_name' => $statusName,
        'is_true' => 0
    ];
} catch(GuzzleHttp\Exception\ClientException $e) {
    $statusCode = $e->getResponse()->getStatusCode();
    $statusName = $e->getResponse()->getReasonPhrase();
    $value = [
        'id' => null,
        'url' => $url,
        'status' => $statusCode,
        'status_name' => $statusName,
        'is_true' => 0
    ];

} catch(\Exception $e) {
    $value = $jsonError;
}

echo json_encode($value);
