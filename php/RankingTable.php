<?php
class RankingTable{
	public $ranking;


	function __construct($players){
		//associate player names with their scores and games played
		$temparray = array();
		foreach($players as $player){
			$temparray[$player] = array("score" => 0,"gamesplayed" => 0);
			}
		$this->ranking = $temparray;
	}
	
	public function recordResult($playerName,$score){
		//add 1 to games played and score to score
		$this->ranking[$playerName]["score"] += $score;
		$this->ranking[$playerName]["gamesplayed"] += 1;
	}

	public function playerRank(int $demandedRank){
		
	}

	public function test(){
		$this->recordResult("Jan",9);
		echo ($this->ranking["Jan"]["gamesplayed"]);
		echo "<br/>".($this->ranking["Jan"]["score"]);
	}
}
?>