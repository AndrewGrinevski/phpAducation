<?php
// homeWork1
// task 1.1
echo "<br>";
$x = 1;
if (($x >= -2) && ($x <= 1)) {
    echo "task 1.1: true";
} else {
    echo "task 1.1: false";
}

//task 1.2
echo "<br>";
$z = -3;
if ($z <= -2 || $z >= 1) {
    echo "task 1.2: true";
}
else
{
    echo "task 1.2: false";
}

//task 1.3
echo "<br>";
$n = 2;
if ($n < -2 || ($n >1 && $n<3)) {
    echo "task 1.3: true";
}
else {
    echo "task 1.3: false";
}

//task 1.4a
echo "<br>";
$x1 = -2;
$y1 = 0;
$x2 = 0;
$y2 = 1;
$k = ($y2 - $y1)/($x2 - $x1);
$b= ($y1 * $x2 - $x1 * $y2)/($x2 - $x1);
/* из системы уравнений указанных в задании мы вычислили соответственно
* k = 0.5 и b = 1; */
if (($y1 - 0.5 * $x1 - 1) == 0) {
    echo "task 1.4a: true";
} else {
    echo "task 1.4a: false";
}

//task 1.4b
echo "<br>";

$x = 2;
$y = 3;
if (($y - 0.5 * $x - 1) > 0) {
    echo "task 1.4b: true";
} else {
    echo "task 1.4b: false";
}

//task 1.4c
echo "<br>";

$x = 9;
$y = 4;
if (($y - 0.5 * $x - 1) < 0) {
    echo "task 1.4c: true";
} else {
    echo "task 1.4c: false";
}

//task 2 с clothing store
echo "<br>";
echo "task 2:";
echo "<br>";

$clothing_store = [
    "Clothing" => [
        "name of categories" => ["Men's Activewear","Men's Jeans",
            "Men's Joggers","Men's Hoodies & Sweatshirts","Polo shirts"],
        "Activewear" => [
            "name" => "Men's Activewear",
            "clothing1" => [
                "name" => "Nike Training hyperdry colourblock t-shirt in grey",
                "cost" => "$35",
                "in stock" => true
            ],
            "clothing2" => [
                "name" => "Nike Running jacquard miler t-shirt in pink",
                "cost" => "$31.95",
                "in stock" => true
            ],
            "clothing3" => [
                "name" => "ASOS 4505 training shorts with 2-in-1 in blue",
                "cost" => "$20.00",
                "in stock" => false
            ],
            "clothing4" => [
                "name" => "Adidas Training logo tights in black",
                "cost" => "$33.00",
                "in stock" => true
            ]
        ],
        "Jeans" => [
            "name" => "Men's Jeans",
            "clothing1" => [
                "name" => "ASOS DESIGN 12.5oz skinny jeans in black",
                "cost" => "$30.00",
                "in stock" => false
            ],
            "clothing2" => [
                "name" => "Levi's 512 slim tapered fit jeans in red tint mid wash",
                "cost" => "$95.00",
                "in stock" => true
            ],
            "clothing3" => [
                "name" => "G-Star 3D Scutar slim tapered jeans in raw denim",
                "cost" => "$105.00",
                "in stock" => true
            ],
            "clothing4" => [
                "name" => "G-Star 3301 slim in mid wash Exclusive at ASOS",
                "cost" => "$70.00",
                "in stock" => false
            ]
        ],
        "Joggers" => [
            "name" => "Men's Joggers",
            "clothing1" => [
                "name" => "COLLUSION Unisex logo joggers in dark grey",
                "cost" => "$10.00",
                "in stock" => true
            ],
            "clothing2" => [
                "name" => "ASOS DESIGN organic skinny joggers in black",
                "cost" => "$20.00",
                "in stock" => true
            ],
            "clothing3" => [
                "name" => "Nike Heritage Essentials Windrunner woven cuffed joggers in navy/red",
                "cost" => "$64.95",
                "in stock" => false
            ],
            "clothing4" => [
                "name" => "Nike Club cuffed joggers in black",
                "cost" => "$38.00",
                "in stock" => false
            ]
        ],
        "Hoodies & Sweatshirts" => [
            "name" => "Men's Hoodies & Sweatshirts",
            "clothing1" => [
                "name" => "Nike Jordan Flight patch logo hoodie in dusty green",
                "cost" => "$69.95",
                "in stock" => true
            ],
            "clothing2" => [
                "name" => "adidas Originals 1/4 zip fleece in black",
                "cost" => "$49.95",
                "in stock" => false
            ],
            "clothing3" => [
                "name" => "adidas Originals 1/4 zip fleece in purple",
                "cost" => "$49.95",
                "in stock" => false
            ],
            "clothing4" => [
                "name" => "ASOS DESIGN oversized sweatshirt in washed black",
                "cost" => "$20.00",
                "in stock" => true
            ]
        ],
        "Polo shirts" => [
            "name" => "Men's Polo Shirts",
            "clothing1" => [
                "name" => "ASOS DESIGN oversized jersey shirt with sunset scenic print",
                "cost" => "$22.00",
                "in stock" => true
            ],
            "clothing2" => [
                "name" => "Polo Ralph Lauren slim fit polo shirt in green with pony logo",
                "cost" => "$85.00",
                "in stock" => true
            ],
            "clothing3" => [
                "name" => "Farah Radford arm cuff polo in grey",
                "cost" => "$55.00",
                "in stock" => false
            ],
            "clothing4" => [
                "name" => "C.P. Company patch logo polo in khaki",
                "cost" => "$95.00",
                "in stock" => true
            ]
        ]
    ],
];
print_r($clothing_store["Clothing"]["name of categories"]);
echo "<br>";
if($clothing_store["Clothing"]["Activewear"]["clothing2"]["in stock"]) {
    print_r($clothing_store["Clothing"]["Activewear"]["clothing2"]["name"]);
    echo "<br>";
    print_r($clothing_store["Clothing"]["Activewear"]["clothing2"]["cost"]);
}else{
    echo "Out of stock";
}

//task 3
echo "<br>";
echo "task 3:";
echo "<br>";
$two_last = [1,2,3,4,5,6,7,8,9,"a",4,7,8,"bd",44444];
$last = end($two_last);
echo $last;
echo "<br>";
$penult = prev($two_last);
echo $penult;