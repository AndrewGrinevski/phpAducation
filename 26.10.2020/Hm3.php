<?php
// выполнить 5 или более функций для работы с массивами
$massiv = ['first' => 1,4,343,-255,200,50,100,354];
echo "<pre>";
$keys = array_keys($massiv);
print_r($keys);
$m = array_key_first($massiv);
print_r($m);
$k = in_array(343, $massiv);
echo "<br>". $k. "<br>";
$flipped = array_flip($massiv);
print_r($flipped);
array_push($massiv, "ololo", "trololo");
print_r($massiv);
array_unshift($massiv, "Тра-та-та", "Три кита");
print_r($massiv);
echo "</pre>";