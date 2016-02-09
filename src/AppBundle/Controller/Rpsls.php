<?php
/**
 * Created by PhpStorm.
 * User: ericlinberg
 * Date: 2/2/16
 * Time: 3:45 PM
 */
// src/AppBundle/Controller/Rspls.php

namespace AppBundle\Controller;


use AppBundle\Controller\PlayerObject;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Object;
use Doctrine\ORM\Query\Expr\Base;
use AppBundle\Entity\Stat;
use AppBundle\Entity\Stats;
use AppBundle\Repository\StatsRepository;


class Rpsls extends Controller
{

    private $killArray;
    /**
     * @Route("/sheldon")
     */
    public function sheldonChose()
    {

        $objects = $this->getDoctrine()
            ->getRepository('AppBundle:Object')
            ->findAll();

        $ret = "";
        foreach($objects as $object ){
            $name = $object->getName();
            $buffer[] = $name;
            $kills[$name]= explode(',',$object->getKills());
        }

        $this->killArray = $kills;

        $num_records = count($buffer);
        $number = rand(0, $num_records - 1);

        $sheldonChoice = $buffer[$number];
        return $sheldonChoice;
    }

    /**
     * @Route("/play/{playerId}/{objectId}")
     */
    public function play($playerId,$objectId){

        //Look up player details
        $playerObj = $this->getDoctrine()
            ->getRepository('AppBundle:Player')
            ->find($playerId);


        if(! $playerObj){
            throw $this->createNotFoundException('Failed to look up Player for id:'.$playerId);
        }

        $objectIds=array('rock'=>1,'paper'=>2,'scissors'=>3,'lizard'=>4,'spock'=>5);

        //Look up object details
        $objectObj = $this->getDoctrine()
            ->getRepository('AppBundle:Object')
            ->find(array('id' => $objectId));

        if(! $objectObj){
            throw $this->createNotFoundException('Failed to look up Object for id:'.$objectId);
        }

        $yourChoice = $objectObj->getName();
        //$yourChoice = $objectIds[strtolower($yourChoice)];

        $player = $playerObj->getName();

        $sheldonChoice = $this->sheldonChose();

        $sheldonChoiceId = $objectIds[trim(strtolower($sheldonChoice))];

        $iCanKill = $this->killArray[$yourChoice];



        if($sheldonChoice === $yourChoice){
            $result = PlayerObject::DRAW;
            $return = json_encode(
                        array('sheldon'=> $sheldonChoiceId,
                            'player'=>$player, 'choice'=>$objectId,
                            'result'=> 'It\'s a DRAW!',
                            'result_id'=>2)
                        );
            //insert player result
            $this->createStat($playerId,$yourChoice,PlayerObject::DRAW);
            //Insert Sheldon's stats
            $this->createStat(1,$sheldonChoice,PlayerObject::DRAW);
            $response = new Response($return);
            return($this->CorsResponse($response));
        }

        $meObject = new PlayerObject($player);
        $meObject->setChoice($yourChoice);

        $sheldonObject = new PlayerObject('Sheldon');
        $sheldonObject->setChoice($sheldonChoice);

        $meObject->setOpponent($sheldonObject);
        $sheldonObject->setOpponent($meObject);

        $result = $meObject->fight($iCanKill);

        if($result == PlayerObject::WIN){
            $iResult = $result;
            $sheldonResult = PlayerObject::LOSE;

        } else {
            $iResult = PlayerObject::LOSE;
            $sheldonResult = PlayerObject::WIN;
        }

        //insert player result
        $this->createStat($playerId,$yourChoice,$iResult);
        //Insert Sheldon's stats
        $this->createStat(1,$sheldonChoice,$sheldonResult);
        $resultArray[]="LOSES";
        $resultArray[]="WINS";
        $resultArray[]="DRAW";
        $return = json_encode(array(
            'sheldon'=> $sheldonChoiceId,
            'player'=>$player,
            'choice'=>trim($objectId),
            'result'=> $resultArray[$iResult],
            'result_id'=>$iResult));
        $response = new Response($return);
        return($this->CorsResponse($response));


    }


    /**
     * Persist the stat
     */
    private function createStat($playerId,$threw,$result){
        $oStat = new Stat();

        // Insert Player result
        $oStat->setPlayerId($playerId);
        $oStat->setThrew($threw);
        $oStat->setResult($result);
        $em = $this->getDoctrine()->getManager();
        $em->persist($oStat);
        $em->flush();
    }

    /**
     * @Route("/stats")
     */
    public function getStats(){

        $oStats = $this->getDoctrine()
            ->getRepository('AppBundle:Stats')
            ->getStatistics();

        foreach($oStats as $oStat){
            $arStats[] = array(
                'player'=> $oStat->getPlayer(),
                'win'=> $oStat->getWin(),
                'lose'=> $oStat->getLose(),
                'draw'=> $oStat->getDraw(),
                'rocks'=> $oStat->getRocks(),
                'papers'=> $oStat->getPapers(),
                'scissors'=> $oStat->getScissors(),
                'lizards'=> $oStat->getLizards(),
                'spocks'=> $oStat->getSpocks()
            );
        }

        $response = new Response(json_encode($arStats));
        return( $this->CorsResponse($response) );
    }


    /**
     * @Route("/players")
     */

    public function getPlayers(){

        // get all players except sheldon
        $oPlayers = $this->getDoctrine()
            ->getRepository('AppBundle:Player')
            ->findBy(array('not_sheldon' => 1));

        foreach($oPlayers as $player){
            $result[] = array( 'id'=> $player->getId(), 'name'=> $player->getName() );
        }


        $response = new Response(json_encode($result));
        return( $this->CorsResponse($response) );

    }

    /**
     * @Route("/objects")
     */

    public function getObjects(){

        // get all players except sheldon
        $oObjects = $this->getDoctrine()
            ->getRepository('AppBundle:Object')
            ->findAll();

        foreach($oObjects as $object){
            $result[] = array('name'=> $object->getName(), 'id'=> $object->getId() );
        }
        $response = new Response(json_encode($result));
        return( $this->CorsResponse($response) );

    }

    /**
     * Enable CORS
     */

    private function CorsResponse($response){

        $response->headers->set('Access-Control-Allow-Headers', 'origin, content-type, accept');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');

        return $response;

    }





}