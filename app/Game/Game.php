<?php

namespace App\Game;

use App\Players\PlayerInterface;

class Game
{
    /**
     * @var int
     */
    protected $rounds;

    /**
     * @var \App\Players\PlayerInterface[]
     */
    protected $players;

    /**
     * Game constructor.
     *
     * @param int $rounds
     * @param \App\Players\PlayerInterface $players
     */
    public function __construct(int $rounds, PlayerInterface ...$players)
    {
        $this->rounds = $rounds;
        $this->players = $players;
    }

    /**
     *
     */
    public function play()
    {
        $rounds = 1;

        do {
            $battle = new Battle($this->players[0], $this->players[1]);
            $battle->fight();

            $rounds++;
        } while ($rounds <= $this->rounds);

        $this->resume();
    }

    public function resume()
    {
        foreach ($this->players as $player) {
            echo "Player $player->name" . "\r\n";
            echo "Victories: $player->victories" . "\r\n";
            echo "Draws: $player->draws" . "\r\n";
            echo "Defeats: $player->defeats" . "\r\n";
            echo "--------------"  . "\r\n";
        }
    }
}