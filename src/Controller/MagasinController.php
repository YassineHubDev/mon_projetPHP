<?php


namespace src\Controller;

use src\Entity\Magasin;
use src\Utilities\Database;
use src\Utilities\FormValidator;

class MagasinController
{
    public function magasin(): array
    {


        // Vérification formulaire + récupération des informations en BDD
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errorMessageNomMagasin = FormValidator::checkPostText('nom_magasin', 255);
            $errorMessageAdresse = FormValidator::checkPostText('adresse', 255);
            $errorMessageVille = FormValidator::checkPostText('ville', 128);
            $errorMessageTelephone = FormValidator::checkPostNumber('telephone', 10, 9999999999);
            $errorMessageProjet = FormValidator::checkPostText('projet', 65535);

            var_dump($errorMessageNomMagasin);
            var_dump($errorMessageAdresse);
            var_dump($errorMessageVille);
            var_dump($errorMessageTelephone);
            var_dump($errorMessageProjet);


            if (empty($errorMessageNomMagasin) &&
                empty($errorMessageAdresse) &&
                empty($errorMessageVille) &&
                empty($errorMessageTelephone) &&
                empty($errorMessageProjet)

            ) {


                // Il n'y a pas d'erreur, on passe à l'inscription
                $database = new Database();
                // $database->connect(); appelé directement dans le constructeur

                $user = new Magasin($_POST['nom_magasin'], $_POST['adresse'], $_POST['ville'], $_POST['telephone'], $_POST['projet']);
                $query = "INSERT INTO magasin (nom_magasin, Adresse, Ville, Téléphone, Projet) VALUES (" .
                    $user->getStrParamsSQL() .
                    ")";

                //On essaye d'insérer en BDD
                $success = $database->exec($query);
                if ($success === 1) {
                    $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
                    if ($_SESSION['role'] === 'client') {
                        header('Location: ' . $url . '/mon-espace-prive');
                    } else {
                        header('Location: ' . $url . '/espace-magasin');
                    }

                }
            }

        }
        return compact('errorMessageNomMagasin', 'errorMessageAdresse', 'errorMessageVille', 'errorMessageTelephone', 'errorMessageProjet');

    }
}