<?php

namespace App\Weapons;

class Rock extends WeaponBase implements WeaponInterface
{
    /**
     * @var array
     */
    protected $rule_win = [
        Scissors::class
    ];

    /**
     * @var array
     */
    protected $rule_lost = [
        Paper::class
    ];
}