<?php

   require_once('models.php');
   require_once('generator.php');

	$roster = array(

      new Team(
         "http://www.nba.com/celtics/roster/",
         "BOS",
         "content/images/logo_bos.png",
         "../samples/bos.json"),

		new Team(
         "http://www.nba.com/nets/roster/",
         "BKN",
         "content/images/logo_bkn.png",
         "../samples/bkn.json"),

		new Team(
         "http://www.nba.com/knicks/roster/",
         "NYK",
         "content/images/logo_nyk.png",
         "team/nyk.json"), 

		new Team(
         "http://www.nba.com/sixers/roster/",
         "PHI",
         "content/images/logo_phi.png",
         "../samples/phi.json"),

		new Team(
         "http://www.nba.com/raptors/roster/",
         "TOR",
         "content/images/logo_tor.png",
         "../samples/tor.json"),

      new Team(
         "http://www.nba.com/bulls/roster/", 
         "CHI",
         "content/images/logo_chi.png",
         "../samples/chi.json"),

      new Team(
         "http://www.nba.com/cavaliers/roster/",
         "CLE", 
         "content/images/logo_cle.png",
         "../samples/cle.json"),

      new Team(
         "http://www.nba.com/pistons/roster/",
         "DET", 
         "content/images/logo_det.png", 
         "../samples/det.json"),

      new Team(
         "http://www.nba.com/pacers/roster/",
         "IND",
         "content/images/logo_ind.png",
         "../samples/ind.json"),

      new Team(
         "http://www.nba.com/bucks/roster/",
         "MIL",
         "content/images/logo_mil.png",
         "../samples/mil.json"),

      new Team(
         "http://www.nba.com/hawks/roster/",
         "ATL",
         "content/images/logo_atl.png",
         "../samples/atl.json"),

      new Team(
         "http://www.nba.com/hornets/roster/",
         "CHA", 
         "content/images/logo_cha.png",
         "../samples/cha.json"),

      new Team(
         "http://www.nba.com/heat/roster/", 
         "MIA", 
         "content/images/logo_mia.png",
         "../samples/mia.json"),

      new Team(
         "http://www.nba.com/magic/roster/",
         "ORL", 
         "content/images/logo_orl.png", 
         "../samples/orl.json"),

      new Team(
         "http://www.nba.com/wizards/roster/",
         "WSH", 
         "content/images/logo_wsh.png",
         "../samples/wsh.json"));

      generateJson($roster);

?>