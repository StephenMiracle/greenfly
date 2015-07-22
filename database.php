<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();


$capsule->addConnection([
    'driver'    => 'mysql',
    'database'  => 'content',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'host'      => 'localhost'
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();