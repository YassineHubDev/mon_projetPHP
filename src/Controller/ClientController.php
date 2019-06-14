<?php


namespace src\Controller;

use src\Entity\Client;
use src\Utilities\Database;
use src\Utilities\FormValidator;

class ClientController
{
    public function client(): array
    {
        // Vérification formulaire + récupération des informations en BDD
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errorMessageNom = FormValidator::checkPostText('nom', 255);
            $errorMessagePrenom = FormValidator::checkPostText('prenom', 255);
            $errorMessageAdresse = FormValidator::checkPostText('adresse', 255);
            $errorMessageVille = FormValidator::checkPostText('ville', 128);
            $errorMessageTelephone = FormValidator::checkPostNumber('telephone', 10, 9999999999);
            $errorMessageProjet = FormValidator::checkPostText('projet', 65535);

            if (empty($errorMessageNom) &&
                empty($errorMessagePrenom) &&
                empty($errorMessageAdresse) &&
                empty($errorMessageVille) &&
                empty($errorMessageTelephone) &&
                empty($errorMessageProjet)

            ) {
                // Il n'y a pas d'erreur, on passe à l'inscription
                $database = new Database();
                // $database->connect(); appelé directement dans le constructeur


                $user = new Client($_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['ville'], $_POST['telephone'], $_POST['projet']);
                $query = "INSERT INTO client (nom, prénom, adresse, ville, téléphone, projet) VALUES (" .
                    $user->getStrParamsSQL() .
                    ")";

                var_dump($query);


                //On essaye d'insérer en BDD
                $success = $database->exec($query);
                if ($success === 1) {
                    $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
                    header('Location: ' . $url . '/mon-espace-prive');
                }


            }
        }
        return compact('errorMessageNom', 'errorMessagePrenom', 'errorMessageAdresse', 'errorMessageVille', 'errorMessageTelephone', 'errorMessageProjet');

    }

}