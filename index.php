<?PHP

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->layout->add(['Button','link']);
$button->link('text.txt');

$button = $app->layout->add(['Button','link']);
$button->link(['index(1)','phone'=>'cdguk','number'=>6]);
