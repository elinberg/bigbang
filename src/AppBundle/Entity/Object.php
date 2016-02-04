<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object
 */
class Object
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
     * @var string;
     */
    private $kills;


    /**
     * @return string
     */
    public function getKills()
    {
        return $this->kills;
    }

    /**
     * @param string $kills
     */
    public function setKills($kills)
    {
        $this->kills = $kills;
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
     * @return Object
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
}
