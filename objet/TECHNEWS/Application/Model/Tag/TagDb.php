<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 14/02/2018
 * Time: 10:35
 */

namespace Application\Model\Tag;


use Core\Model\DbTable;

class TagDb extends DbTable
{
    protected $_table       = 'tags';
    protected $_primary     = 'IDTAGS';
    protected $_classToMap  = tag::class;
}