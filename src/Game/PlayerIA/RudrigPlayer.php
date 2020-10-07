<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class RudrigPlayers
 * @package Hackathon\PlayerIA
 * @author Sara Mellouk
 * Choix : J'ai choisi de mettre l'invers du choix précédant durant les 3 premiers tours
 *         Puis je renvoie l'invers du choix le plus utilisé par l'ennemi
 */
class RudrigPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
       $round = 0;
       if ($this->result->getLastChoiceFor($this->opponentSide) === parent::rockChoice() )
           return parent::paperChoice();
       if ($this->result->getLastChoiceFor($this->opponentSide) === parent::paperChoice())
           return parent::scissorsChoice();
       if ($this->result->getLastChoiceFor($this->opponentSide) === parent::scissorsChoice())
           return parent::rockChoice();

       if ($round > 3)
       {
            $arr = $this->result->getStatsFor($this->opponentSide);
            if ($arr[2] > $arr[3] && $arr[2] > $arr[4])
                return parent::rockChoice();
            if ($arr[3] > $arr[2] && $arr[3] > $arr[4])
                return parent::scissorsChoice();
            if ($arr[4] > $arr[2] && $arr[4] > $arr[3])
                return parent::paperChoice();
       }
       $round++;
       return parent::rockChoice();
    }
};
