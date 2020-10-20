<?php 
namespace App;

class Players
{
    private $position;
    private $quality;
    private $speed;
    private $isInjured = false;

    public function addPlayer($position = NULL, $quality = NULL, $speed  = NULL)
    {
        $this->position = $position;
        $this->quality = $quality;
        $this->speed = $speed;
        // TODO Db insert
    }

    public static function setInjuredPlayer()
    {
        // TODO db set injured  player
    }
    
}