<?php

namespace bagadlag\controller;

use bagadlag\model\dao\daoArticle;

class HomeController
{
    public function show()
    {
		$a = new daoArticle();
		$result = $a->selectAll();
		//print_r($result);
        include("view/home.html");
    }
    public function delArticle()
    {
        $id = intval($_GET['id']);
        $a = new daoArticle();
        $a->articleDelete($id);
    }
}