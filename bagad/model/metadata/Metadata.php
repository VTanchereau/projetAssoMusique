<?php
/**
 * Created by PhpStorm.
 * User: VTanchereau
 * Date: 13/04/2017
 * Time: 14:05
 */

namespace bagadlag\model\metadata;

use bagadlag\model\dao\dbConnection as dbConnection;
use bagadlag\model\metadata\Table as Table;
use bagadlag\model\metadata\Column as Column;


class Metadata
{
    private $listTable;

    public function __construct()
    {
        $this->listTable = array();

        $database = "bagad";
        $db = dbConnection::getInstance()->getDB();
        // Query to get list of tables
        $result = $db->query("SHOW TABLES FROM $database");
        if($result)
        {
            $this->listTable = array();

            while($row = $result->fetch())
            {
                $tableName = $row[0];
                $table = new Table($tableName);

                // Get meta data
                $cols = $db->query("SHOW COLUMNS FROM $tableName");
                if($cols)
                {
                    while($col = $cols->fetch())
                    {
                        $column = new Column($col['Field'], $col['Type']);
                        $table->addColumn($column);
                    }
                }
                $this->listTable[] = $table;
                //$table->getQuerySelect();
                //error_log($table->test("user"));
            }
        }
    }

    public function printUserQuery(){
        $select = "";
        $inner = "";
        $innerParams = "";

        $tableName = "user";

        for ($i = 0 ; $i < count($this->listTable) ; $i++) {
            $table = $this->listTable[$i];

            if ($table->getName() == $tableName) {
                $select .= $table->getQuerySelect();
            } else {
                $innerTemp = $table->getInner($tableName);
                if ($innerTemp != "") {
                    $inner .= $innerTemp;
                    $innerParams .= $table->getQueryParams();
                }
            }
        }

        $select = substr($select, 0, -1);
        $innerParams = substr($innerParams, 0, -1);

        $query = $select . $innerParams . " FROM $tableName" . $inner;

        error_log($query);
    }
}