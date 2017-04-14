<?php

    require_once('models.php');
    require_once('generator.php');

	$roster = array(

        /*new Team(
            "http://www.nba.com/mavericks/roster/",
            "DAL",
            "content/images/logo_dal.png",
            "../samples/dal.json"),*/

        new Team(
            "http://www.nba.com/rockets/roster/",
            "HOU",
            "content/images/logo_hou.png",
            "../samples/hou.json"),

        new Team(
            "http://www.nba.com/grizzlies/roster/", 
            "MEM", 
            "content/images/logo_mem.png",
            "../samples/mem.json"),

        new Team(
            "http://www.nba.com/pelicans/roster/", 
            "NOP",
            "content/images/logo_nop.png",
            "../samples/nop.json"),

        new Team(
            "http://www.nba.com/spurs/roster/",
            "SA",
            "content/images/logo_sa.png",
            "../samples/sa.json"),

        new Team(
            "http://www.nba.com/nuggets/roster/",
            "DEN", 
            "content/images/logo_den.png",
            "../samples/den.json"),

        new Team(
            "http://www.nba.com/timberwolves/roster/",
            "MIN", 
            "content/images/logo_min.png",
            "../samples/min.json"),

        new Team(
            "http://www.nba.com/thunder/roster/",
            "OKC",
            "content/images/logo_okc.png",
            "../samples/okc.json"),

        new Team(
            "http://www.nba.com/blazers/roster/",
            "POR", 
            "content/images/logo_por.png",
            "../samples/por.json"),

        new Team(
            "http://www.nba.com/jazz/roster/",
            "UTA", 
            "content/images/logo_uta.png",
            "../samples/uta.json"),

        new Team(
            "http://www.nba.com/warriors/roster/",
            "GS", 
            "content/images/logo_gs.png",
            "../samples/gs.json"),

        new Team(
            "http://www.nba.com/clippers/roster/",
            "LAC", 
            "content/images/logo_lac.png",
            "../samples/lac.json"),

        new Team(
            "http://www.nba.com/lakers/roster/",
            "LAL", 
            "content/images/logo_lal.png",
            "../samples/lal.json"),

        new Team(
            "http://www.nba.com/suns/roster/",
            "PHX", 
            "content/images/logo_phx.png",
            "../samples/phx.json"),

        new Team(
            "http://www.nba.com/kings/roster/",
            "SAC", 
            "content/images/logo_sac.png",
            "../samples/sac.json"));

        generateJson($roster);

?>