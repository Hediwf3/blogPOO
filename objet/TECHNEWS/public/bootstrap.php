<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 15:49
 */

#quelque constante utiles

define('PATH_ROOT', dirname(__DIR__));
define('PATH_PUBLIC', '/html-css-js/Projet%20solo/blogPOO/objet/TECHNEWS/public');
define('PATH_APPLICATION', PATH_ROOT . '/Application');
define('PATH_LAYOUT', PATH_APPLICATION . '/Layout');
define('PATH_VIEWS', PATH_APPLICATION . '/Views');
define('PATH_SIDEBAR', PATH_LAYOUT . '/sidebar.inc.php');
define('PATH_HEADER', PATH_LAYOUT . '/header.inc.php');
define('PATH_FOOTER', PATH_LAYOUT . '/footer.inc.php');


#connexion a la base de donne


define('DBHOST', 'LOCALHOST');
define('DBNAME', 'technews');
define('DBUSER', 'root');
define('DBPASW', '');






#chargement de l'autoload

require_once 'Autoloader.php';
Autoloader::register();

// les namespace