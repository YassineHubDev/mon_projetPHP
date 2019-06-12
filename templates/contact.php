<?php require 'inc/header.php';

    use src\Controller\ContactController;


    //On récupère notre contrôleur
    $controller = new ContactController();
    //On récupère les données de l'index
    $datas = $controller->contact();
    //On extrait les données pour pouvoir les utiliser en tant que variables
    extract($datas);
?>

    <form method="post">

        <?php // createInputText('name', 255, "Nom") ?>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email"
                   class="form-control <?= (isset($errorMessageEmail) && !empty($errorMessageEmail)) ? 'is-invalid' : '' ?>"
                   id="email" name="email" value="<?= $_POST['email'] ?? '' ?>">
            <div class="invalid-feedback"><?= $errorMessageEmail ?? "" ?></div>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password"
                   class="form-control <?= (isset($errorMessagePassword) && !empty($errorMessagePassword)) ? 'is-invalid' : '' ?>"
                   id="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
            <div class="invalid-feedback"><?= $errorMessagePassword ?? "" ?></div>
        </div>

        <input type="submit" value="Connexion" class="btn btn-outline-success">

    </form>


<?php require 'inc/footer.php' ?>