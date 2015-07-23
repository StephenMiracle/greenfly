<?php



include '../vendor/autoload.php';
include '../database.php';

use Greenfly\App as App;

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
        ],
        '/insights' => [
            'callback' => [['Greenfly\Modules\Content\Content', 'tag'],
            'config' => [
                'params' => [
                    'tag' => ['id' => 1], // let's say a work tag
                    'version' => ['status' => 1]

                ],
                'render' => [
                    'view' => 'insights.html',
                    'data' => []
                ]
            ]]
        ],
        '/work' => [
            'callback' => [['Greenfly\Modules\Content\Content', 'tag'],
                'config' => [
                    'params' => [
                        'tag' => ['id' => 1], // let's say a work tag
                        'version' => ['status' => 1]

                    ],
                    'render' => [
                        'view' => 'work.html',
                        'data' => []
                    ]
                ]]
        ]
    ]
];

$adminAllowed = true;

if ($adminAllowed) {
    $documentTree['get']['/install'] = ['callback' => ['Greenfly\Modules\Content\Install', 'start']];
}

App::runDocument($documentTree);

die();