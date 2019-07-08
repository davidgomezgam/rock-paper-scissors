<?php

namespace App\Players;

use App\Weapons\WeaponInterface;

interface PlayerInterface
{

    /**
     * Set weapon
     *
     * @var @var \App\Weapons\WeaponInterface;
     * @return $this
     */
    public function setWeapon(WeaponInterface $weapon);

    /**
     * Set random weapon
     *
     * @param array $weapons
     * @return $this
     */
    public function chooseWeapon();
}