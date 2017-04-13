<?php

namespace bagadlag\controller;

use bagadlag\model\dao\daoArticle;


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
    }

}