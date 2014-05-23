<?php
	include ("dbconnect.php");


	$firstName = $_POST['postFirstName'];
	$lastName = $_POST['postLastName'];
	$email = $_POST['postEmail'];
	$artistName = $_POST['postArtistName'];
	$trackTitle = $_POST['postTrackTitle'];
	$soundName = $_POST['postSoundName'];
	$siteLink = $_POST['postSiteLink'];


	$query = "INSERT INTO contestants (ID, firstname, lastname, email, artistname, tracktitle, soundcloud, sitelink, votes) VALUES ('', '$firstName', '$lastName', '$email', '$artistName', '$trackTitle', '$soundName', '$siteLink', '0')";

$result=mysql_query($query);

if(!$result){
	echo "not working";
	echo "<br>";
	echo mysql_error();
}

	echo $query;

	echo "<br>";


	echo $firstName;

	echo "<br>";

	echo $lastName;

	echo "<br>";

	echo $email;

	echo "<br>";

	echo $artistName;

	echo "<br>";

	echo $soundName;

	echo "<br>";

	echo $siteLink;

	echo "<br>";


 ?>