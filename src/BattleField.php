<?php

namespace Spaceship;

use Spaceship\SpaceShipModelSpec\Civic;
use Spaceship\SpaceShipModelSpec\Jazz;

$myCivic = new Civic();
$myJazz = new Jazz();
$aiSpaceship = new AISpaceship();

$game = new Game();

$shipsOnField = [$myCivic, $myJazz, $aiSpaceship];

$randomTracker = rand(1, 10);

echo 'The game starts with three spaceships on the field. One of them is yours. Good Luck!';

if ($randomTracker < 4) {
    //remove myJazz from array   -->could use array_pop or some array function to remove element
    $this->shipsOnField = [$myCivic, $aiSpaceship];

    /* I don't understand why it doesn't recognise element in the array as spaceships
    foreach ($shipsOnField as $ship) {
        $ship->getHealth();
        $ship->getDamage();
    }
    */

    //check with isanybodyhere that there are only two ships left
    if ($game->isAnybodyHere($shipsOnField)) {
        return 'There are only Civic and AI left on the field!';
    };

    //echo damage / health
    echo 'The Civis is on ' . $myCivic->getHealth() . 'health points.';
    echo 'The AI is on ' . $aiSpaceship->getHealth() . 'health points.';

    //display winner
    $game->getWinner();

    return 'Winner is Civic SpaceShip';

} elseif ($randomTracker > 8) {

    $shipsOnField = [$myJazz, $aiSpaceship];

    if ($game->isAnybodyHere($shipsOnField)) {
        return 'There are only Jazz and AI left on the field!';
    };

    echo 'The Jazz is on ' . $myJazz->getHealth() . 'health points.';
    echo 'The AI is on ' . $aiSpaceship->getHealth() . 'health point.';
    
    $game->getWinner();

    return 'Winner is Jazz SpaceShip';

} else {

    return 'Ouch! the machine won!';
}

