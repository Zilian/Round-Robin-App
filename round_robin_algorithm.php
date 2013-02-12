<?php
	//compute number of games. 
	$numberGames = ($numberTeams/2)*($numberTeams-1);
	
	//Each team will have a rest week if $numberTeams is odd
	if ($numberTeams % 2 != 0){
		$numberRounds=$numberTeams;
		//restDay
		$bye = $numberTeams+1;
		$numberTeams++; //set numberTeams as even now
	}
	else{
		$numberRounds=$numberTeams-1;
	}

	//Algorithm
	
	//Rounds loop
	for($round=1;$round<=$numberRounds;$round++){
			
			$teamsAlreadyMatched = array();
			
			//matching loop
			for($team=1;$team<=$numberTeams;$team++){
				
					if( !in_array($team,$teamsAlreadyMatched)){
					//match with opponent
					$opponentTeam = $round - $team;
					($opponentTeam <= 0) ? $opponentTeam+=$numberTeams : $opponentTeam++;
					
					//check that team and opponent are different [DEBUG]
					if( $opponentTeam == $team) echo("error : Opp $opponentTeam  Team $team") ;
					}
					//add these teams to teams already matched for this round
					$teamsAlreadyMatched[]=$team;
					$teamsAlreadyMatched[]=$opponentTeam;

			
			
			
			}
		
	
	
	
	}
		
	


?>