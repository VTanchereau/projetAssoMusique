<?php

namespace bagadlag\controller;

use bagadlag\model\dao\daoArticle;
use bagadlag\model\dao\daoEvent;



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
    	include("view/articleAdd.html");

    	if (isset($_POST['submit'])) {
    		$articleTitle = $_POST["articleName"];
    		$articleVisibility = intval($_POST["articleVisibility"]);
    		$articleContent = $_POST["articleContent"];

    		$a = new daoArticle();
    		$a->articleRegister($articleTitle, $articleContent, $articleVisibility);
    	}

    }
    public function addEvent()
    {

    	include("view/eventAdd.html");
		if (isset($_POST['submit'])) {
    		$eventName = strtolower($_POST["eventName"]);
			$eventType = intval($_POST["eventType"]);
			$dateStart = $_POST["dateStart"];
			$dateEnd = $_POST["dateEnd"];
			$eventStatut = intval($_POST["eventStatut"]);
			$eventContent = $_POST["eventContent"];
			$eventPlace = strtolower($_POST["eventPlace"]);
			$eventPrice = floatval($_POST["eventPrice"]);
			$organizer = 1;
			
			var_dump($_POST);

    		$a = new daoEvent();
    		$a->addEvent($eventName,$eventType,$dateStart,$dateEnd,$eventStatut,$eventContent,$eventPlace,$organizer);
    	}

		
    }
	
}