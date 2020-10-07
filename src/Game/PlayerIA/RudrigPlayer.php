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
        $rounds =
        array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        $this->result->getChoicesFor($this->opponentSide)

        if ($this->result->getChoicesFor($this->opponentSide) === parent::rockChoice())
            return parent::paperChoice();
        if ($this->result->getChoicesFor($this->opponentSide) === parent::paperChoice())
            return parent::scissorsChoice();
        if ($this->result->getChoicesFor($this->opponentSide) === parent::scissorsChoice())
            return parent::rockChoice();



    }
};
