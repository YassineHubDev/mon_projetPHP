<?php


namespace src\Controller;

use src\Entity\User;
use src\Utilities\Database;
use src\Utilities\FormValidator;

class ContactController
{
    /**
     * Vérifie les ID et connecte l'utilisateur
     * @return array
     */
    public function contact(): array

    {
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $errorMessageEmail = FormValidator::checkPostText('email', 255);
                $errorMessagePassword = FormValidator::checkPostText('password', 128);

                if (empty($errorMessageEmail) &&
                    empty($errorMessagePassword)
                ) {

                    // Il n'y a pas d'erreur, on passe à l'inscription
                    $database = new Database();
                    // $database->connect(); appelé directement dans le constructeur

                    // On crée un utilisateur en local
                    $user = new User(null, null, $_POST['email'], $_POST['password']);

                    // On recherche l'utilisateur lié à l'email saisi
                    $sql = "SELECT * FROM app_user WHERE email = '{$user->getEmail()}'";
                    $users = $database->query($sql, User::class);

                    if (empty($users)) {
                        $errorMessageEmail = "Cet email n'existe pas";
                    } else {
                        $userPassword = $users[0]->getPassword();
                        if (password_verify($_POST['password'], $userPassword)) {
                            $_SESSION['role'] = $users[0]->getRole();

                            $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
                            if ($_SESSION['role'] === 'client') {
                                header('Location: ' . $url . '/mon-espace-prive');
                            } else {
                                header('Location: ' . $url . '/espace-magasin');
                            }
                            var_dump("Connecté !!!");
                        } else {
                            $errorMessagePassword = "Mauvais mot de passe";
                            var_dump("Pas connecté !!!");
                        }
                    }

                }

            }
            return compact('errorMessageEmail', 'errorMessagePassword');
        }
    }
}
