<?php

class Vehicule
{
    public $marque;
    public $modele;
    public $annee;
    public $energie;
    public $boiteVitesse;
    public $disponibilite;
    public $prix;
    public $fraisDeRemise;

    public function __construct($marque, $modele, $annee, $energie, $boiteVitesse, $disponibilite, $prix, $fraisDeRemise)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->energie = $energie;
        $this->boiteVitesse = $boiteVitesse;
        $this->disponibilite = $disponibilite;
        $this->prix = $prix;
        $this->fraisDeRemise = $fraisDeRemise;
    }

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param mixed $modele
     */
    public function setModele($modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * @param mixed $annee
     */
    public function setAnnee($annee): void
    {
        $this->annee = $annee;
    }


    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * @param mixed $energie
     */
    public function setEnergie($energie): void
    {
        $this->energie = $energie;
    }

    /**
     * @return mixed
     */
    public function getBoiteVitesse()
    {
        return $this->boiteVitesse;
    }

    /**
     * @param mixed $boiteVitesse
     */
    public function setBoiteVitesse($boiteVitesse): void
    {
        $this->boiteVitesse = $boiteVitesse;
    }

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite($disponibilite): void
    {
        $this->disponibilite = $disponibilite;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getFraisDeRemise()
    {
        return $this->fraisDeRemise;
    }

    /**
     * @param mixed $fraisDeRemise
     */
    public function setFraisDeRemise($fraisDeRemise): void
    {
        $this->fraisDeRemise = $fraisDeRemise;
    }

    /**
     * @return mixed
     */
    /**
     * @param mixed $dateVente
     */




}

