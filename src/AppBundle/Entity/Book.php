<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="books")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BookRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Book
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\BookType
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BookType", inversedBy="books")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     * @Assert\NotBlank()
     */
    private $bookType;

    /**
     * @var \AppBundle\Entity\Book
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\BookComment", mappedBy="book")
     */
    private $bookComments;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     * @Assert\Length(min=3, max=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\Type(type="string")
     * @Assert\NotBlank()
     */
    private $nameEdition;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", options={"default"="0"}, nullable=true)
     * @Assert\Type(type="integer")
     */
    private $yearEdition;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer", options={"default"="0"}, nullable=true)
     * @Assert\Type(type="integer")
     */
    private $numberPages;

    /**
     * @var float
     *
     * @ORM\Column(type="float")
     * @Assert\Type(type="float")
     * @Assert\NotBlank()
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Type(type="string")
     */
    private $image;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $createdAt;


    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", options={"default"="0"})
     */
    private $slider = false;

    /**
     * @ORM\PreFlush()
     */
    public function preFlush()
    {
        if (!$this->createdAt) {
            $this->createdAt = new \DateTime();
        }
        $this->updatedAt = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Book
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Book
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription($length = null)
    {
        if ($length > 0) {
            $pos = strripos($this->description, '.', $length - 10);
            return substr($this->description, 0, $pos == 0 ? $length : $pos+1);
        } else
            return $this->description;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set nameEdition
     *
     * @param string $nameEdition
     *
     * @return Book
     */
    public function setNameEdition($nameEdition)
    {
        $this->nameEdition = $nameEdition;

        return $this;
    }

    /**
     * Get nameEdition
     *
     * @return string
     */
    public function getNameEdition()
    {
        return $this->nameEdition;
    }

    /**
     * Set yearEdition
     *
     * @param integer $yearEdition
     *
     * @return Book
     */
    public function setYearEdition($yearEdition)
    {
        $this->yearEdition = $yearEdition;

        return $this;
    }

    /**
     * Get yearEdition
     *
     * @return integer
     */
    public function getYearEdition()
    {
        return $this->yearEdition;
    }

    /**
     * Set numberPages
     *
     * @param integer $numberPages
     *
     * @return Book
     */
    public function setNumberPages($numberPages)
    {
        $this->numberPages = $numberPages;

        return $this;
    }

    /**
     * Get numberPages
     *
     * @return integer
     */
    public function getNumberPages()
    {
        return $this->numberPages;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Book
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Book
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set bookType
     *
     * @param \AppBundle\Entity\BookType $bookType
     *
     * @return Book
     */
    public function setBookType(BookType $bookType)
    {
        $this->bookType = $bookType;

        return $this;
    }

    /**
     * Get bookType
     *
     * @return \AppBundle\Entity\BookType
     */
    public function getBookType()
    {
        return $this->bookType;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Book
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Book
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bookComments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bookComment
     *
     * @param \AppBundle\Entity\BookComment $bookComment
     *
     * @return Book
     */
    public function addBookComment(\AppBundle\Entity\BookComment $bookComment)
    {
        $this->bookComments[] = $bookComment;

        return $this;
    }

    /**
     * Remove bookComment
     *
     * @param \AppBundle\Entity\BookComment $bookComment
     */
    public function removeBookComment(\AppBundle\Entity\BookComment $bookComment)
    {
        $this->bookComments->removeElement($bookComment);
    }

    /**
     * Get bookComments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBookComments()
    {
        return $this->bookComments;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName() ?: 'New Book';
    }

    /**
     * Set slider
     *
     * @param boolean $slider
     *
     * @return Book
     */
    public function setSlider($slider)
    {
        $this->slider = $slider;

        return $this;
    }

    /**
     * Get slider
     *
     * @return boolean
     */
    public function getSlider()
    {
        return $this->slider;
    }
}
