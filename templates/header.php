<?php require('lib/config.php');
// le chemin pour trouver les images

$currentPage = basename($_SERVER['SCRIPT_NAME']);
//il n'y a que la variable que l'on a créé sinon basename, $server et script sont des termes PHP. Objectif : récupérer la fin de chaque url pour lier les onglets aux bon lien. tester var_dump(basename,$_SERVER pour choisir ce que l'on veut en loccurence le script name)
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel = "stylesheet" href="./assets/css/override-bootstrap.css">
<link rel = stylesheet" href="./ssets/css.style.css">
    <title>Document</title>
</head>
<header>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="./assets/images/logo-cuisinea-horizontal.jpg" alt="logo-horizontal" width = "250">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link <?php if($currentPage ==='index.php'){ echo 'active';}?>">Accueil</a></li>
        <!-- le terme active est propre à bootstrap si active l'onglet sera colorié -->
        <li class="nav-item"><a href="recettes.php" class="nav-link <?php if($currentPage ==='recettes.php'){ echo 'active';}?>">Mes recettes</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Prix</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Nous connaitre</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Se connecter</button>
        <button type="button" class="btn btn-primary">S'inscrire</button>
      </div>
    </header>
  </div>
</header>