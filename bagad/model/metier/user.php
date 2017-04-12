<?php
/**
 * Created by PhpStorm.
 * user: VTanchereau
 * Date: 11/04/2017
 * Time: 10:19
 */

namespace bagadlag\model\metier;


class user
{
    private $id;
    private $firstName;
    private $lastName;
    private $login;
    private $password;
    private $mail;
    private $phoneNumber;
    private $group;
    private $role;
    private $instrument;

    /**
     * user constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $login
     * @param $password
     * @param $mail
     * @param $phoneNumber
     * @param $group
     * @param $role
     * @param $instrument
     */
    public function __construct($id, $firstName, $lastName, $phoneNumber, $mail, $login, $password, $role, $group, $instrument)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->password = $password;
        $this->mail = $mail;
        $this->phoneNumber = $phoneNumber;
        $this->group = $group;
        $this->role = $role;
        $this->instrument = $instrument;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return mixed
     */
    public function getInstrument()
    {
        return $this->instrument;
    }


}