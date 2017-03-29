<?php
  	// this file will extend PArentClass.php
  
  	class ChildClass extends ParentClass {
 		
 		public $p;
		public $t;
		public $c;
 
 		public function __construct($player, $team, $city){
 			$this->player=$player;
			$this->team=$team;
			$this->city=$city;
 		}
 
		public function getOldPlayer(){
			return parent::getPlayer();
		}
		
		public function updatePlayer($newPlayer){
			echo $newPlayer;
			$this->player=$newPlayer;
		}
		
		public function getOldTeam(){
			return parent::getTeam();
		}
		
		public function updateTeam($newTeam){
			echo $newTeam;
			$this->team=$newTeam;
		}
		
		public function getOldCity(){
			return parent::getCity();
		}
		
		public function updateCity($newCity){
			echo $newCity;
			$this->city=$newCity;
		}
		
		public function __toString(){
			return $this->getPlayer() . " who plays for the " . $this->getTeam() . " in the grand city of " . $this->getCity() . ". ";
		}
 }
?>