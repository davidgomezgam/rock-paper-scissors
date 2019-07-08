<?php

namespace App\Weapons;

/**
 * Class Scissors
 *
 * @package App\Weapons
 */
class Scissors extends WeaponBase implements WeaponInterface
{
    /**
     * Rules to win
     *
     * @var array
     */
    protected $rule_win = [
        Paper::class
    ];
}