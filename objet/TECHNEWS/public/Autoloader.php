<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 09:49
 */

class Autoloader


{

    // une fonction static permet d'etre appelé sans etre instanciée elle est deconnecte de l'objet elle appertienent a la classe de cefait les
    // fonction ne communiquent qu'entre elle elle ne peuvent pas appeler des fonction non static
    //mais des fonction non static peuvent appelé des fontion static
 public static function register(){

     spl_autoload_register(array(__CLASS__,'autoload'));

 }

 public static function autoload($class){

     echo 'Autoload pour :';
     print_r($class);
     echo '<br>';
     require PATH_ROOT . '/' . $class . '.php';

 }
}