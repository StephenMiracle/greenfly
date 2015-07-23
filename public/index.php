<?php


use Greenfly\App as App;

include '../vendor/autoload.php';
include '../config/site.php';

$jsonDoc = file_get_contents('../documents-sample.json');


$app = new App($config);
$app->runDocument($jsonDoc);

die();