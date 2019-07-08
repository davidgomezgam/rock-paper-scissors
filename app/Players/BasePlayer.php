<?php

namespace App\Players;

use App\Weapons\WeaponInterface;

abstract class BasePlayer implements PlayerInterface
{
    /**
     * @var array
     */
    protected $name;

    /**
     * @var \App\Weapons\WeaponInterface;
     */
    protected $weapon;

    /**
     * @var int
     */
    protected $victories = 0;

    /**
     * @var int
     */
    protected $draws = 0;

    /**
     * @var
     */
    protected $defeats = 0;

    /**
     * @var bool
     */
    protected $random = true;

    /**
     * @param string $name
     * @return mixed|null
     */
    public function __get(string $name)
    {
        return $this->$name ?? null;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return mixed|null
     */
    public function __set(string $name, $value)
    {
        return $this->$name = $value;
    }

    /**
     * Set random weapon
     *
     * @param array $weapons
     * @return $this
     */
    public function chooseWeapon(array $weapons)
    {
        if ($this->random) {
            $this->setWeapon(new $weapons[array_rand($weapons)]);
        }

        return $this;
    }

    /**
     * Set player's weapon
     *
     * @var \App\Weapons\WeaponInterface;
     * @return $this
     */
    public function setWeapon(WeaponInterface $weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }
}