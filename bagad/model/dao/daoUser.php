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
        $listUsers = array();
        while ($data = $dbResult->fetch()) {
            $id = $data["id"];
            $firstName = $data["first_name"];
            $lastName = $data["last_name"];
            $phoneNumber = $data["phone_number"];
            $mail = $data["mail"];
            $login = $data["login"];
            $password = $data["password"];
            $instrumentId = $data["instrument_id"];

            $user = new user($id, $firstName, $lastName, $phoneNumber, $mail, $login, $password, $roleId, $groupId, $instrumentId);
            error_log($user->getLastName());
            $listUsers[] = $user;
        }
        return $listUsers;
    }
}