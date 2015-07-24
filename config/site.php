<?php

include 'env.php';

$config = [
    'site' => [
        'variables' => [
            'siteName' => 'My New Site',
            'siteDescription' => 'a super amazing site that will rock your world',
            'siteUrl' => $env['siteUrl'],
            'pageTitle' => 'my awesome website',
            'metaDescription' => 'check out my new site',
            'metaKeywords' => ''
        ],
        'database' => $env['database'],
        'theme_directory' => '../themes',
        'theme_cache_directory' => '../cache'
    ]
];
