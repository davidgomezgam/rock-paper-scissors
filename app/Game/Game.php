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
     * @var
     */
    protected $resume;

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
     * Start game
     */
    public function play()
    {
        $rounds = 1;

        do {
            $battle = new Battle($this->players[0], $this->players[1]);
            $battle->fight();

            $rounds++;
        } while ($rounds <= $this->rounds);

        return $this->resume();
    }

    /**
     * Display final results by user
     */
    public function resume()
    {

        foreach ($this->players as $player) {
            $output = '';
            $output .= "Player $player->name" . "\r\n";
            $output .= "Victories: $player->victories" . "\r\n";
            $output .= "Draws: $player->draws" . "\r\n";
            $output .= "Defeats: $player->defeats" . "\r\n";
            $output .= "--------------" . "\r\n";

            $this->resume .= $player->result = $output;
        }

        return $this->resume;
    }
}