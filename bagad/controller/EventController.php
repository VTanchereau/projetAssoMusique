<?php 
require_once "../model/dao/dao.php";
require_once "../model/dao/daoEvent.php";
require_once "../model/dao/dbConnection.php";

use bagadlag\model\dao\daoEvent;

$a = new daoEvent();
$result = $a->selectAll();

print_r($result);
include("../view/home.html");
?>