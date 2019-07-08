<?php

namespace Tests\Unit;

use App\Game\Battle;
use App\Players\Player;
use App\Weapons\Paper;
use App\Weapons\Rock;
use App\Weapons\Scissors;
use Tests\TestCase;

/**
 * Class BattleTest
 *
 * @package Tests\Unit
 */
class BattleTest extends TestCase
{
    public function testFlight()
    {
        $player1 = new Player('David Gomez', false);
        $player2 = new Player('Lety Gonzales', false);

        // Round 1
        $player1->setWeapon(new Rock());
        $player2->setWeapon(new Paper());

        $battle = new Battle($player1, $player2);
        $battle->fight();

        $this->assertTrue($player1->defeats === 1 && $player2->victories == 1);

        // Round 2
        $player1->setWeapon(new Paper());
        $player2->setWeapon(new Paper());

        $battle = new Battle($player1, $player2);
        $battle->fight();

        $this->assertTrue($player1->draws === 1 && $player2->draws === 1);

        // Round 3
        $player1->setWeapon(new Scissors());
        $player2->setWeapon(new Paper());

        $battle = new Battle($player1, $player2);
        $battle->fight();

        $this->assertTrue($player1->victories === 1 && $player2->defeats === 1);
    }
}