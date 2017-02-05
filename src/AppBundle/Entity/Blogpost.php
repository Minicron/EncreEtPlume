<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blogpost
 *
 * @ORM\Table(name="blogpost")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BlogpostRepository")
 */
class Blogpost
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="title", type="string")
     */
    private $title;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="published_at", type="datetime")
     */
    private $published_at;


    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\Column(name="is_published", type ="boolean")
     */
    private $is_published;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Blogpost
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Blogpost
     */
    public function setAuthor($author) {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Blogpost
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent() {
        return $this->content;
    }


    /**
     * @return \DateTime
     */
    public function getPublished_At()
    {
        return $this->published_at;
    }

    /**
     * @param \DateTime $published_at
     */
    public function setPublished_At($published_at)
    {
        $this->published_at = $published_at;
    }

    /**
     * @return mixed
     */
    public function getIsPublished()
    {
        return $this->is_published;
    }

    /**
     * @param mixed $is_published
     */
    public function setIsPublished($is_published)
    {
        $this->is_published = $is_published;
    }
}
