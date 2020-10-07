<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class RudrigPlayers
 * @package Hackathon\PlayerIA
 * @author Sara Mellouk
 */
class RudrigPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
    $round_num = 1;

    while ($round_num <= $this->result->getNbRound())
    {
        $round_num++;
        if ($this->result->getChoicesFor($this->opponentSide) == $rockChoice)
            return parent::paperChoice();
        if ($this->result->getChoicesFor($this->opponentSide) == $paperChoice)
            return parent::scissorsChoice();
        if ($this->result->getChoicesFor($this->opponentSide) == $sisorsChoice)
            return parent::rockChoice();
    }

    return parent::rockChoice();

    }
};
