<?php

   	require_once('models.php');
	require_once('scrape.php');

	function generateJson($roster) {

		for($i = 0; $i < count($roster); $i++) {

			$domXPath = getXPath(curlGet($roster[$i]->url));

			$length = $domXPath->query('//div[@class="roster__player"]')->length;

			$name      = $domXPath->query('//h2[@class="roster__player__header__heading"]');
			$position  = $domXPath->query('//div[@class="roster__player__header_position"]');
			$number    = $domXPath->query('//div[@class="roster__player__header_jnumber"]');
			$image     = $domXPath->query('//img[@class="roster__player__bust"]/@src');
			$games     = $domXPath->query('//dl[dt[@class="roster__player__info__stats__games roster__player__info__stats--item"]]/dd');
			$ppg       = $domXPath->query('//dl[dt[@class="roster__player__info__stats__ppg roster__player__info__stats--item"]]/dd');
			$rpg       = $domXPath->query('//dl[dt[@class="roster__player__info__stats__rpg roster__player__info__stats--item"]]/dd');
			$apg       = $domXPath->query('//dl[dt[@class="roster__player__info__stats__apg roster__player__info__stats--item"]]/dd');
			$height    = $domXPath->query('//dl[@class="roster__player__info__bio"]/dd[1]');
			$weight    = $domXPath->query('//dl[@class="roster__player__info__bio"]/dd[2]');
			$dob       = $domXPath->query('//dl[@class="roster__player__info__bio"]/dd[3]');
			$priorTeam = $domXPath->query('//dl[@class="roster__player__info__bio"]/dd[4]');
			$country   = $domXPath->query('//dl[@class="roster__player__info__bio"]/dd[5]');
			$yearsPro  = $domXPath->query('//dl[@class="roster__player__info__bio"]/dd[6]');

			$players = array();

			for($j = 0; $j < $length; $j++) {

				$player = new Player(
					$name->item($j)->nodeValue, 
					$position->item($j)->nodeValue,
					$number->item($j)->nodeValue,
					$image->item($j)->nodeValue,
					$games->item($j)->nodeValue,
					$ppg->item($j)->nodeValue,
					$rpg->item($j)->nodeValue,
					$apg->item($j)->nodeValue,
					$height->item($j)->nodeValue,
					$weight->item($j)->nodeValue,
					$dob->item($j)->nodeValue,
					$priorTeam->item($j)->nodeValue,
					$country->item($j)->nodeValue,
					$yearsPro->item($j)->nodeValue);

				$players[$j] = $player;

		    }	

			$team = array(
				'abbr' => $roster[$i]->abbr,
				'logo' => $roster[$i]->logo,
				'players' => $players);

			$json = json_encode($team, JSON_UNESCAPED_SLASHES);

			if(file_exists($roster[$i]->fileName)) { unlink($roster[$i]->fileName); }

			$file = fopen($roster[$i]->fileName, "a");
			fwrite($file, $json);
			fclose($file);

		}	

	}

?>	
