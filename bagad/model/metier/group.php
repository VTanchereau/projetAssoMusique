<?php
/**
 * Created by PhpStorm.
 * user: VTanchereau
 * Date: 11/04/2017
 * Time: 11:19
 */

namespace bagadlag\model\metier;


class group
{
    private $id;
    private $label;
    private $listRoles;

    /**
     * group constructor.
     * @param $id
     * @param $label
     * @param $listRoles
     */
    public function __construct($id, $label, $listRoles)
    {
        $this->id = $id;
        $this->label = $label;
        $this->listRoles = $listRoles;
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
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return mixed
     */
    public function getListRoles()
    {
        return $this->listRoles;
    }


}