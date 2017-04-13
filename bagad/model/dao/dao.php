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
    public function sqlSelect($tableName, $fields = "*", $join = false, $order = false, $where = false){
        $sql = "SELECT " . $this->fields." FROM " . $this->tableName;
        if ($join) $sql .= " ".$join;
        if ($where) $sql .= " ".$where;
        if ($order) $sql .= " ".$order;
        return $sql;
    }

    //Permet de construire une requête SELECT en fonction des paramètres de la classe fille ($order, $join, etc.)
    function sqlSelectStd($where = false) {
        return $this->sqlSelect($this->tableName, isset($this->fields) ? $this->fields : "*", isset($this->join) ? $this->join : false, isset($this->order) ? $this->order : false, $where);
    }

    public function selectAll(){
        $sql = $this->sqlSelectStd();
        $db = dbConnection::getInstance()->getDB();

        $response = $db->query($sql);
        return ($this->processDbResult($response));
    }

    public function executeQuery($query){
        $db = dbConnection::getInstance()->getDB();

        $response = $db->query($query);
        return $response;
    }

    public function selectFromId($id){

    }

    abstract protected function processDbResult($dbResult);

}