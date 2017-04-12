<?php
/**
 * Created by Atom
 * User: Coline
 * Date: 12/04/2017
 * Time: 11:20
 */

namespace bagadlag\model\dao;


class daoInstrument extends dao
{

    /**
     * daoInstrument constructor.
     */
    public function __construct()
    {
        $this->tableName = "instrument";
        $this->fields = array("id", "name");
    }

    public function processDbResult($dbResult){
        echo '</br>';
        echo '</br>';
        while ($data = $dbResult->fetch()) {
            echo '</br>';
            echo $data["name"];
            echo '</br>';
            print_r($data);
        }
        return 0;
    }
}