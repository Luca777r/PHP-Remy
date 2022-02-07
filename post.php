<?php

$pageTitle = "Connexion";


require_once "includes/header.php";


$loginErrors = [];
$defaultPassword = "toto";


if (isset($_POST["username"]) && isset($_POST["password"])) {
    $password = $_POST["password"];

    if (empty($password)) {
        $loginErrors[] = "Veuillez saisir un mot de passe";
    } elseif ($password != $defaultPassword) {
        $loginErrors[] = "Mot de passe incorrecte";
    }

    if (empty($loginErrors)) {
        $_SESSION["login"] = $_POST["login"];
        header("Location: index.php?loginSuccess=1");
    }
    foreach ($loginErrors as $loginError) {
?>
        <div class="alert alert-danger" role="alert">
            <?= $loginError; ?>
        </div>
    <?php
    }
    ?>

<?php
}

?>
<div class="container-fluid">
    <div class="row d-flex justify-content-center mt-5 mb-5">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Entrer Email">
                <small id="emailHelp" class="form-text text-muted">Vos informations sont sécurisé</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrer mot de passe">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Souviens-toi de moi...</label>
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>
</div>
<?php
if (isset($_GET["loginSucces"]) && $_GET["loginSucces"] == 1) {
?>
    <div class="alert alert-success" role="alert">
        Vous êtes bien connecté
    </div>

<?php
}
require_once "includes/footer.php";
?>