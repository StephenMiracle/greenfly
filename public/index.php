<?php


use Greenfly\App as App;

include '../vendor/autoload.php';
include '../database.php';

$app = new App();


$documentTree = [
    'get' => [
        '/articles/:name' => [
            'callback' => ['Greenfly\Modules\Content\Content', 'single'],
            'config' => [
                'params' =>[
                    'content' => ['type_id' => 2],
                    'version' => ['status' => 1]
                ],
                'render' => [
                    'view' => 'index.html',
                    'data' => []
                ]
            ],
        ]
    ]
];

$adminAllowed = true;

if ($adminAllowed) {
    $documentTree['get']['/install'] = ['callback' => ['Greenfly\Modules\Content\Install', 'start']];
}

App::runDocument($documentTree);

die();