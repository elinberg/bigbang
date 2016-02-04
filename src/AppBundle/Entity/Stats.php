<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 */
class Stats
{


    /**
     * @var string
     */
    private $player;

    /**
     * @var string
     */
    private $win;

    /**
     * @var int
     */
    private $lose;

    /**
     * @var int
     */
    private $draw;




    /**
     * Set player
     *
     * @param string $player
     * @return Stats
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return string 
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set win
     *
     * @param string $win
     * @return Stats
     */
    public function setWin($win)
    {
        $this->win = $win;

        return $this;
    }

    /**
     * Get win
     *
     * @return string 
     */
    public function getWin()
    {
        return $this->win;
    }

    /**
     * Set lose
     *
     * @param integer $lose
     * @return Stats
     */
    public function setLose($lose)
    {
        $this->lose = $lose;

        return $this;
    }

    /**
     * Get lose
     *
     * @return integer 
     */
    public function getLose()
    {
        return $this->lose;
    }

    /**
     * Set draw
     *
     * @param integer $draw
     * @return Stats
     */
    public function setDraw($draw)
    {
        $this->draw = $draw;

        return $this;
    }

    /**
     * Get draw
     *
     * @return integer 
     */
    public function getDraw()
    {
        return $this->draw;
    }


    /**
     * @var integer
     */
    private $rocks;

    /**
     * @var integer
     */
    private $papers;

    /**
     * @var integer
     */
    private $scissors;

    /**
     * @var integer
     */
    private $lizards;

    /**
     * @var integer
     */
    private $spocks;


    /**
     * Set rocks
     *
     * @param integer $rocks
     * @return Stats
     */
    public function setRocks($rocks)
    {
        $this->rocks = $rocks;

        return $this;
    }

    /**
     * Get rocks
     *
     * @return integer 
     */
    public function getRocks()
    {
        return $this->rocks;
    }

    /**
     * Set papers
     *
     * @param integer $papers
     * @return Stats
     */
    public function setPapers($papers)
    {
        $this->papers = $papers;

        return $this;
    }

    /**
     * Get papers
     *
     * @return integer 
     */
    public function getPapers()
    {
        return $this->papers;
    }

    /**
     * Set scissors
     *
     * @param integer $scissors
     * @return Stats
     */
    public function setScissors($scissors)
    {
        $this->scissors = $scissors;

        return $this;
    }

    /**
     * Get scissors
     *
     * @return integer 
     */
    public function getScissors()
    {
        return $this->scissors;
    }

    /**
     * Set lizards
     *
     * @param integer $lizards
     * @return Stats
     */
    public function setLizards($lizards)
    {
        $this->lizards = $lizards;

        return $this;
    }

    /**
     * Get lizards
     *
     * @return integer 
     */
    public function getLizards()
    {
        return $this->lizards;
    }

    /**
     * Set spocks
     *
     * @param integer $spocks
     * @return Stats
     */
    public function setSpocks($spocks)
    {
        $this->spocks = $spocks;

        return $this;
    }

    /**
     * Get spocks
     *
     * @return integer 
     */
    public function getSpocks()
    {
        return $this->spocks;
    }

}
