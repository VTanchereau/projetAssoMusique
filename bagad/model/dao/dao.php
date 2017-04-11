<?php
/**
 * Created by PhpStorm.
 * User: VTanchereau
 * Date: 11/04/2017
 * Time: 14:12
 */

namespace bagadlag\model\dao;


abstract class dao
{
    protected $fields;
    protected $tableName;

    public function selectAll(){
        $query = "SELECT " . implode(', ', $this->fields)." FROM " . $this->tableName;

        $db = dbConnection::getInstance()->getDB();

        $response = $db->query($query);

        return ($this->processDbResult($response));
    }

    public function selectFromId($id){

    }

    abstract protected function processDbResult($dbResult);

}