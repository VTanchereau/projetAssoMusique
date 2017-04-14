<?php
/**
 * Created by Atom
 * User: Coline
 * Date: 12/04/2017
 * Time: 13:00
 */

namespace bagadlag\model\dao;

use bagadlag\model\metier\event;

class daoEvent extends dao
{

    /**
     * daoType constructor.
     */
    public function __construct()
    {
        $this->tableName = "event";
        $this->fields = "event.*,type.label";
		$this->join = "INNER JOIN type ON type.id = event.type_id";

    }

    public function processDbResult($dbResult){
		while ($data = $dbResult->fetch()) {
			
			//$id, $name, $startDate, $endDate, $place, $description, $valid, $fee, $type, $organizer
			//var_dump($data);
				$id = $data["id"];
				$name = $data["name"];
				$type = $data["label"];
				$startDate = $data["start_date"];
				$endDate = $data["end_date"];
				$description = $data["description"];
				$place = $data["place"];
				$fee = $data["fee"];
				$organizer = $data["organizer"];
				$event = new event($id, $name, $startDate, $endDate, $place, $description, $fee, $type, $organizer);
				$listEvent[] = $event;
		}
		return $listEvent;
	}
	
	public function eventAdd($name,$type,$startDate,$endDate,$eventContent,$place,$organizer,$fee){
	
		$db = dbConnection::getInstance()->getDB();
		$stmt = $db->prepare("INSERT INTO event(name,start_date,end_date,place,description,valid,fee,type_id,organizer)VALUES(:name,:start_date,:end_date,:place,:description,:valid,:fee,:type_id,:organizer)");
			$stmt->bindParam(":name", $name);
			$stmt->bindParam(":start_date", $startDate);
			$stmt->bindParam(":end_date", $endDate);
			$stmt->bindParam(":place", $place);
			$stmt->bindParam(":description", $eventContent);
			$stmt->bindParam(":fee", $fee);
			$stmt->bindParam(":type_id", $type);
			$stmt->bindParam(":organizer", $organizer);
			try{
				$stmt->execute();
			}
			catch(Exception $e){
			}
			$stmt->closeCursor();

    }
	

	public function eventDelete($id){
        $db = dbConnection::getInstance()->getDB();
        $stmt = $db->prepare("DELETE FROM event WHERE id = '$id'");
        $stmt->execute();
		header('location:index.php?page=event');
		$stmt->closeCursor();
	}
	
	public function eventUpdate($eventName,$eventType,$eventStartDate,$eventEndDate,$eventContent,$eventPlace,$eventOrganizer,$eventFee,$id)
	{
		var_dump($id);
		
		$db = dbConnection::getInstance()->getDB();
        $stmt = $db->prepare("UPDATE event SET name='$eventName',start_date='$eventStartDate',end_date='$eventEndDate',place='$eventPlace',description='$eventContent',fee='$eventFee',type_id='$eventType',organizer='$eventOrganizer'  WHERE id = '$id'");
        	$stmt->bindParam(":name", $eventName);
			$stmt->bindParam(":start_date", $eventStartDate);
			$stmt->bindParam(":end_date", $eventEndDate);
			$stmt->bindParam(":place", $eventPlace);
			$stmt->bindParam(":description", $eventContent);
			$stmt->bindParam(":fee", $evenFee);
			$stmt->bindParam(":type_id", $eventType);
			$stmt->bindParam(":organizer", $eventOrganizer);

        $stmt->execute();
		var_dump($stmt);
        $stmt->closeCursor();
		
	}

}