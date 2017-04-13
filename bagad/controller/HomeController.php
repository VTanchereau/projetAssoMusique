<?php

namespace bagadlag\controller;

use bagadlag\model\dao\daoArticle;
use bagadlag\model\dao\daoUser;
use bagadlag\model\metadata\Metadata as Metadata;

class HomeController
{
    public function show()
    {
		$a = new daoArticle();
		$result = $a->selectAll();
        include("view/home.html");

		$test= new Metadata();
		$test->printUserQuery();
    }
	

	
}