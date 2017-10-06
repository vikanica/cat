<?PHP
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add(['Label','cat']);
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
