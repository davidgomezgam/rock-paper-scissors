<?php

namespace Tests\Unit;

use App\Players\Player;
use App\Weapons\Paper;
use App\Weapons\WeaponInterface;
use Tests\TestCase;

/**
 * Class PlayerTest
 * @package Tests\Unit
 */
class PlayerTest extends TestCase
{
    private $name = 'David Gomez';

    public function testPlayerShouldBeCreated()
    {
        $player = new Player($this->name);

        $this->assertSame($player->name, 'David Gomez');
        $this->assertNotFalse($player->random);

        $player2 = new Player($this->name, false);
        $this->assertSame($player2->name, 'David Gomez');
        $this->assertFalse($player2->random);
    }

    public function testPlayerSetWeapon()
    {
        $player = new Player($this->name, false);
        $player->setWeapon(new Paper());

        $this->assertTrue($player->weapon instanceof Paper);
    }

    public function testPlayerSetRandomWeapon()
    {
        $player = new Player($this->name);
        $weapon = $player->chooseWeapon()->weapon;

        $this->assertTrue($weapon instanceof WeaponInterface);
    }
}