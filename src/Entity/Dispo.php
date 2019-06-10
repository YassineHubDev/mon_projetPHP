<?php


namespace src\Entity;


class Dispo
{
    private $id_dispo;
    private $jour;
    private $is_dispo;

    /**
     * @return mixed
     */
    public function getIdDispo()
    {
        return $this->id_dispo;
    }

    /**
     * @param mixed $id_dispo
     */
    public function setIdDispo($id_dispo)
    {
        $this->id_dispo = $id_dispo;
    }

    /**
     * @return mixed
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * @param mixed $jour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    }

    /**
     * @return mixed
     */
    public function getIsDispo()
    {
        return $this->is_dispo;
    }

    /**
     * @param mixed $is_dispo
     */
    public function setIsDispo($is_dispo)
    {
        $this->is_dispo = $is_dispo;
    }



}