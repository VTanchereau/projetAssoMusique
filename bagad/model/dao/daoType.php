<?php
/**
 * Created by Atom
 * User: Coline
 * Date: 12/04/2017
 * Time: 13:00
 */

namespace bagadlag\model\dao;

use bagadlag\model\metier\type;

class daoType extends dao
{

    /**
     * daoType constructor.
     */
    public function __construct()
    {
        $this->tableName = "type";
        $this->fields = "type.*";
    }

    public function processDbResult($dbResult){
        while ($data = $dbResult->fetch()) {
			$id = $data["id"];
			$label = $data["label"];
			$withFee = $data["with_fee"];
			$type = new type($id,$label,$withFee);
			$listType[] = $type;
        }
        return $listType;
    }
}