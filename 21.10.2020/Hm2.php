<?php

//homeWork 2.: shop

$tovars = [
["name" => " 'Levi's 512 slim tapered fit jeans in red tint mid wash' ", "in_stock" =>false, "cost" => 66],
["name" => " 'G-Star 3D Scutar slim tapered jeans in raw denim' ", "in_stock" =>true, "cost" => 30],
["name" => " 'G-Star 3301 slim in mid wash Exclusive at ASOS' ", "in_stock" =>false, "cost" => 70],
["name" => " 'COLLUSION Unisex logo joggers in dark grey' ", "in_stock" =>true, "cost" => 40],
["name" => " 'Nike Heritage Essentials Windrunner woven cuffed joggers in navy/red' ", "in_stock" =>false, "cost" => 25],
];
foreach ($tovars as $my_tovars) {
if ($my_tovars["in_stock"]){
echo "Product ". $my_tovars["name"]. " in stock. It's cost is $ ". $my_tovars["cost"]. "<br>";
} else{
echo "Product ". $my_tovars["name"]. " out of stock now". "<br>";
}
}

//task 2: multiplication table
echo "<br>";
echo "<br>";

$multiplication_table = [1,2,3,4,5,6,7,8,9,10];
$count_multiplication_table = count($multiplication_table);
$k = 1;
foreach ($multiplication_table as $my_multiplication_table) {
for ($i = 0; $i < $count_multiplication_table; $i++) {
$n = $k * $multiplication_table[$i];
echo $k . " * " . $multiplication_table[$i] . " = " . $n . "<br>";
}
$k++;
echo "<br>";
}