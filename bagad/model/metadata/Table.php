<?php
/**
 * Created by PhpStorm.
 * User: VTanchereau
 * Date: 13/04/2017
 * Time: 14:05
 */

namespace bagadlag\model\metadata;


class Table
{
    private $name;
    private $listColumns;

    /**
    * Table constructor.
    * @param $name
    */
    public function __construct($name)
    {
        $this->name = $name;
        $this->listColumns = array();
    }

    /**
    * @return mixed
    */

    public function getName()
    {
        return $this->name;
    }

    /**
    * @return array
    */

    public function getListColumns()
    {
        return $this->listColumns;
    }

    public function addColumn($column){
        $this->listColumns[] = $column;
    }

    public function getQuerySelect(){
        $result = "SELECT";

        $result .= $this->getQueryParams() . " ";

        return $result;
    }

    public function getQueryParams(){
        $result = "";

        for ($i = 0 ; $i < count($this->listColumns) ; $i++){
            $col = $this->listColumns[$i];
            $str = " " . $this->name . '.' . $col->getName() . " as " . $this->name . ucfirst($col->getName()) . ",";
            $result .= $str;
        }

        return $result;
    }

    public function getInner($tableName){
        for ($i = 0 ; $i < count($this->listColumns) ; $i++){
            $col = $this->listColumns[$i];
            $colName = $col->getName();
            $colNameExtern = $tableName . "_id";
            if ($colName == $colNameExtern){
                return " INNER JOIN $this->name ON $this->name.$colName = $tableName.id";
            }
        }
        return "";
    }
}