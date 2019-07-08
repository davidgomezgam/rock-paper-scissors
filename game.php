<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$player1 = new App\Players\Player('David Gomez');
$player2 = new App\Players\Player('Player 2', false);
$player2->setWeapon(new App\Weapons\Rock);

$battle = new App\Game\Game(getenv('ROUNDS'), $player1, $player2);
$battle->play();
