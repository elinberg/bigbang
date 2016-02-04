<?php
/**
 * Created by PhpStorm.
 * User: ericlinberg
 * Date: 2/2/16
 * Time: 9:05 PM
 */
namespace AppBundle\Controller;

interface iObject
{
    public function kills($choice,$canKill);
    public function setName($name);
    public function getName();
    public function setChoice($choice);
    public function getChoice();
    public function setOpponent(PlayerObject $opponent);
    public function fight( $iCanKill);
}
