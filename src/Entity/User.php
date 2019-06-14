<?php


namespace src\Entity;


class User
{
    private $email;
    private $password;
    private $firstname;
    private $surname;
    private $role;

    public function __construct(?string $firstname='', ?string $surname='', ?string $email='', ?string $password='', ?string $role='')
    {
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Ajoute et hash le mot de passe
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        // Stockage
        $this->password = $password;
    }

    public function hashPassword()
    {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getStrParamsSQL(): string
    {
        $this->hashPassword();

        // On crée un tableau avec les 3 propriétés
        $tab = [
            htmlentities($this->email, ENT_QUOTES),
            htmlentities($this->password, ENT_QUOTES),
            htmlentities($this->surname, ENT_QUOTES),
            htmlentities($this->firstname, ENT_QUOTES),
            htmlentities($this->role),
        ];
        // On crée une chaîne de caractères séparés de virgules et les quotes simples
        $str = implode("','", $tab);
        // On a ajoute une quote simple au début et une à la fin
        // On retourne l'ensemble
        return "'" . $str . "'";
    }


}

