<?php
/**
 * Created by Atom
 * User: Coline
 * Date: 12/04/2017
 * Time: 13:00
 */

namespace bagadlag\model\dao;


class daoType extends dao
{

    /**
     * daoType constructor.
     */
    public function __construct()
    {
        $this->tableName = "type";
        $this->fields = array("id", "label","with_fee");
    }

    public function processDbResult($dbResult){
        echo '</br>';
        echo '</br>';
        while ($data = $dbResult->fetch()) {
            echo '</br>';
            echo $data["with_fee"];
            echo '</br>';
            print_r($data);
        }
        return 0;
    }
}