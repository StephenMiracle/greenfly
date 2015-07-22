<?php /*

use Greenfly\App as App;

include 'vendor/autoload.php';
include 'database.php';

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
/*
$config = [
    'content' => [
        'baseUrl' => 'http://greenfly'
    ]
];





$app->get('/install', function ($app) {
    $setup = new \Greenfly\Modules\Content\Install();
});

$app->get('/admin', function () use ($config) {
    $config['content']['admin'] = Admin::index();
    $templateConfig = isset($config['template']) ? $config['template'] : [];
    $template = new Template($templateConfig);
    echo $template->render(['view' => 'content/admin/index.html', 'params' => $config['content']]);
});

$app->get('/admin/type/property-row', function ($app) use ($config) {
    $content = $app->request()->getQuery()->toArray();
    $content['baseUrl'] = $config['content']['baseUrl'];
    $templateConfig = isset($config['template']) ? $config['template'] : [];
    $template = new Template($templateConfig);
    die($template->render(['view' => 'content/admin/type-edit-row.html', 'params' => $content]));
});

$app->get('/admin/type/default-value-input', function ($app) use ($config) {
    $templateConfig = isset($config['template']) ? $config['template'] : [];
    $content = $app->request()->getQuery()->toArray();
    $content['baseUrl'] = $config['content']['baseUrl'];
    $template = new Template($templateConfig);
    die($template->render(['view' => 'content/admin/default-value-input.html', 'params' => $content]));
});

$app->get('/admin/type/edit/:id', function ($app) use ($config) {
    $config['content']['admin'] = Admin::editType($app->params()->getParam('id'));
    $templateConfig = isset($config['template']) ? $config['template'] : [];
    $template = new Template($templateConfig);
    echo $template->render(['view' => 'content/admin/type-edit.html', 'params' => $config['content']]);
});

$app->get('/admin/content/edit/:id', function ($app) use ($config) {
    $config['content']['details'] = Admin::editContent($app->params()->getParam('id'));
    $templateConfig = isset($config['template']) ? $config['template'] : [];
    $template = new Template($templateConfig);
    echo $template->render(['view' => 'content/admin/content-edit.html', 'params' => $config['content']]);
});

$app->get('/admin/content/:contentID/version/edit/:id', function ($app) use ($config) {
    $config['content']['details'] = Admin::editVersion($app->params()->getParams());
    $templateConfig = isset($config['template']) ? $config['template'] : [];
    $template = new Template($templateConfig);
    echo $template->render(['view' => 'content/admin/version-edit.html', 'params' => $config['content']]);
});

$app->post('/admin/type/update', function ($app) use ($config) {
    $content = $app->request()->getPost()->toArray();
    Admin::updateType($content);
    $app->redirect('/admin');
});

$app->post('/admin/content/update', function ($app) use ($config) {
    $content = $app->request()->getPost()->toArray();
    Admin::updateContent($content);
    $app->redirect('/admin');
});

$app->post('/admin/version/update', function ($app) use ($config) {
    $content = $app->request()->getPost()->toArray();
    Admin::updateVersion($content);
    $app->redirect('/admin');
});


$app->get('/:content', function () use ($config) {
    $content = Content::index();
    $templateConfig = isset($config['template']) ? $config['template'] : [];
    $template = new Template($templateConfig);
    echo $template->render(['view' => 'index.html', 'params' => $content]);
});


$app->run(); */