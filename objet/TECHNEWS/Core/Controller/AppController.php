<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 12:31
 */

namespace Core\Controller;


class AppController
{

    private $_viewparams;

    protected function render($view, Array $viewparam = []){

        #recuperation et affectation des parametre de la vue
        $this->_viewparams = $viewparam;

        extract($this->_viewparams);

        include_once PATH_HEADER;

        include_once PATH_VIEWS .'/' . $view . '.php';

        include_once PATH_FOOTER;


    }

    /**
     * @return mixed
     */
    public function getViewparams()
    {

        $object = new \ArrayObject($this->_viewparams);
        $object->setFlags(\ArrayObject::ARRAY_AS_PROPS);
        return $object;
        #  return $this->_viewparams;
    }

    public function debug($params = []){

        if(empty($params)) :
            $params = $this->_viewparams;
        endif;

        echo '<pre>';

        print_r($params);

        echo '</pre>';



    }

}