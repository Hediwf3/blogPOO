<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 10:33
 */
#importation de notre class Ecole

require_once 'Ecole.class.php';
require_once 'Classes.php';
require_once 'Eleves.php';

/**
 * Création d'une instance de la class Ecole.
 *Ici notre variabe $Ecole est un objet de la class Ecole En ce sens elle a accès à l'ensemble des variables et fonctin qui la compose
 */

$Ecole = new Ecole(

    'WF3 Rouen',
    'Place saint-marc',
    'Alexandre MARTINI'


);



#Pour afficher une variable il faut que celle ci passe par la fonction get
#si celle si est en private elle ne fonctionne pas

echo $Ecole->getNomEcole().'<br>';

$Ecole->setNomEcole('WebForce 3 Rouen ltd');

#Création d'eleves
$Eleve1 = new Eleves('JOURAND', 'Benjamin', '26 Ans');
$Eleve2 = new Eleves('BACON', 'Terry', '24 Ans');
$Eleve3 = new Eleves('BOUKHATEB', 'Abdel', '21 Ans');
$Eleve4 = new Eleves('FOLLIN', 'Emilie', '22 Ans');

#Création des classes

$Classe1 = new Classes('Front');
$Classe2 = new Classes('Back');
$Classe3 = new Classes('Full');

#on affecte les eleves a leur classes

$Classe1->AjouterUnEleve($Eleve1);
$Classe1->AjouterUnEleve($Eleve2);
$Classe2->AjouterUnEleve($Eleve3);
$Classe3->AjouterUnEleve($Eleve4);

#Aperçu d'un des classe

echo '<pre>';
print_r($Classe1);
echo '</pre>';

#Apercu des ecoles

$Ecole->AjouterUneClasses($Classe1);
$Ecole->AjouterUneClasses($Classe2);
$Ecole->AjouterUneClasses($Classe3);

echo '<pre>';
print_r($Ecole);
echo '</pre>';


#afficher dans une liste ol les classes et ul les eleves
echo '<ol>';
# Parcourir les classes
// ici je recupère toutes les classes de mon ecole
$lesClasses = $Ecole->getClasses();

foreach ($lesClasses as $objClasse){

    echo '<li>';
    echo $objClasse->getNomClasses();

    echo '<ul>';
    #on recupere les etudiants de la classe

    $lesEtudiants = $objClasse->getEleves();
    foreach ($lesEtudiants as $objEtudiants){

        echo '<li>';
        echo $objEtudiants->getNomComplet();
        echo '</li>';
    }

    echo '</ul>';
    echo '</li>';
}



