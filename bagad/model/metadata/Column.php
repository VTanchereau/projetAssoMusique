<?php
/**
 * Created by PhpStorm.
 * User: VTanchereau
 * Date: 13/04/2017
 * Time: 14:06
 */

namespace bagadlag\model\metadata;


class Column
{
    private $name;
    private $type;

    /**
     * Column constructor.
     * @param $name
     * @param $type
     */
    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
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
    public function getType()
    {
        return $this->type;
    }


}