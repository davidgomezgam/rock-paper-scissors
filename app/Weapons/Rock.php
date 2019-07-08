<?php

namespace App\Weapons;

/**
 * Class Rock
 *
 * @package App\Weapons
 */
class Rock extends WeaponBase implements WeaponInterface
{
    /**
     * Rules to win
     *
     * @var array
     */
    protected $rule_win = [
        Scissors::class
    ];
}