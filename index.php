<?php
require_once 'animal.php';


$bagian = new animal;
$bagian->set_animal('shaun', '2', 'false');
echo  $bagian->get_nama() . "<br>";
echo $bagian->get_leg() . "<br>";
echo $bagian->get_cold() . "<br><br>";

$sungokong = new Ape('kera sakti');
echo $sungokong->yell() . "<br>";

$kodok = new Frog('buduk');
$kodok->jump();
