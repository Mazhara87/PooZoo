<?php
require('./Utils/autoload.php');

require('./management.php');

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


<body class="d-flex h-100 text-center text-bg-dark">

  <div class="animals  cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
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

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center text-light">
      <h1 class="display-4 fw-normal ">ENCLOSURE</h1>
    </div>
    </header>

    <main>
      <div class="zones row row-cols-1 row-cols-md-3 mb-3 text-center">


        <!-- TIGERS -->
        <div class="col ">
          <div class="cards mb-4 round shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Tigers</h4>
            </div>
            <div class="card-body">
              <h2 class="card-title pricing-card-title">Animals in Tigers enclosure</h2>
              <ul class="list-unstyled mt-3 mb-4">
                <li><?php $tiger_1->getCharacteristics(); ?></li>
                <li><?php $tiger_1->makeSound() ?></li>
                <li><?php $tiger_1->eat() ?></li>
                <li><?php $tiger_1->roam() ?></li>
                <li><?php $tiger_2->getCharacteristics(); ?></li>
                <li><?php $tiger_2->sleep() ?></li>
              </ul>
            </div>
          </div>
        </div>


        <!-- AQVARIUM -->
        <div class="col">
          <div class="cards mb-4 round shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Aqvarium</h4>
            </div>
            <div class="card-body">
              <h2 class="card-title pricing-card-title">Animals in Aquarium enclosure</h2>
              <ul class="list-unstyled mt-3 mb-4">
                <li><?php foreach ($fish_array as $fish) {
                      echo $fish->getCharacteristics() . '<br>';
                    } ?></li>
                <li><?php $fish_1->swim() ?></li>
                <li><?php $fish_2->sleep() ?></li>
                <li><?php $fish_3->eat() ?></li>
                <li><?php $fish_4->swim() ?></li>
              </ul>
            </div>
          </div>
        </div>



        <!-- EAGLES -->
        <div class="col">
          <div class="cards mb-4 round shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Eagles</h4>
            </div>
            <div class="card-body">
              <h2 class="card-title pricing-card-title">Animals in Aviary enclosure</h2>
              <ul class="list-unstyled mt-3 mb-4">
                <li><?php $eagle_1->getCharacteristics(); ?></li>
                <li><?php $eagle_1->eat() ?></li>
                <li><?php $eagle_2->getCharacteristics(); ?></li>
                <li><?php $eagle_2->fly() ?></li>
              </ul>
            </div>
          </div>
        </div>



        <!-- BEARS -->
        <div class="col">
          <div class="cards mb-4 round shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Bears</h4>
            </div>
            <div class="card-body">
              <h2 class="card-title pricing-card-title">Animals in Bears enclosure</h2>
              <ul class="list-unstyled mt-3 mb-4">
                <li><?php $bear_1->getCharacteristics(); ?></li>
                <li><?php $bear_1->eat() ?></li>
                <li><?php $bear_2->getCharacteristics(); ?></li>
                <li><?php $bear_2->sleep() ?></li>
              </ul>
            </div>
          </div>
        </div>



        <!-- GIRAFFS -->
        <div class="col">
          <div class="cards mb-4 round shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Giraffe</h4>
            </div>
            <div class="card-body">
              <h2 class="card-title pricing-card-title">Animals in Giraffe enclosure</h2>
              <ul class="list-unstyled mt-3 mb-4">
                <li><?php $giraffe_1->getCharacteristics(); ?></li>
                <li><?php $bear_1->eat() ?></li>
                <li><?php $giraffe_2->getCharacteristics(); ?></li>
                <li><?php $bear_1->roam() ?></li>
              </ul>
            </div>
          </div>
        </div>

      </div>

</body>

</html>