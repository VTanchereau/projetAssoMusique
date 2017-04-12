<?php

namespace bagadlag\controller;

use bagadlag\model\dao\daoArticle;

class HomeController
{

    public function show()
    {
		$a = new daoArticle();
		$result = $a->selectAll();
        include("view/home.html");
    }
}