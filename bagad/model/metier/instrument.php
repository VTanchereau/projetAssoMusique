<?php
/**
 * Created by PhpStorm.
 * user: VTanchereau
 * Date: 11/04/2017
 * Time: 10:40
 */

namespace bagadlag\model\metier;


class instrument
{
    private $id;
    private $name;

    /**
     * instrument constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
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
}