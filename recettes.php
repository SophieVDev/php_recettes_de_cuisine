<?php
require_once('templates/header.php');
require_once('lib/reciepes.php');
?>


<body>
<h1 class="row d-flex flex-wrap align-items-center justify-content-center">Liste des Recettes de cuisine</h1> 
<div class="row">
    <?php
    foreach ($reciepes as $key => $reciepe){
    include('templates/reciepes_partial.php');
    } ?>

</div>

<?php
require_once('templates/footer.php');
?>












