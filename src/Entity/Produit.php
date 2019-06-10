<?php
namespace src\Entity;

class Produit
{
    private $nom;
    private $service_nom;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getServiceNom()
    {
        return $this->service_nom;
    }

    /**
     * @param mixed $service_nom
     */
    public function setServiceNom($service_nom)
    {
        $this->service_nom = $service_nom;
    }


}