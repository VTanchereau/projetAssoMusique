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
        if (isset($_POST['submit'])) {
            $articleTitle = $_POST["articleName"];
            $articleVisibility = intval($_POST["articleVisibility"]);
            $articleContent = $_POST["articleContent"];
            $articleAuthor = 1;

            $a = new daoArticle();
            $a->articleRegister($articleTitle, $articleContent, $articleVisibility, $articleAuthor);
        }
    	include("view/articleAdd.html");
    }
    public function upArticle()
    {
        $id = intval($_GET['id']);
        $a = new daoArticle();
        $result = $a->selectFromId($id);

        if (isset($_POST['submit'])) {
            $articleTitle = $_POST["articleName"];
            $articleVisibility = intval($_POST["articleVisibility"]);
            $articleContent = $_POST["articleContent"];
            $articleAuthor = 1;

            $a->articleUpdate($articleTitle, $articleContent, $articleVisibility, $articleAuthor, $id);
            exit();
        }
        include("view/articleAdd.html");
    }
    public function delArticle()
    {
        $id = intval($_GET['id']);
        $a = new daoArticle();
        $a->articleDelete($id);
        header("Location:index.php");
        die();
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

    		$a = new daoEvent();
    		$a->eventAdd($eventName,$eventType,$dateStart,$dateEnd,$eventStatut,$eventContent,$eventPlace,$organizer,$eventPrice);
		

    	}
    }	
}