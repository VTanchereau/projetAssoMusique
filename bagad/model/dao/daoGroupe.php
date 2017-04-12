<?php
/**
 * Created by Atom
 * User: Coline
 * Date: 12/04/2017
 * Time: 13:00
 */

namespace bagadlag\model\dao;


class daoGroupe extends dao
{

    /**
     * daoType constructor.
     */
    public function __construct()
    {
        $this->tableName = "groupe";
        $this->fields = array("id", "label");
    }

    public function processDbResult($dbResult){
        echo '</br>';
        echo '</br>';
        while ($data = $dbResult->fetch()) {
            echo '</br>';
            echo $data["label"];
            echo '</br>';
            print_r($data);
        }
        return 0;
    }
}