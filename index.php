<?php
include_once "includes/header.php"
?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">


        <?php
        foreach ($myproducts as $key => $value) {
            affichage($value);
        ?>
        <?php
        }
        ?>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <a href="list.php"><button type="button" class="btn btn-info mt-5 mb-5">Afficher les autres produits</button></a>
</div>




<?php
include_once "includes/footer.php"
?>