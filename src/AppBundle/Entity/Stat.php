<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stat
 */
class Stat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $playerId;

    /**
     * @var string
     */
    private $threw;

    /**
     * @var int
     */
    private $wins;

    /**
     * @var int
     */
    private $losses;


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
     * Set playerId
     *
     * @param integer $playerId
     * @return Stat
     */
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;

        return $this;
    }

    /**
     * Get playerId
     *
     * @return integer 
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Set threw
     *
     * @param string $threw
     * @return Stat
     */
    public function setThrew($threw)
    {
        $this->threw = $threw;

        return $this;
    }

    /**
     * Get threw
     *
     * @return string 
     */
    public function getThrew()
    {
        return $this->threw;
    }

    /**
     * Set wins
     *
     * @param integer $wins
     * @return Stat
     */
    public function setWins($wins)
    {
        $this->wins = $wins;

        return $this;
    }

    /**
     * Get wins
     *
     * @return integer 
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * Set losses
     *
     * @param integer $losses
     * @return Stat
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;

        return $this;
    }

    /**
     * Get losses
     *
     * @return integer 
     */
    public function getLosses()
    {
        return $this->losses;
    }
    /**
     * @var integer
     */
    private $result;


    /**
     * Set result
     *
     * @param integer $result
     * @return Stat
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return integer 
     */
    public function getResult()
    {
        return $this->result;
    }
}
