<?PHP
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$label = $app->add(['Label','cat']);
$text = $app->add(['text','cat']);
$message = $app->add(['message','cat']);
$button = $app->add(['button','cat']);
$img = 'http://www.catster.com/wp-content/uploads/2017/08/A-brown-cat-licking-its-lips.jpg';
$icon = $app->add(['Image', $img, 'disabled']);
$button = $app->add(['Label', 'cat', 'image'=>$img]);
$button->set(['massive'=>true]);
$button = $app->layout->add(['Button','link']);
$button->link(['index']);
$b = $_GET['phone'];
$view = $app->layout->add(['View',$b]);
/*Class Cat {
public $age;
public $pol;
public $name;
public $color = 'White' ;
const legs = 4;
public function Birthday($year){
$age1= $year- $this->age;
return $age1;
}
public function WheelCount(){
  return self: :Wheels ;
}
} */
