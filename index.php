<?php
define('_IMAGES_PATH_','./uploads/recipes/');
require_once('templates/header.php');
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

  <?php
  $reciepes =[ 
    ['title' => 'Mousse au chocolat','description' => 'Mousse ipsum dolor sit amet consectetur adipisicing elit. Debitis at nemo illum? Quisquam quas quia minima, est harum explicabo cupiditate.', 'image' =>'1-chocolate-au-mousse.jpg'],
    
    ['title' => 'Gratin d\'auphinois','description' => 'Gratin ipsum dolor sit amet consectetur adipisicing elit. Debitis at nemo illum? Quisquam quas quia minima, est harum explicabo cupiditate.', 'image' =>'2-gratin-dauphinois.jpg'],
    
    ['title' => 'Salade','description' => 'Salade ipsum dolor sit amet consectetur adipisicing elit. Debitis at nemo illum? Quisquam quas quia minima, est harum explicabo cupiditate.', 'image' =>'3-salade.jpg'],
  ];

  ?>

  <div class="row">

    <?php
    foreach ($reciepes as $reciepe){ ?>
    <div class="col-md-4">
      <div class="card">
      <img src="<?=_IMAGES_PATH_.$reciepe["image"]?>" class="card-img-top" alt="mousse au chocolat">
        <div class="card-body">
          <h5 class="card-title"><?=$reciepe["title"]?></h5>
          <p class="card-text"><?=$reciepe["description"]?></p>
          <a href="#" class="btn btn-primary">Voir la recette</a>
        </div>
      </div>
    </div>
    <?php } ?>

  </div>

  <?php
  require_once('templates/footer.php');
  ?>












