<?php
namespace App\Formations;

class Formations 
{
    private $formation;
    
    public function __construct(FormationCreator $formation)
    {
        $this->formation = $formation;
       
    }

    public function create()
    {
        return $this->formation->createFormation();
    }
}