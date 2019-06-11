<?php


namespace src\Entity;


class User
{
    private $email;
    private $password;
    private $client_nom;
    private $client_prenom;
    private $magasin_nom;
    private $role;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getClientPrenom()
    {
        return $this->client_prenom;
    }

    /**
     * @param mixed $client_prenom
     */
    public function setClientPrenom($client_prenom)
    {
        $this->client_prenom = $client_prenom;
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
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getClientNom()
    {
        return $this->client_nom;
    }

    /**
     * @param mixed $client_nom
     */
    public function setClientNom($client_nom)
    {
        $this->client_nom = $client_nom;
    }

    /**
     * @return mixed
     */
    public function getMagasinNom()
    {
        return $this->magasin_nom;
    }

    /**
     * @param mixed $magasin_nom
     */
    public function setMagasinNom($magasin_nom)
    {
        $this->magasin_nom = $magasin_nom;
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

    public function getStrParamsSQL(): string
    {
        // On crée un tableau avec les 3 propriétés
        $tab = [
            htmlentities($this->username),
            htmlentities($this->firstname),
        htmlentities($this->surname),
            htmlentities($this->email),
            htmlentities($this->password)
        ];
        // On crée une chaîne de caractères séparés de virgules et les quotes simples
        $str = implode("','", $tab);
        // On a ajoute une quote simple au début et une à la fin
        // On retourne l'ensemble
        return "'" . $str . "'";
    }


}

