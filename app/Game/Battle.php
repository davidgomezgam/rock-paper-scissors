<?php

namespace App\Game;

use App\Players\PlayerInterface;

class Battle
{
    /**
     * @var \App\Players\PlayerInterface
     */
    protected $player1;

    /**
     * @var \App\Players\PlayerInterface
     */
    protected $player2;

    /**
     * Battle constructor.
     *
     * @param \App\Players\PlayerInterface $player1
     * @param \App\Players\PlayerInterface $player2
     */
    public function __construct(PlayerInterface &$player1, PlayerInterface &$player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    /**
     * Start fight
     *
     * @param mixed
     */
    public function fight()
    {
        $this->player1->chooseWeapon();
        $this->player2->chooseWeapon();

        $result = $this->player1->weapon->compare($this->player2->weapon);

        switch ($result) {
            case 'victory':
                $this->player1->victories++;
                $this->player2->defeats++;
                break;
            case 'defeat':
                $this->player1->defeats++;
                $this->player2->victories++;
                break;
            case 'draw':
                $this->player1->draws++;
                $this->player2->draws++;
                break;
        }
    }
}