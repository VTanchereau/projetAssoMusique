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
        $this->fields = "event.*";
    }

    public function processDbResult($dbResult){
		  while ($data = $dbResult->fetch()) {
				$eventName = $data["eventName"];
				$eventType = $data["eventType"];
				$dateStart = $data["dateStart"];
				$dateEnd = $data["dateEnd"];
				$eventStatut = $data["eventStatut"];
				$eventContent = $data["eventContent"];
				$eventPlace = $data["eventPlace"];
				$eventPrice = $data["eventPrice"];
				$organizer = $data["organizer"];

				$event = new event($eventName,$eventType,$dateStart,$dateEnd,$eventStatut,$eventContent,$eventPlace,$organizer);
					$listEvent[] = $event;
			}
				return $listEvent;
		}

		
	
	public function addEvent($eventName,$eventType,$dateStart,$dateEnd,$eventStatut,$eventContent,$eventPlace,$organizer){
	
		$db = dbConnection::getInstance()->getDB();
		var_dump($db);
		$stmt = $db->prepare("INSERT INTO event(name,start_date,end_date,place,description,valid,fee,type_id,organizer)VALUES(:name,:start_date,:end_date,:place,:description,:valid,:fee,:type_id,:organizer)");
			$stmt->bindParam(":name", $eventName);
			$stmt->bindParam(":start_date", $dateStart);
			$stmt->bindParam(":end_date", $dateEnd);
			$stmt->bindParam(":place", $eventPlace);
			$stmt->bindParam(":description", $eventContent);
			$stmt->bindParam(":valid", $eventStatut);
			$stmt->bindParam(":fee", $eventPrice);
			$stmt->bindParam(":type_id", $eventType);
			$stmt->bindParam(":organizer", $organizer);

			$stmt->execute();
			$stmt->closeCursor();


		

    }
}