<?php

//here we include the file that connects to the database
include ("dbconnect.php");

//save the form data as php variables to make it easier for us to use later
$contestant = $_POST['posttest'];
$user = $_POST['postUser'];

//we go into the vote_upload table and grab all the data from the facebook_ID column
$allUsers = "SELECT facebook_ID FROM vote_upload";

//we actually query the database and get this information
$userResult = mysql_query($allUsers);

//set up an array
$userArray = array();

//we go through the results of the database query and add each facebook ID to the userArray
while($row = mysql_fetch_array($userResult)){
	$userArray[] = $row['facebook_ID'];
};

//we check for the user's facebook ID in the array of facebook IDs from the database. If it is in the array, then it is in the database and we alert the user they must have voted before.
if (in_array($user, $userArray)) {
    echo "<script> alert(\"Hi there, we can see that you have voted. Normally, we'd tell you that you've already voted and that you can't vote again. But for the purposes of this prototype and for testing, we've allowed for multiple voting. Go crazy\");
    </script>";


  }
  	//if it is not in the array we get ready to put their id and the id of the person they voted for into the vote_upload table
   else {

  	$voterInformation = "INSERT INTO vote_upload (ID, facebook_ID, voted, contestant_ID) VALUES ('', '$user', '1', '$contestant')";
  	//actually talking to the db
		mysql_query($voterInformation);
  }



//here we go into the contestants table of the database and update the number of votes for that contestant by one
$voteSQL = "UPDATE contestants SET votes = votes + 1 WHERE ID ='$contestant'";
//actualy talking to the database
mysql_query($voteSQL);

//we grab all the information about the specific contestant that has been voted for
$grabNewVotes = "SELECT * FROM contestants WHERE ID ='$contestant'";
//talk to db
$result = mysql_query($grabNewVotes);

//we send back the new vote count and a  new heart button that is filled in and
 while($row = mysql_fetch_array($result)){
 	echo $row['votes'] . "<button onclick='doLogin($contestant)';><span class='heart-full'></span></button>";
 }

 ?>