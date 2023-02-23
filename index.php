<?php
require_once('templates/header.php');
require_once('lib/reciepes.php');
?>


<body>
<h1 class="row d-flex flex-wrap align-items-center justify-content-center">Recettes de cuisine</h1> 

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="logo" width="350" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Cuisine - Recette de cuisines</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dignissimos perferendis accusamus consequuntur optio mollitia vel culpa facere placeat esse nisi nesciunt, fugiat nihil voluptatibus harum, ab aliquam quam non commodi necessitatibus, tempore quaerat quia deleniti! Aliquid quod consectetur expedita.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Mes recettes</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Contact</button>
        </div>
      </div>
    </div>
  </div>

  
  <div class="row">

    <?php
    foreach ($reciepes as $key => $reciepe){
    include('templates/reciepes_partial.php');
    // on intègre un clé pour intégrer des chiffres pour chaque recettes. C'est la valeur du tableau.
    } ?>

  </div>

  <?php
  require_once('templates/footer.php');
  ?>












