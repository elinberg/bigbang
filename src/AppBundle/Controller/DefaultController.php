<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Player;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Object;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/seed/objects")
     */
    public function createObjects()
    {
        $items = array(
            array('name'=>'Rock', 'kills'=>'Lizard,Scissors'),
            array('name'=>'Paper','kills'=>'Rock,Spock'),
            array('name'=>'Scissors','kills'=>'Lizard,Paper'),
            array('name'=>'Lizard','kills'=>'Paper,Spock'),
            array('name'=>'Spock','kills'=> 'Rock,Scissors')
        );

        foreach($items as $item){
            $object = new Object();
            $object->setName($item['name']);
            $object->setKills($item['kills']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($object);
            $em->flush();
            $ids[] = $object->getId();
            $object=NULL;
            $em=NULL;
        }

        $ret = join(',',$ids);
        return new Response("The following Id's where created $ret");

    }

    /**
     * @Route("/seed/players")
     */
    public function createPlayers()
    {
        $players = array(

            array( 'name' =>'Sheldon','age' => 36, 'not_sheldon' => 0 ),
            array( 'name' =>'Penny','age' => 30, 'not_sheldon' => 1 ),
            array( 'name' =>'Leonard','age' => 38, 'not_sheldon' => 1 ),
            array( 'name' =>'Raj','age' => 32, 'not_sheldon' => 1  ),
            array( 'name' =>'Wheaton','age' => 33, 'not_sheldon' => 1 )
        );



        foreach($players as $player){

            $names[] = $player['name'];
            $object = new Player();

            $object->setName($player['name']);
            $object->setAge($player['age']);
            $object->setNotSheldon($player['not_sheldon']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($object);
            $em->flush();
            $ids[] = $object->getId();
            $object=NULL;
            $em=NULL;

        }

        $ret = '';
        foreach($names as $name){

            $ret .= $name.'<br>';

        }


        return new Response("The following Players's where created<br> $ret");

    }
}
