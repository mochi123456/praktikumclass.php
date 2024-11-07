<?php
// tangkap request class_fruit
require_once 'class_motor.php';

//create instan objek fruit : $apple and $banana
$Yamaha = new Motor();
$Honda = new Motor();

// call member class 
$Yamaha->set_name('Yamaha ');
$Yamaha->set_color('Red ');
$Honda->set_name('Honda ');
$Honda->set_color('Yellow ');

echo 'Nama Motor '.$Yamaha->get_name(). 'Warnanya '.$Yamaha->get_color();
echo '<br/> Nama Motor '.$Honda->get_name(). 'Warnanya '.$Honda->get_color(); 
?>