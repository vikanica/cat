<?php
require 'connection.php';
$app = new \atk4\ui\App('Travel');
$app->initLayout('Admin');
$crud = $app->add('CRUD');
$crud->setModel(new Place($db));


$app->layout->leftMenu->addItem(['Main Page'],['index']);
$app->layout->leftMenu->addItem(['Places'],['places']);
$app->layout->leftMenu->addItem(['Admin'],['admin']);
