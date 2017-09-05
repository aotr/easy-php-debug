<?php


try {

if (!file_exists('debug.php' ))
  throw new Exception ('debug.php does not exist');
else
  require_once('debug.php' ); 
}
catch(Exception $e) {    
  echo "Message : " . $e->getMessage();
  echo "Code : " . $e->getCode();
  exit();
}

class Car
{
    public $color;
    public $type;
}

$myCar = new Car();
$myCar->color = 'red';
$myCar->type = 'sedan';

$yourCar = new Car();
$yourCar->color = 'blue';
$yourCar->type = 'suv';

pr($yourCar,$myCar);

dc($yourCar,$myCar);

dd($yourCar,$myCar);
?>
