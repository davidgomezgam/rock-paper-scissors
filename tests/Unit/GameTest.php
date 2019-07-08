<?php

namespace Tests\Unit;

use App\Game\Game;
use App\Players\Player;
use App\Weapons\Paper;
use App\Weapons\Rock;
use Tests\TestCase;

/**
 * Class BattleTest
 *
 * @package Tests\Unit
 */
class GameTest extends TestCase
{
    public function testGameExcute()
    {
        $player1 = new Player('David Gomez', false);
        $player1->setWeapon(new Paper());

        $player2 = new Player('Lety Gonzales', false);
        $player2->setWeapon(new Rock);

        $game = new Game(getenv('ROUNDS'), $player1, $player2);
        $game->play();

        $this->assertStringContainsString('Player David Gomez', $player1->result);
        $this->assertStringContainsString('Victories: 5', $player1->result);
        $this->assertStringContainsString('Draws: 0', $player1->result);
        $this->assertStringContainsString('Defeats: 0', $player1->result);

        $this->assertStringContainsString('Player Lety Gonzales', $player2->result);
        $this->assertStringContainsString('Victories: 0', $player2->result);
        $this->assertStringContainsString('Draws: 0', $player2->result);
        $this->assertStringContainsString('Defeats: 5', $player2->result);
    }
}