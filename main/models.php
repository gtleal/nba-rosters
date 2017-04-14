<?php
	
	class Team {

		public $url;
		public $abbr;
		public $logo;
		public $fileName;

		function __construct($url, $abbr , $logo, $fileName) {

			$this->url      = $url;
			$this->abbr     = $abbr;
			$this->logo     = $logo;
			$this->fileName = $fileName;

		}

	}

	class Player {

		public $name;
		public $position;
		public $number;
		public $image;
		public $games;
		public $ppg;
		public $rpg;
		public $apg;
		public $height;
		public $weight;
		public $dob;
		public $priorTeam;
		public $country;
		public $yearsPro;

		function __construct($name, $position, $number, $image, $games, $ppg, $rpg, $apg, $height, $weight, $dob, $priorTeam, $country, $yearsPro) {

			$this->name      = trim($name);
			$this->position  = trim($position);
			$this->number    = "#".preg_replace('/[^A-Za-z0-9]/', '', $number);
			$this->image     = trim($image);
			$this->games     = trim($games);
			$this->ppg       = trim($ppg);
			$this->rpg       = trim($rpg);
			$this->apg       = trim($apg);
			$this->height    = trim($height);
			$this->weight    = trim($weight);
			$this->dob       = trim($dob);
			$this->priorTeam = trim($priorTeam);
			$this->country   = trim($country);
			$this->yearsPro  = trim($yearsPro);

		}

	}

?>