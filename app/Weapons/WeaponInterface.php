<?php

namespace App\Weapons;

/**
 * Interface WeaponInterface
 *
 * @package App\Weapons
 */
interface WeaponInterface
{
    /**
     * @param $weapon
     * @return string
     */
    public function compare(WeaponInterface $weapon): string;
}