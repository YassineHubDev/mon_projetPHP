<?php require 'inc/header.php';

use src\Controller\ClientController;


//On récupère notre contrôleur
$controller = new ClientController();
//On récupère les données de l'index
$datas = $controller->client();
//On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);
?>

    <h1>Bonjour client</h1>

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPrenom">Prénom</label>
                <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
            </div>
            <div class="form-group col-md-6">
                <label for="inputNom">Nom</label>
                <input type="text" class="form-control" id="inputNom" placeholder="Nom">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Addresse</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1, rue de la paix">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Adresse (suite)</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Suite de l'adresse">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputVille">Ville</label>
                <input type="text" class="form-control" id="inputVille" placeholder="Ville">
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Téléphone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Votre numéro">
            </div>


            <!--<input type="tel" id="phone" name="phone"
                   pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
                   required>

            <span class="note">Format: 123-456-7890</span> -->




            <!-- <div class="custom-file">
                 <input type="file" class="custom-file-input" id="customFile">
                 <label class="custom-file-label" for="customFile">Choose file</label>
             </div> -->

        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

<?php require 'inc/footer.php' ?>