<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 11:26
 */

class Classes
{

    private $NomClasses,
            $Eleves = [];



    public function __construct($NomClasses)
    {

        $this->NomClasses = $NomClasses;
    }


    /**
     * @return mixed
     */
    public function getNomClasses()
    {
        return $this->NomClasses;
    }

    /**
     * @param mixed $NomClasse
     */
    public function setNomClasses($NomClasses): void
    {
        $this->NomClasses = $NomClasses;
    }

    /**
     * @param Eleves $Eleves
     */
    public function AjouterUnEleve(Eleves $Eleves)
    {
        $this->Eleves[] = $Eleves;
    }

    /**
     * @return array
     */
    public function getEleves(): array
    {
        return $this->Eleves;
    }



}