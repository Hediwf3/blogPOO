<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 11:36
 */

class Eleves
{

    private     $NomEleves,
                $PrenomEleves,
                $AgeEleves;


    public function __construct(
        $NomEleves,
        $PrenomEleves,
        $AgeEleves
    )
    {
        $this->NomEleves = $NomEleves;
        $this->PrenomEleves = $PrenomEleves;
        $this->AgeEleves = $AgeEleves;
    }


    /**
     * @return mixed
     */
    public function getPrenomEleves()
    {
        return $this->PrenomEleves;
    }

    /**
     * @return mixed
     */
    public function getNomEleves()
    {
        return $this->NomEleves;
    }

    /**
     * @return mixed
     */
    public function getAgeEleves()
    {
        return $this->AgeEleves;
    }


    /**
     * @param mixed $NomEleves
     */
    public function setNomEleves($NomEleves): void
    {
        $this->NomEleves = $NomEleves;
    }

    /**
     * @param mixed $PrenomEleves
     */
    public function setPrenomEleves($PrenomEleves): void
    {
        $this->PrenomEleves = $PrenomEleves;
    }

    /**
     * @param mixed $AgeEleves
     */
    public function setAgeEleves($AgeEleves): void
    {
        $this->AgeEleves = $AgeEleves;
    }

    public function getNomComplet()
    {
        return $this->PrenomEleves. '' . $this->NomEleves;
    }

}