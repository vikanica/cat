<?php
echo "O privet";
require 'vendor/autoload.php';
$app = new \atk4\ui\App("Добро пожаловать");
$app->initLayout("Centered");
/*
$button = $app->add('Button');
$button->set('Add invoice');
$button->icon = 'plus';
$button->link('https://www.youtube.com/');

$button = $app->add('Button');
$button->set('Add invoice');
$button->icon = 'plus';
$button->link('https://www.facebook.com/');

$button = $app->add('Button');
$button->set('Add invoice');
$button->icon = 'plus';
$button->link('https://www.e-klase.lv/lv/');
*/
$button= $app->add(['Button','Ilja']);
$button->link('index2.php');
$button->addClass('Massive Blue');
