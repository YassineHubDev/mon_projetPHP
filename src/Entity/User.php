<?php


namespace src\Entity;


class User
{
    private $email;
    private $password;
    private $client_nom;
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



}

