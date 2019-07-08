<?php


namespace App\Weapons;


class Scissors extends WeaponBase implements WeaponInterface
{
    /**
     * @var array
     */
    protected $rule_win = [
        Paper::class
    ];

    /**
     * @var array
     */
    protected $rule_lost = [
        Rock::class
    ];
}