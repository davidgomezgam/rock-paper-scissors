<?php

namespace Tests\Unit;

use App\Weapons\Paper;
use App\Weapons\Rock;
use App\Weapons\Scissors;
use Tests\TestCase;

/**
 * Class WeaponTest
 * @package Tests\Unit
 */
class WeaponTest extends TestCase
{

    public function testWeaponCompare()
    {
        $rock = new Rock();
        $paper = new Paper();
        $scissors = new Scissors();

        $this->assertTrue($rock->compare((clone $rock)) === 'draw');
        $this->assertTrue($rock->compare((clone $paper)) === 'defeat');
        $this->assertTrue($rock->compare((clone $scissors)) === 'victory');

        $this->assertTrue($paper->compare((clone $paper)) === 'draw');
        $this->assertTrue($paper->compare((clone $scissors)) === 'defeat');
        $this->assertTrue($paper->compare((clone $rock)) === 'victory');

        $this->assertTrue($scissors->compare((clone $scissors)) === 'draw');
        $this->assertTrue($scissors->compare((clone $rock)) === 'defeat');
        $this->assertTrue($scissors->compare((clone $paper)) === 'victory');
    }
}