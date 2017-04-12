<?php
/**
 * Created by PhpStorm.
 * user: VTanchereau
 * Date: 11/04/2017
 * Time: 11:22
 */

namespace bagadlag\model\metier;


class type
{
    private $id;
    private $label;
    private $withFee;

    /**
     * type constructor.
     * @param $id
     * @param $label
     * @param $withFee
     */
    public function __construct($id, $label, $withFee)
    {
        $this->id = $id;
        $this->label = $label;
        $this->withFee = $withFee;
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
    public function getWithFee()
    {
        return $this->withFee;
    }
}