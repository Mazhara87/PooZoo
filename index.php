<?php

require('./Utils/autoload.php');
require('./management.php');




// $tiger = new Animal("Tiger", 200, "Large", "Tony", 5);
// $tiger->eat();
// $tiger->makeSound();
// $tiger->roam();

// $fish = new Animal("Fish", 1, "Small", "Nemo", 2);
// $fish->swim();
// $fish->eat();

// $eagle = new Animal("Eagle", 5, "Medium", "Baldy", 3);
// $eagle->fly();
// $eagle->eat();

// $enclosure2 = new Enclosure("Aquarium", "Clean");

// $enclosure1->addAnimal($tiger);
// $enclosure2->addAnimal($fish);

// $enclosure1->displayAnimalCharacteristics();
// $enclosure2->displayAnimalCharacteristics();

// $employee = new Employee("Adam", "25", "male");
// $enclosure1 = new Enclosure("Lion enclosure", "Good");
// $enclosure2 = new Enclosure("Aquarium", "Clean");

// $employee->cleanEnclosure($enclosure1);
// $employee->feedAnimals($enclosure1);


?>
 


 <!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZOO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">    
    <!-- Custom styles for this template -->
    <link href="./CSS/main.css" rel="stylesheet">
  </head>


  <body class="home d-flex h-100 text-center text-bg-dark">
 
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">ZOO</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="./index.php">Home</a>
        <a class="nav-link fw-bold py-1 px-0" href="./zone.php">Zone</a>
        <a class="nav-link fw-bold py-1 px-0" href="./animals.php">Animals</a>
        <a class="nav-link fw-bold py-1 px-0" href="#">Our team</a>
        <a class="nav-link fw-bold py-1 px-0" href="./contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Welcome to our ZOO</h1>
    <p class="lead">We are glad to welcome you to our ZOO! Meet our animals...</p>
    <p class="lead">
      <a href="./zone.php" class="btn transparant btn-outline-success btn-lg text-light">Journey</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>@ZOO</p>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </body>
</html>


