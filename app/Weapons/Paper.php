<?php


namespace App\Weapons;


class Paper extends WeaponBase implements WeaponInterface
{
    /**
     * @var array
     */
    protected $rule_win = [
        Rock::class
    ];

    /**
     * @var array
     */
    protected $rule_lost = [
        Scissors::class
    ];
}