<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:40
 */

namespace Application\Model\Auteur;


class Auteur
{
        private $IDAUTEUR,
                $NOMAUTEUR,
                $PRENOMAUTEUR,
                $EMAILAUTEUR;



       public function getNOMCOMPLET(){

           return $this->PRENOMAUTEUR . ' ' . $this->NOMAUTEUR;
       }
    /**
     * @return mixed
     */
    public function getIDAUTEUR()
    {
        return $this->IDAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getNOMAUTEUR()
    {
        return $this->NOMAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getPRENOMAUTEUR()
    {
        return $this->PRENOMAUTEUR;
    }

    /**
     * @return mixed
     */
    public function getEMAILAUTEUR()
    {
        return $this->EMAILAUTEUR;
    }
}