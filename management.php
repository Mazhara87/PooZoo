<?php
$enclosure5 = new Enclosure("Enclosure", "Good");
$enclosure2 = new Enclosure("Aquarium", "Clean");
$enclosure3 = new Enclosure("Aviary", "Clean");

$eagle_1 = new Animal("Eagle", 5, "Medium", "Baldy", 3);
$eagle_2 = new Animal("Eagle", 5, "Medium", "Bu", 3);
$bear_1 = new Animal("Bear", 300, "Medium", "Balu", 2);
$bear_2 = new Animal("Bear", 270, "Medium", "Chloe", 2);
$giraffe_1 = new Animal("Giraffe", 180, "Medium", "Bag", 4);
$giraffe_2 = new Animal("Giraffe", 210, "Medium", "Emma", 3);

$fish_1 = new Animal("Fish", 1, "Small", "Nemo", 2);
$fish_2 = new Animal("Fish", 3, "Big", "Bob", 2);
$fish_3 = new Animal("Fish", 1, "Small", "Plu", 2);
$fish_4 = new Animal("Fish", 1, "Small", "JD", 2);
$fish_array = [$fish_1, $fish_2, $fish_3, $fish_4];

$enclosure3->addAnimal($fish_1);
$enclosure3->addAnimal($fish_3);
$enclosure3->addAnimal($fish_2);
$enclosure3->addAnimal($fish_4);


$tiger_1 = new Animal("Tiger", 200, "Large", "Tony", 5);
$tiger_2 = new Animal("Tiger", 240, "Large", "Beby", 3);

$enclosure5->addAnimal($tiger_1);
$enclosure5->addAnimal($tiger_2);
?>