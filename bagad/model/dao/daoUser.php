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
        $this->fields = "user.*, instrument.name as instrumentName";
        $this->join = "INNER JOIN instrument ON instrument.id = user.instrument_id";
    }

    public function processDbResult($dbResult){

        while ($data = $dbResult->fetch()) {
			var_dump($data);
            $id = $data["id"];
			$firstName = $data["first_name"];
			$lastName = $data["last_name"];
			$login = $data["login"];
			$password = $data["password"];
			$mail = $data["mail"];
			$phoneNumber = $data["phone_number"];
			$group = $data["groupe_id"];
			$role = $data["role_id"];
			$instrument = $data["instrumentName"];

            $user = new user($id, $firstName, $lastName, $login, $password, $mail, $phoneNumber, $group, $role, $instrument);
            //error_log($article->getLastName());

            $listUsers[] = $user;
        }
        return $listUsers;
    }
}
?>


