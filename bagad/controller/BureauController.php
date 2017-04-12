<?php

namespace bagadlag\controller;

//use bagadlag\model\dao\daoArticle;

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
    	include("view/subscribe.html");
    }

}