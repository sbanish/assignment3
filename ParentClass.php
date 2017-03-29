<?php
	// This is the file for the parent class

	class ParentClass {
		
		private $p;
		private $t;
		private $c;
		
		public function __construct($p, $y, $s){
			$this->player=$p;
			$this->team=$t;
			$this->city=$c;
		}
		
		public function getPlayer(){
			return $this->player;
		}
		
		public function setPlayer($newPlayer){
			$this->player=$newPlayer;
		}
		
		public function getTeam(){
			return $this->team;
		}
		
		public function setTeam($newTeam){
			$this->team=$newTeam;
		}
		
		public function getCity(){
			return $this->city;
		}
		
		public function setCity($newCity){
			$this->city=$newCity;
		}
		
		public function __toString(){
			return $this->getPlayer() . " who plays for the " . $this->getTeam() . " in the grand city of " . $this.getCity() . ". ";
		}
	}
