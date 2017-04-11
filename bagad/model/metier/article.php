<?php
/**
 * Created by PhpStorm.
 * user: VTanchereau
 * Date: 11/04/2017
 * Time: 11:20
 */

namespace bagadlag\model\metier;


class article
{
    private $id;
    private $author;
    private $title;
    private $content;
    private $creationDate;
    private $visibility;

    /**
     * article constructor.
     * @param $id
     * @param $author
     * @param $title
     * @param $content
     * @param $creationDate
     * @param $visibility
     */
    public function __construct($id, $author, $title, $content, $creationDate, $visibility)
    {
        $this->id = $id;
        $this->author = $author;
        $this->title = $title;
        $this->content = $content;
        $this->creationDate = $creationDate;
        $this->visibility = $visibility;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @return mixed
     */
    public function getVisibility()
    {
        return $this->visibility;
    }
}