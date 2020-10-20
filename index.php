<?php 
require_once("config.php");
use App\Players;
use App\Tournament;


// TODO ADD PLAYERS 2 goalies, 6 defenders, 10 midfielders and 4 strikers (restrict)
$player = new Players();
$player->addPlayer("Goaliers", 5, 4); 


// Tournament Start
$tactics = ["defence", "regular" , "attack"];
$tournament = new Tournament($tactics);
var_dump($tournament->start());
