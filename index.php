<?PHP

require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add(['Button','Whatsapp']);
$button->icon = 'whatsapp';
$button->link('https://web.whatsapp.com/');
