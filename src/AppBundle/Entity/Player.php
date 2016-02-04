<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 */
class Player
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;
    
    /**
     * @var int
     */
    private $age;


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
     * @return Player
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
     * Set age
     *
     * @param integer $age
     * @return Player
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }


    /**
     * @var integer
     */
    private $not_sheldon;


    /**
     * Set not_sheldon
     *
     * @param integer $notSheldon
     * @return Player
     */
    public function setNotSheldon($notSheldon)
    {
        $this->not_sheldon = $notSheldon;

        return $this;
    }

    /**
     * Get not_sheldon
     *
     * @return integer 
     */
    public function getNotSheldon()
    {
        return $this->not_sheldon;
    }
}
