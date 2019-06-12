<?php


namespace src\Entity;


class Contact
{

    private $email;
    private $password;


    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->setPassword($password);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
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
    public function setPassword(string $password): void
    {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $this->password = $hash;
    }
}














