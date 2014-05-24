<?php


	function allContestants() {
		$contestantInfo = "SELECT * FROM contestants";
		$resultInfo = mysql_query($contestantInfo);

		while($row = mysql_fetch_assoc($resultInfo)){
		  echo "<div class = 'contestant' id = '".  $row['ID'] . "'>";
		  echo "<h3 class = 'contestantName'>" . $row['firstname'] . " " . $row['lastname'] . "</h3>";
		  echo "<p class = 'trackname'>" . $row['tracktitle'] . "</p>";
		  echo "<p class = 'votes'>" . $row['votes'] . "</p>";
		  echo "<input type = 'button' value = 'vote!' onclick = 'doLogin(" . $row['ID'] . ")'>";
		  echo "<br>";

		  echo "</div>";
		}

	}




 ?>
