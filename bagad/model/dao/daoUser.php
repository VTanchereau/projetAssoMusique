<?php
/**
 * Created by PhpStorm.
 * User: VTanchereau
 * Date: 11/04/2017
 * Time: 14:20
 */
namespace bagadlag\model\dao;
use bagadlag\model\metier\user;

class daoUser extends dao
{
    /**
     * daoArticle constructor.
     */
    public function __construct()
    {
        $this->tableName = "user";
    }

    public function getUserByLogin($login)
    {
        $query = "SELECT user.id as userId";
        $query .= ", user.first_name as userFirstName";
        $query .= ", user.last_name as userLastName";
        $query .= ", user.birth_date as userBirthDate";
        $query .= ", user.phone_number as userPhoneNumber";
        $query .= ", user.mail as userMail";
        $query .= ", user.login as userLogin";
        $query .= ", user.password as userPassword";
        $query .= ", instrument.name as instrumentName";

        $query .= " FROM ".$this->tableName;
        $query .= " INNER JOIN instrument ON instrument.id = user.instrument_id";
        $query .= " WHERE user.login = '" . $login . "';";

        $response = $this->executeQuery($query);
    }

    public function selectAll(){
        return "ERROR";
    }

    public function processDbResult($dbResult){
        return "ERROR";
    }
}
?>


