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

        var_dump($result);

        if (isset($_POST['submit'])) {
            $articleTitle = $_POST["articleName"];
            $articleVisibility = intval($_POST["articleVisibility"]);
            $articleContent = $_POST["articleContent"];
            $articleAuthor = 1;

            $a->articleUpdate($id, $articleTitle, $articleContent, $articleVisibility, $articleAuthor);
        }

        include("view/articleAdd.html");
    }
    public function addEvent()
    {
    	include("view/eventAdd.html");
    }

}