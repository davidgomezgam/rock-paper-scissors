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
     * Set weapon
     *
     * @return $this
     * @var \App\Weapons\WeaponInterface;
     */
    public function setWeapon(WeaponInterface $weapon)
    {
        $this->weapon = $weapon;

        return $this;
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
     * @param PlayerInterface $player
     */
    public function compare(PlayerInterface $player)
    {
        return $this->weapon->compare($player->weapon);
    }
}