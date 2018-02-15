<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 15:02
 */

namespace Core;

use Core\Controller\AppController;

class Core extends AppController
{
    public function __construct($params)
    {
        #print_r($params);

        #valeur par default

        if(empty($params)) :
            $params['controller'] = 'news';
            $params['action']     = 'index';
         endif;

        $controller = 'Application\Controlleur\\' . ucfirst($params['controller']).'Controller';
        $action     = $params['action'].'Action';


    if(file_exists(PATH_ROOT . '\\' . $controller . '.php')) :

        $obj = new $controller;


        if(method_exists($obj, $action)) :
        $obj->$action();
        else :
            $this->render('errors/404',[
                'message' => 'Cette page n\'existe pas'
            ]);

        endif;

        else :
        $this->render('errors/404',[
            'message' => 'Cette action n\'existe pas'
            ]);

        endif;



        /*

        if ($controller == 'news'  && $action == 'index'){

            echo '<h1>JE SUIS LA PAGE D\'ACCEUIL</h1>';
        }
        if ($controller == 'news'  && $action == 'categorie'){

            echo '<h1>JE SUIS LA PAGE CATEGORIE</h1>';
        }
        if ($controller == 'news'  && $action == 'article'){

            echo '<h1>JE SUIS LA PAGE ARTICLE</h1>';
        }
        if ($controller == 'membres'  && $action == 'inscription'){

            echo '<h1>JE SUIS LA PAGE D\'INSCRIPTION</h1>';
        }
*/



    }

}