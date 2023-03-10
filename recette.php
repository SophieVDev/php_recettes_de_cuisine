<?php
require_once('templates/header.php');
require_once('lib/reciepes.php');

$id = $_GET['id'];
// chaque url aura un numéro, un ID et en fonction de l'ID la recette changera.
// Le $_GET Permet de récupérer les variables d'url.
?>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?=_IMAGES_PATH_.$reciepes[$id]['image']?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3"><?=$reciepes[$id]['title'] ?></h1>
        <p class="lead"><?=$reciepes[$id]['description'] ?></p>
      </div>
    </div>
</div>


<?php
require_once('templates/footer.php');
?>












