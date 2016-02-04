<?php
/**
 * Created by PhpStorm.
 * User: ericlinberg
 * Date: 2/2/16
 * Time: 9:03 PM
 */

namespace AppBundle\Controller;


use Exception;


class PlayerObject implements iObject
{

    private $name ;
    private $choice;
    private $opponent ;

    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * @return PlayerObject
     */
    public function getOpponent()
    {
        return $this->opponent;
    }

    /**
     * @param PlayerObject $opponent
     */
    public function setOpponent(PlayerObject $opponent)
    {
        $this->opponent = $opponent;
    }

    const WIN = 1;
    const LOSE = 0;
    const DRAW = 2;


    private function checkObject(PlayerObject $object){

        $choice = $this->getChoice();

        if ( strlen($choice) > 0 )
        {
            return true;
        } else {
            return false;
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->opponent;
    }

    public function setChoice($choice)
    {
        $this->choice = $choice;
    }

    public function getChoice()
    {
        return $this->choice;
    }

    public function fight( $iCanKill)
    {



        $opponent = $this->getOpponent();


        if( ! ($this->checkObject($this) & $this->checkObject($opponent) )  )
        {
            throw new Exception('Object names must be set');
        }

        if($this->getChoice() === $opponent->getChoice())
        {
            return $this::DRAW;
        }

        if($this->kills($opponent->getChoice(),$iCanKill))
        {
            return $this::WIN;
        } else {
            return $this::LOSE;
        }
    }

    public function kills($choice, $canKill)
    {

        if(in_array($choice,$canKill))
        {
            return true;
        } else {
            return false;
        }
    }

}