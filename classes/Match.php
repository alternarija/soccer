<?php 
namespace App;
use App\Formations\DefenceFormationCreator;
use App\Formations\RegularFormationCreator;
use App\Formations\AttackFormationCreator;
use App\Formations\Formations;

class Match
{
  
    private $tactic;
    private $formation;

    public function __construct($tactic = "regular", $injuredPlayer = NULL)
    {
        $this->tactic  = $tactic;

        if($injuredPlayer){
            Players::setInjuredPlayer();
        }

        $this->teamSelect();

    }

    public function teamSelect()
    {
        switch($this->tactic){
          
            case "defence":
                $formation = new DefenceFormationCreator();
                break;
            case "regular":
                $formation = new RegularFormationCreator();
                break;
            case "attack":
                $formation =  new AttackFormationCreator();
                break;
            default:
                $fomration  = new RegularFormationCreator();
          
        
        }

        $gameFormation = new Formations($formation);
        $this->formation = $gameFormation->create();

    }

    

    public function play()
    {
        return $this->formation;
    }
    
    
}