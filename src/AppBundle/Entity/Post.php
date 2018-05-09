<?php
/**
 * Created by PhpStorm.
 * User: Wicio
 * Date: 21.04.2018
 * Time: 17:03
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Post
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostRepository")
 * @ORM\Table(name="post")
 */
class Post
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * @ORM\Column(type="text", length=1000)
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="post")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */protected $user;


    public function __construct()
    {
        $this->date = new \DateTime();
    }



    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }




    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



//
//
//    /**
//     * @ORM\ManyToOne(targetEntity="Author", inversedBy="post")
//     * @ORM\JoinColumn(name="author_id",referencedColumnName="id")
//     */
//    protected $author;
//
//
//
//    public function setAuthor(Author $author)
//    {
//        $this->author=$author;
//    }
//
//    /**
//     * Remove author
//     *
//     * @param \AppBundle\Entity\Author $author
//     */
//    public function removeAuthor(\AppBundle\Entity\Author $author)
//    {
//        $this->author->removeElement($author);
//
//
//    }
//
//    /**
//     * Get authors
//     *
//     * @return \Doctrine\Common\Collections\Collection
//     */
//    public function getAuthor()
//    {
//        return $this->author;
//    }
//
//    /**
//     * Add author
//     *
//     * @param \AppBundle\Entity\Author $author
//     *
//     * @return Post
//     */
//    public function addAuthor(\AppBundle\Entity\Author $author)
//    {
//        $this->author[] = $author;
//
//        return $this;
//    }


}
