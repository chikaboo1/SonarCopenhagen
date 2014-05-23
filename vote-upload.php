<?php


include ("dbconnect.php");

$voter = $_POST['posttest'];


$voteSQL = "UPDATE contestants SET votes = votes + 1 WHERE ID ='$voter'";

mysql_query($voteSQL);

$grabNewVotes = "SELECT * FROM contestants WHERE ID ='$voter'";
$result = mysql_query($grabNewVotes);

 while($row = mysql_fetch_array($result)){
 	echo $row['votes'];
 }

 ?>