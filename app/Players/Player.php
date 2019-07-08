<?php

namespace App\Players;

class Player extends BasePlayer
{
    /**
     * BasePlayer constructor.
     * @param $name
     * @param bool $random
     */
    public function __construct(string $name, bool $random = true)
    {
        $this->name = $name;
        $this->random = $random;
    }
}