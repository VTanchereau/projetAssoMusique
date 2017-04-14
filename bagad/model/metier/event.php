<?php
/**
 * Created by PhpStorm.
 * user: VTanchereau
 * Date: 11/04/2017
 * Time: 11:23
 */

namespace bagadlag\model\metier;


class event
{
    private $id;
    private $name;
    private $startDate;
    private $endDate;
    private $place;
    private $description;
    private $fee;
    private $type;
    private $organizer;
    private $listUsers;

    /**
     * event constructor.
     * @param $id
     * @param $name
     * @param $startDate
     * @param $endDate
     * @param $place
     * @param $description
     * @param $valid
     * @param $fee
     * @param $type
     * @param $organizer
     */
    public function __construct($id, $name, $startDate, $endDate, $place, $description, $fee, $type, $organizer)
    {
        $this->id = $id;
        $this->name = $name;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->place = $place;
        $this->description = $description;
        $this->fee = $fee;
        $this->type = $type;
        $this->organizer = $organizer;
        $this->listUsers = Array();
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @return array
     */
    public function getListUsers()
    {
        return $this->listUsers;
    }

    public function addUser($user){
        $this->listUsers[] = $user;
    }
}