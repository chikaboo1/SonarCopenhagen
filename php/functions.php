<?php


	function allContestants() {
		$contestantInfo = "SELECT * FROM contestants";
		$resultInfo = mysql_query($contestantInfo);

		while($row = mysql_fetch_assoc($resultInfo)){
		  echo "<div class = 'contestant table-box' id = '".  $row['ID'] . "'>";
		  echo "<h3 class = 'contestantName'>" . $row['firstname'] . " " . $row['lastname'] . "</h3>";
		  echo "<p class = 'trackname'>" . $row['tracktitle'] . "</p>";
		  echo "<div class='bottom-line'><p class='track-play'><a href='' class='stratus'><span class='play-empty'></span></p></a>";
		  echo "<p class = 'votes'>" . $row['votes']."<button onclick = 'doLogin(" . $row['ID'] . ")'><span class='heart-empty'></span></button></p></div>";
		  echo "</div>";
		}

	}

	function allArtists() {
		$programInfo = "SELECT * FROM program";
		$resultInfo = mysql_query($programInfo);

		while($row = mysql_fetch_assoc($resultInfo)){
		  echo "<div class = 'table-box' id = '".  $row['ID'] . "'>";
		  echo "<h3 class = 'artistName'>" . $row['artist_name']."</h3>";
		 echo "<p class = 'daytime'>" . $row['firstname'] . " " . $row['lastname'] . "</p>";
		  echo "<div class='bottom-line'><p class='track-play'><a href='' class='stratus'><span class='play-empty'></span></p></a>";
		  echo "<p class = 'votes'>" . $row['votes']."<button onclick = 'doLogin(" . $row['ID'] . ")'><span class='heart-empty'></span></button></p></div>";
		  echo "</div>";
		}

	}




 ?>
