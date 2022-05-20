<?php
require_once "data.php";
require_once "menu.php";

$food1 = new Menu($menu1->name, $menu1->price);
$food2 = new Menu($menu2->name, $menu2->price);
$food3 = new Menu($menu3->name, $menu3->price);
$food4 = new Menu($menu4->name, $menu4->price);

$foods = [$food1, $food2, $food3, $food4];

$index = 1;
foreach ($foods as $food) {
    echo $index . ". " . $food->name . "\n";
    $index +=1; 
}



?>