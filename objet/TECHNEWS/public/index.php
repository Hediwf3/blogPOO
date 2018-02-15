<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 14:49
 */

use Core\Core;

require_once 'bootstrap.php';


//require_once PATH_ROOT. '/Core/Core.php';

$core = new Core($_GET);

/**
 * Nous somme ici sur le point d'entree de notre app
 * en mvc c'est ce que l'on appel un fornt controller
 * l'ensemble des actions requete de notre site internet passera uniquement par ce fichier. il a pour mission de transferer au bon controlleur la demande de l'utilisateur
 * dans un framework et en mvc nous utilisons la puissance de la reecriture des urls via la creation d'un fichier .htaccess
 */


