<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 10:49
 */

namespace Application\Controlleur;



use Application\Model\Article\ArticleDb;
use Core\Controller\AppController;

class NewsController extends AppController
{



        public function indexAction () {

            #connection a la base de donnée
            $articleDb = new ArticleDb;

            #
            $article = $articleDb->fetchAll();

            #recuperation des article en spotlight

            $spotlight = $articleDb->fetchAll('SPOTLIGHTARTICLE = 1');

            $this->render('news/index', [

                'article' => $article,
                'spotlight' => $spotlight
            ]);

            # $this->render('news/index', ['titre' =>'WebForce3 Rouen !']);
            # include_once PATH_VIEWS . '/news/index.php';
        }



    public function categorieAction(){
        $this->render('news/categorie',['titre' => 'webforce 3 rouen !']);

    }
    public function articleAction(){

        $this->render('news/article',['titre' => 'webforce 3 rouen !']);}


}