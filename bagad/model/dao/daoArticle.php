<?php
/**
 * Created by PhpStorm.
 * User: VTanchereau
 * Date: 11/04/2017
 * Time: 14:20
 */

namespace bagadlag\model\dao;

use bagadlag\model\metier\article;

class daoArticle extends dao
{
    /**
     * daoArticle constructor.
     */
    public function __construct()
    {
        $this->tableName = "article";
        $this->fields = "article.*, user.first_name"; // Les champs que l'ondésire selectionnés après SELECT
        $this->join = "INNER JOIN user ON user.id = article.author";
    }

    public function processDbResult($dbResult){

        while ($data = $dbResult->fetch()) {
            $id = $data["id"];
            $title = $data["title"];
            $content = $data["content"];
            $creationDate = $data["creation_date"];
            $visibility = $data["visibility"];
            $author = $data["first_name"];

            $article = new article($id, $author, $title, $content, $creationDate, $visibility);
            //error_log($article->getLastName());
            $listArticle[] = $article;
        }
        return $listArticle;
    }
}