<?php
require('./Utils/autoload.php');
require('./management.php');

$enclosure1 = new Enclosure("Lion Enclosure", "Good");
$tiger = new Animal("Tiger", 200, "Large", "Tony", 5);

?>

<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
  <script src="/docs/5.3/assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ZOO</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <!-- Custom styles for this template -->
  <link href="./CSS/main.css" rel="stylesheet">
</head>


<body class=" d-flex h-100 text-center text-bg-dark">

  <div class="aaa cover-container d-flex w-100 h-100 p-3 flex-column">
    <header class="mb-5">
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

    <div class="pricing-header p-3 pb-md-4 d-flex justify-content-center text-light mb-5">
      <h1 class="display-4 fw-normal ">ZONES</h1>
    </div>

    <main>
      <div class="zones row row-cols-1 row-cols-md-3 mb-3 text-center">


        <div class="col ">
          <div class="card1 mb-4 round shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Enclousure</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><?php $enclosure5->getAnimalCount(); ?></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li><?php // $enclosure1->addAnimal($tiger); 
                    ?></li>
                <li>The tiger (Panthera tigris) is the largest living cat species and a member of the genus Panthera.</li>
                <li>Bears are carnivoran mammals of the family Ursidae. They are classified as caniforms, or doglike carnivorans.</li>
                <li>The giraffe is a large African hoofed mammal belonging to the genus Giraffa. It is the tallest living terrestrial animal and the largest ruminant on Earth.</li>
              </ul>
              <a href="./animals.php" class="btn transparant btn-outline-success btn-lg text-light">read</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card2 mb-4 round shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Aqvarium</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><?php $enclosure3->getAnimalCount(); ?></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Plus qu’un lieu de divertissement, s’engage au quotidien dans la préservation du monde sous-marin en cultivant par exemple ses coraux au lieu de les prélever dans les océans. Ainsi depuis plus de 5 ans, l’aquarium cultive pas moins de 20 espèces différentes pour agrémenter ses bassins.</li>
              </ul>
              <a href="./animals.php" class="btn transparant btn-outline-success btn-lg text-light">read</a>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card3 mb-4 round shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Aviary</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><?php $enclosure3->getAnimalCount(); ?></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Eagle is the common name for many large birds of prey of the family Accipitridae. Eagles belong to several groups of genera, some of which are closely related. True eagles comprise the genus Aquila. </li>
              </ul>
              <a href="./animals.php" class="btn transparant btn-outline-success btn-lg text-light">read</a>
            </div>
          </div>
        </div>



      </div>

</body>

</html>