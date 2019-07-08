<?php

namespace App\Weapons;

/**
 * Class Paper
 *
 * @package App\Weapons
 */
class Paper extends WeaponBase implements WeaponInterface
{
    /**
     * Rules to win
     *
     * @var array
     */
    protected $rule_win = [
        Rock::class
    ];
}