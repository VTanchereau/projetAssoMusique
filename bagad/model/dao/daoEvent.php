<?php
/**
 * Created by Atom
 * User: Coline
 * Date: 12/04/2017
 * Time: 13:00
 */

namespace bagadlag\model\dao;


class daoEvent extends dao
{

    /**
     * daoType constructor.
     */
    public function __construct()
    {
        $this->tableName = "event";
        $this->fields = array("id", "name","start_date","end_date","place","description","valid","fee","type_id","organizer");
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