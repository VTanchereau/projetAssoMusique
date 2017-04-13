<?php

namespace bagadlag\controller;
use bagadlag\model\dao\dbConnection;


class BureauController
{
    public function show()
    {
		//$a = new daoArticle();
		//$result = $a->selectAll();
        include("view/bureau.html");
    }
    public function addUser()
    {
    	include("view/subscribe.html");
    }
    public function addArticle()
    {
    	header("content :view/articleAdd.html");

    }
    public function addEvent()
    {
		/*renomer addEvent*/
    	include("view/eventAdd.html");
		
		
    }
	
	public function addEventBdd(){
			
		
		var_dump($_POST);
		$eventName = strtolower($_POST["eventName"]);
		$eventType = intval($_POST["eventType"]);
		$dateStart = $_POST["dateStart"];
		$dateEnd = $_POST["dateEnd"];
		$eventStatut = intval($_POST["eventStatut"]);
		$eventContent = $_POST["eventContent"];
		$eventPlace = strtolower($_POST["eventPlace"]);
		$eventPrice = floatval($_POST["eventPrice"]);
		$organizer = intval("1");
		
		$bdd = dbConnection::getInstance()->getDB();
		try
		{

			$queryRequest ='INSERT INTO event(name,start_date,end_date,place,description,valid,fee,type_id,organizer)VALUES(\''.$eventName.'\',\''.$dateStart.'\',\''.$dateEnd.'\',\''.$eventPlace.'\',\''.$eventContent.'\','.$eventStatut.','.$eventPrice.','.$eventType.','.$organizer.');';

			echo $queryRequest;
			$bdd->query($queryRequest);
			echo $queryRequest;
			echo "Evenement bien ajouté!";
		}
		catch(Exception $e)
		{
			$e = "Erreur, votre évènement n\'a pas pu être ajouté";
			echo $e;

		}

		
	}

}