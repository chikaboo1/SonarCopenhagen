<?php

function top_four(){
		//start by getting the ID and the votes for the contestants
		$contestants = "SELECT ID, votes FROM contestants";
		//query the db asking for the information
		$result = mysql_query($contestants);
		//set up an array to hold all the results
		$voteList = array();

		//goes through and creates a multidimensional array - holding the votes and ID of all the contestants
		while($print = mysql_fetch_assoc($result)){
			$voteList[] = array($print['ID'], $print['votes']);
		}

		//sorts this array by the votes values - does this by calling our own function which does a sort from high to low
		usort($voteList, "sortByVote");

		//set up array to hold just the top four contestants
		$top_four = array();

		//put the ID of the top four contestants into the array.
		for ($i=0; $i < 4; $i++) {
			$top_four[] = $voteList[$i][0];
		}

		//get ready to talk to the db, asking for the top four people in that order
		$four_contestants = "SELECT * FROM contestants where ID in ($top_four[0], $top_four[1], $top_four[2], $top_four[3]) ORDER BY FIELD (ID, $top_four[0], $top_four[1], $top_four[2], $top_four[3])";
		//actually talk to the db
		$resultInfo = mysql_query($four_contestants);

		//output it as hmtl
		while($row = mysql_fetch_assoc($resultInfo)){
			 echo "<div class = 'contestant table-box' id = '".  $row['ID'] . "'>";
		   echo "<div class='contestant-image'><img src='".$row['image']."' alt='".$row['artistname']." image'/></div>";
		  echo "<div class='box-text-wrapper'><h3 class = 'contestantName'>" . $row['artistname']. "</h3>";
		  echo "<p class = 'trackname'>" . $row['tracktitle'] . "</p></div>";
		  echo "<div class='bottom-line'><p class='track-play'><a href='".$row['soundcloud']."' class='stratus'><span class='play-empty'></span></p></a>";
		  echo "<p class = 'votes'>" . $row['votes']."<button onclick = 'doLogin(" . $row['ID'] . ")'><span class='heart-empty'></span></button></p></div>";
		  echo "</div>";
		}
	}


	//this little funciton will sort from high to low
	function sortByVote($a, $b) {
	  return $b[1] - $a[1];
	}

	//this function will go into the contestants table of the database and output all the different contestants in html
	function allContestants() {
		$contestantInfo = "SELECT * FROM contestants";
		$resultInfo = mysql_query($contestantInfo);

		while($row = mysql_fetch_assoc($resultInfo)){
		  echo "<div class = 'contestant table-box' id = '".  $row['ID'] . "'>";
		   echo "<div class='contestant-image'><img src='".$row['image']."' alt='".$row['artistname']." image'/></div>";
		  echo "<div class='box-text-wrapper'><h3 class = 'contestantName'>" . $row['artistname']. "</h3>";
		  echo "<p class = 'trackname'>" . $row['tracktitle'] . "</p></div>";
		  echo "<div class='bottom-line'><p class='track-play'><a href='".$row['soundcloud']."' class='stratus'><span class='play-empty'></span></p></a>";
		  echo "<p class = 'votes'>" . $row['votes']."<button onclick = 'doLogin(" . $row['ID'] . ")'><span class='heart-empty'></span></button></p></div>";
		  echo "</div>";
		}

	}

//this is a function that will go into the artists table of our database and output all information about each artist in html.
function allArtists () {
		$artistInfo = "SELECT * FROM artists";
		$artistResult = mysql_query($artistInfo);

			while($row = mysql_fetch_assoc($artistResult)){
		  echo "<div class = 'table-box artists'>";
		  echo "<div class='artist-image'><div class='artist-play'><a href='".$row['soundcloud']."' class='stratus'><span class='play-full'></span><a></div><img src='".$row['image']."' alt='".$row['artist_name']." image'/></div>";
		  echo "<div class='box-text-wrapper'><h3 class = 'artist-name'>" . $row['artist_name']."</h3>";
		 echo "<p class = 'daytime'>" . $row['day'] . " " . $row['time'] . "</p>";
		 echo "<p class = 'venue'>" . $row['venue'] ."</p></div>";
		  echo "</div>";
		  // echo "<div class='artists-description'><p class='artist-text'>".$row['description']."</p></div";
	}
}


 ?>
