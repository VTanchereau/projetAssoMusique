<?php

namespace bagadlag\controller;

use bagadlag\model\dao\daoArticle;
use bagadlag\model\dao\daoUser;

class HomeController
{
    public function show()
    {
		$a = new daoArticle();
		$result = $a->selectAll();
		//print_r($result);
        include("view/home.html");
    }
}