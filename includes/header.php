<?php
session_start();
?>

<?php
require_once "includes/variables.php";
?>

<?php
require_once "includes/fonctions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <title>Premiere page</title>
</head>

<header>
    <!-- Navbar -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a href="index.php"><button type="button" class="btn btn-dark">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="list.php"><button type="button" class="btn btn-dark ml-5">Liste</a>
                        </li>

                        <?php
                        if (isset($_SESSION["username"])) {
                        ?>
                            <li class="nav-item">
                                <a href="post.php"><button type="button" class="btn btn-dark ml-5"><?= $_SESSION["username"]; ?></a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php"><button type="button" class="btn btn-dark ml-5">Déconnexion</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a href="post.php"><button type="button" class="btn btn-dark ml-5">Connexion</a>
                            </li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 205px;
      margin-top: 58px;
    ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
</header>



<body>
    <?php
    if (isset($_GET["login"]) && $_GET["login"] == "success") {
    ?>
        <div class="alert alert-success" role="alert">
            Vous êtes connecté
        </div>
    <?php
    }
    ?>
    <?php
    if (isset($_GET["logout"]) && $_GET["logout"] == "success") {
    ?>
        <div class="alert alert-success" role="alert">
            Vous êtes bien déconnecté
        </div>
    <?php
    }
    ?>