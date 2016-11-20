<?php

namespace AppBundle\Entity;

class Post
{
    private $id;

    private $title;

    private $text;

    private $postDate;

    public function getId()
    {
        return $this->id;
    }
    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Set text.
     *
     * @param string $text
     *
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set postDate.
     *
     * @param \DateTime $postDate
     *
     * @return Post
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;

        return $this;
    }
    /**
     * Get postDate.
     *
     * @return \DateTime
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Constructor.
     */
    public function __construct($id, $title, $text, $postDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->text = $text;
        $this->postDate = $postDate;
    }
}
