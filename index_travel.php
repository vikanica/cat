<?php
require 'connection.php';
$app = new \atk4\ui\App('Travel');
$app->initLayout('Admin');
$form = $app->layout->add('Form');
$form->setModel(new User($db));
//$form->onSubmit(function($form) {
//	$form->model->save();
//}
$app->layout->leftMenu->addItem(['Main Page'],['index']);
$app->layout->leftMenu->addItem(['Places'],['places']);
$app->layout->leftMenu->addItem(['Admin'],['admin']);
