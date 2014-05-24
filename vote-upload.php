<?php


include ("dbconnect.php");

$contestant = $_POST['posttest'];
$user = $_POST['postUser'];


$allUsers = "SELECT facebook_ID FROM vote_upload";

$userResult = mysql_query($allUsers);

$userArray = mysql_fetch_array($userResult);

if (in_array($user, $userArray)) {
    echo "<script language=javascript> alert(\"Hi there, we can see that you have voted. Normally, we'd tell you that you've already voted and that you can't vote again. But for the purposes of this prototype and for testing, we've allowed for multiple voting. Go crazy.\");


    </script>";


  } else {

  	$voterInformation = "INSERT INTO vote_upload (ID, facebook_ID, voted, contestant_ID) VALUES ('', '$user', '1', '$contestant')";

		mysql_query($voterInformation);
  }







$voteSQL = "UPDATE contestants SET votes = votes + 1 WHERE ID ='$contestant'";

mysql_query($voteSQL);

$grabNewVotes = "SELECT * FROM contestants WHERE ID ='$contestant'";
$result = mysql_query($grabNewVotes);

 while($row = mysql_fetch_array($result)){
 	echo $row['votes'];
 }

 ?>