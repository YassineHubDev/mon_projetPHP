<?php


namespace src\Controller;


use src\Entity\User;
use src\Utilities\Database;
use src\Utilities\FormValidator;

class RegisterController

{
    /**
     *Vérification formulaire + inscription de l'utilisateur en BDD
     * @return array
     */
    public function register(): array
    {

// Vérification formulaire + inscription de l'utilisateur en BDD
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errorMessageFirstName = FormValidator::checkPostText('firstname', 255);
            $errorMessageSurName = FormValidator::checkPostText('surname', 255);
            $errorMessageEmail = FormValidator::checkPostText('email', 255);
            $errorMessagePassword = FormValidator::checkPostText('password', 128);

            if (empty($errorMessageFirstName) &&
                empty($errorMessageSurName) &&
                empty($errorMessageEmail) &&
                empty($errorMessagePassword)
            ) {
                // Il n'y a pas d'erreur, on passe à l'inscription
                $database = new Database();
                // $database->connect(); appelé directement dans le constructeur

                // On crée un utilisateur en local
                $user = new User($_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['password'], $_POST['role']);
                $query = "INSERT INTO app_user (email, password, client_nom, client_prénom, role) VALUES (" .
                    $user->getStrParamsSQL() .
                    ")";

                try {
                    //On essaye d'insérer en BDD
                    $success = $database->exec($query);

                    $_SESSION['role'] = $_POST['role'];
                    if ($success === 1) {
                        $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];

                        if ($_POST['role'] === 'client') {
                            header('Location: ' . $url . '/mon-espace-prive');
                        } else {
                            header('Location: ' . $url . '/espace-magasin');
                        }
                    }

                } catch (\PDOException $e) {
                    //Une exception PDO est arrivée, on récupère son code
                    $code = $e->getCode();

                    //Le code 23000 = email unique
                    if ($code === '23000') {
                        //On affiche un message d'erreur
                        $errorMessageEmail = 'Email déjà utilisé';
                    } else {
                        //Si on ne sait pas comment gérer, on provoque une exeption
                        throw new \Exception('PDOException dans RegisterController2');
                    }
                }

            }
        }
        return compact('errorMessageEmail', 'errorMessagePassword', 'success', 'user');

    }
}