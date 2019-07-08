<?php

namespace App\Weapons;

/**
 * Class WeaponBase
 *
 * @package App\Weapons
 */
abstract class WeaponBase
{
    /**
     * Rules to win
     *
     * @var array
     */
    protected $rule_win = [];

    /**
     * Check winning weapon
     *
     * @param WeaponInterface $weapon
     * @return string
     */
    public function compare(WeaponInterface $weapon): string
    {
        if (get_class($weapon) === get_class($this)) {
            return 'draw';
        } elseif (in_array(get_class($weapon), $this->rule_win)) {
            return 'victory';
        } else {
            return 'defeat';
        }
    }
}