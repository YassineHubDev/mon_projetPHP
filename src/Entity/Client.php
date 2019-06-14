<?php


namespace src\Entity;


class Client
{
    private $nom;
    private $prenom;
    private $adresse;
    private $ville;
    private $telephone;
    private $projet;

    public function __construct(?string $nom = '', ?string $prenom = '', ?string $adresse = '', ?string $ville = '', ?string $telephone = '', ?string $projet = '')
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->telephone = $telephone;
        $this->projet = $projet;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */
    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     */
    public function setPrenom(?string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * @param string|null $adresse
     */
    public function setAdresse(?string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string|null
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * @param string|null $ville
     */
    public function setVille(?string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     */
    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string|null
     */
    public function getProjet(): ?string
    {
        return $this->projet;
    }

    /**
     * @param string|null $projet
     */
    public function setProjet(?string $projet): void
    {
        $this->projet = $projet;
    }

    public function getStrParamsSQL(): string
    {

        // On crée un tableau avec les 3 propriétés
        $tab = [
            htmlentities($this->nom, ENT_QUOTES),
            htmlentities($this->prenom, ENT_QUOTES),
            htmlentities($this->adresse, ENT_QUOTES),
            htmlentities($this->ville, ENT_QUOTES),
            htmlentities($this->telephone, ENT_QUOTES),
            htmlentities($this->projet, ENT_QUOTES),

        ];
        // On crée une chaîne de caractères séparés de virgules et les quotes simples
        $str = implode("','", $tab);
        // On a ajoute une quote simple au début et une à la fin
        // On retourne l'ensemble
        return "'" . $str . "'";
    }


}