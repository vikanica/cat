<?php
require '../vendor/autoload.php';
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=travel;host=localhost','root','');
class Place extends \atk4\data\Model {
  public $table = 'places';
function init() {
  	parent::init();
    $this->addField('name',['required'=>true,'caption'=>'City']);
    $this->hasMany('User',new User);
  }
}
class User extends \atk4\data\Model {
  public $table = 'users';
function init() {
  	parent::init();
    $this->addField('name',['required'=>true,'caption'=>'Name']);
    $this->addField('surname',['required'=>true,'caption'=>'Surname']);
            $this->addField('phone_number',['default'=>'+371','caption'=>'Phone number']);
            $this->addField('email');
            $this->addField('depart date',['type'=>'date']);
            $this->addField('arrive date',['type'=>'date']);
            $this->hasOne('places_id',new Place)->addTitle();
}
}
