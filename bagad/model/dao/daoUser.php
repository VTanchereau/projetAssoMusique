<?php
/**
 * Created by PhpStorm.
 * User: VTanchereau
 * Date: 11/04/2017
 * Time: 14:20
 */

namespace bagadlag\model\dao;


class daoUser extends dao
{

    /**
     * daoUser constructor.
     */
    public function __construct()
    {
        $this->tableName = "user";
        $this->fields = array("id", "first_name", "last_name", "phone_Number", "mail", "login", "password", "role_id", "group_id", "instrument_id");
    }

    public function processDbResult($dbResult){
        echo '</br>';
        echo '</br>';
        while ($data = $dbResult->fetch()) {
            echo '</br>';
            echo $data["first_name"];
            echo '</br>';
            print_r($data);
        }
        return 0;
    }
}