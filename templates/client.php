<?php require 'inc/header.php';

use src\Controller\ClientController;


//On récupère notre contrôleur
$controller = new ClientController();
//On récupère les données de l'index
$datas = $controller->client();
//On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);

?>

    <main class="container2">

        <h1>Bonjour client</h1>


        <form id="espaceclient" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPrenom">Prénom</label>
                    <input type="text" class="form-control" id="inputPrenom" name="prenom" placeholder="Prénom">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputNom">Nom</label>
                    <input type="text" class="form-control" id="inputNom" name="nom" placeholder="Nom">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Addresse</label>
                <input type="text" class="form-control" id="inputAddress" name="adresse" placeholder="1, rue de la paix">
            </div>
            <!-- <div class="form-group">
                <label for="inputAddress2">Adresse (suite)</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Suite de l'adresse">
            </div> -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputVille">Ville</label>
                    <input type="text" class="form-control" id="inputVille" name="ville" placeholder="Ville">
                </div>

                <div class="form-group col-md-6">
                    <label for="phone">Téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="telephone" placeholder="Votre numéro">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Votre projet</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="projet" rows="4"></textarea>
                </div>

                <!-- <div class="custom-file">
                     <input type="file" class="custom-file-input" id="customFile">
                     <label class="custom-file-label" for="customFile">Choose file</label>
                 </div> -->
                <div class="form-group">
                    <label for="exampleFormControlFile1"></label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

            </div>


            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>

    </main>

<?php require 'inc/footer.php' ?>