<?php
/**
Création d'une classe école est d'une entité regroupant des variables et des fonctions.
chacune de ces fonctions aura accès aux variables de cette entité
 */

class Ecole
{
    #Déclaration des propriétés de notre class Ecole

    private $NomEcole,
        $AdresseEcole,
        $DirecteurEcole,
        $Classes = [];

    #Afin de pouvoir attribuer une valeur à mes differents variables je vais mettre en place un constructeur.

    /**
     * Ecole constructor.
     * @param $NomEcole
     * @param $AdresseEcole
     * @param $DirecteurEcole
     */
    public function __construct(
        $NomEcole,
        $AdresseEcole,
        $DirecteurEcole
    )
    {

        #Ici nous allons attribuer une valeur aux proprietés de la class. la valeur est passé grâce au constructeur.
        $this->NomEcole         = $NomEcole;
        $this->AdresseEcole     = $AdresseEcole;
        $this->DirecteurEcole   = $DirecteurEcole;
    }


    /*----------------Getters----------------*/

    /**
     * @return mixed
     */
    public function getNomEcole()
    {
        return $this->NomEcole;
    }

    /**
     * @return mixed
     */
    public function getAdresseEcole()
    {
        return $this->AdresseEcole;
    }


    /**
     * @return mixed
     */
    public function getDirecteurEcole()
    {
        return $this->DirecteurEcole;
    }

    /**
     * @return array
     */
    public function getClasses(): array
    {
        return $this->Classes;
    }

    /*-----------------------------------Setters ------------------------*/


    /**
     * @param mixed $NomEcole
     * permet d'affecter une nouvelle valeur a NomEcole
     */
    public function setNomEcole($NomEcole): void
    {
        $this->NomEcole = $NomEcole;
    }

    /**
     * @param mixed $AdresseEcole
     */
    public function setAdresseEcole($AdresseEcole): void
    {
        $this->AdresseEcole = $AdresseEcole;
    }

    /**
     * @param mixed $DirecteurEcole
     */
    public function setDirecteurEcole($DirecteurEcole): void
    {
        $this->DirecteurEcole = $DirecteurEcole;
    }

    /**
     * @param array $Classes
     */
    public function AjouterUneClasses(Classes $Classes): void
    {
        $this->Classes[] = $Classes;
    }
}