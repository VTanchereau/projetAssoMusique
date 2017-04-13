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
		
		$user= new daoUser();
		$user_result = $user->selectAll();
		var_dump($user_result);
		
    }

    public function delArticle()
    {
        $id = intval($_GET['id']);
        $a = new daoArticle();
        $a->articleDelete($id);
    }
}