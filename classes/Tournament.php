<?php 
namespace App;

class Tournament
{ 

    private $tactics;
   

    public function __construct(array $tactics)
    {
        $this->tactics = $tactics;
    }
    
    public function start()
    {
        $injuredPlayer = NULL;
        $selectedPlayers = [];
        foreach($this->tactics as $tactic){

            $match = new Match($tactic, $injuredPlayer);
            $selectedPlayers[] = $match->play();

            // TODO random select injured player Db 
            $injuredPlayer = rand(1,22);

        }

        return $selectedPlayers;
    
    }
}