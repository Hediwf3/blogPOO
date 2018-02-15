<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:12
 */

namespace Application\Model\Article;


use Application\Model\Auteur\AuteurDb;
use Application\Model\Categorie\CategorieDb;

class Article
{

    private $IDARTICLE,
            $IDAUTEUR,
            $IDCATEGORIE,
            $TITREARTICLE,
            $CONTENUARTICLE,
            $FEATUREDIMAGEARTICLE,
            $SPECIALARTICLE,
            $SPOTLIGHTARTICLE,
            $DATECREATIONARTICLE,
            $CATEGORIEOBJ,
            $AUTEUROBJ;

    /**
     * @return mixed
     */
    public function getCATEGORIEOBJ()
    {
        return $this->CATEGORIEOBJ;
    }

    /**
     * @return mixed
     */
    public function getAUTEUROBJ()
    {
        return $this->AUTEUROBJ;
    }
    public function __construct()
    {
        #lappel au constructeur se fait de facon automatique par la classe pdo
        $categorieDb = new CategorieDb;
        $auteurDb = new AuteurDb;

        $this->AUTEUROBJ = $auteurDb->fetchOne($this->IDAUTEUR);
        $this->CATEGORIEOBJ = $categorieDb->fetchOne($this->IDCATEGORIE);
    }

    /**
     * @return mixed
     */
    public function getIDARTICLE()
    {
        return $this->IDARTICLE;
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
    public function getIDCATEGORIE()
    {
        return $this->IDCATEGORIE;
    }

    /**
     * @return mixed
     */
    public function getTITREARTICLE()
    {
        return $this->TITREARTICLE;
    }

    /**
     * @return mixed
     */
    public function getCONTENUARTICLE()
    {
        return $this->CONTENUARTICLE;
    }

    /**
     * @return mixed
     */
    public function getFEATUREDIMAGEARTICLE()
    {
        return $this->FEATUREDIMAGEARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPECIALARTICLE()
    {
        return $this->SPECIALARTICLE;
    }

    /**
     * @return mixed
     */
    public function getSPOTLIGHTARTICLE()
    {
        return $this->SPOTLIGHTARTICLE;
    }

    /**
     * @return mixed
     */
    public function getDATECREATIONARTICLE()
    {
        return $this->DATECREATIONARTICLE;
    }

    #retourn l'url complet de l'image
    public function getFULLIMAGEARTICLE(){

        return PATH_PUBLIC . '/' . 'images/product/' . $this->getFEATUREDIMAGEARTICLE();
    }


    public function getACCROCHEARTICLE(){

    #supprimer toute les balises html
        $strings = strip_tags($this->CONTENUARTICLE);
        #si ma chaine de caractere est superieur a 170

        if(strlen($string) > 170) :

            $stringCut = substr($string, 0, 170);

            $string = substr($stringCut, 0, strrpos($stringCut, ' '));

        endif;
    }





}