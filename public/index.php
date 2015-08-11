<?php


use Greenfly\App as App;

include '../vendor/autoload.php';
include '../config/site.php';

$jsonDoc = file_get_contents('../documents.json');

$app = new App($config);
$app->runDocument($jsonDoc);
