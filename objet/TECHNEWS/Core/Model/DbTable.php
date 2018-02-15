<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/02/2018
 * Time: 15:51
 */

namespace Core\Model;

//une class abstract ne peut pas directement est instancier elle doit etre herité
// une class abstract est une class dans laquelle toute ses propriete ou methode n'ont pas ete definie c'est a nous de definir son contenue


abstract class DbTable
{
    #nom de la table
    protected $_table;

    #cle primaire
    protected $_primary;
    #classe a mapper
    protected $_classToMap;

    #instance pdo
    private $_db;

    public function __construct()
    {

        #je recupère l'instance de pdo

        $this->_db = DbFactory::PdoFactory();
    }

    public function fetchAll(
        $where      = '',
        $orderby    = '',
        $limit      = '',
        $offset     = ''

    ){

        $sql = "SELECT * FROM " .$this->_table;

        #si $where n'est pas vide alors je l'inclus dans ma requete

        !empty($where) ? $sql .= ' WHERE ' . $where : null;
        !empty($orderby) ? $sql .= ' ORDER BY ' . $orderby : null;
        !empty($limit) ? $sql .= ' LIMIT ' . $limit : null;
        !empty($offset) ? $sql .= ' OFFSET ' . $offset : null;

        $sth = $this->_db->prepare($sql);

        $sth->execute();

        return$sth->fetchAll(\PDO::FETCH_CLASS, $this->_classToMap);
    }

    public function fetchOne($search, $column = '') {

        empty($column) ? $column = $this->_primary : null;

        $sth = $this->_db->prepare('SELECT * FROM ' . $this->_table . ' WHERE ' . $column . ' = :search' );

        $sth->bindValue(':search', $search, \PDO::PARAM_STR);
        $sth->execute();
        $sth->setFetchMode(\PDO::FETCH_CLASS, $this->_classToMap);

        return $sth->fetch();
    }


}