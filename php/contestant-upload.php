<?php
	//here we include the php that connects us to our database and we include a file which has some extra php functions we will need.
	include ("dbconnect.php");
	include ("functions.php");

	//we take the information from our form and store each one in an individual variabale.
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$artistName = $_POST['artistname'];
	$trackTitle = $_POST['tracktitle'];
	$soundName = $_POST['soundname'];
	$siteLink = $_POST['sitelink'];


//here we check if we have also been given files as part of the form submition.
if ($_FILES == true) {
		//we create an array that will hold all of the error messages if/when they are created
		$error_msg = array();
		$error_msg[] .= '<h3>There was a problem with your upload. It might have to do with one of the following:</h3>';

		// //checks the type of the image - if it is not .jpg, .gif, or .png we will set $validate to false and update our $error_msg with a wrong type message
		switch ($_FILES['image']['type']) {
			case 'image/jpeg':
			case 'image/gif':
			case 'image/png':
				$validate = true;
				break;
			default:
				$validate = false;
				$error_msg[] .= 'Hey, it looks like you tried to upload a file of the wrong type';
				break;
		}

		//checks if the file is already on the server - if it is - validate is set to false and we update our error message
		if (file_exists("../userimages/" . $_FILES['image']['name'])) {
			$validate = false;
			$error_msg[] .= "this file already exists on the server. You'll have to give it another name.";
		}


		//now we check our $validate value. We only want to continue if it passed all our requirement tests - so if it was set to false at any point we won't continue beyond this point
		if($validate == true){
			//temp name
			/**
			 * [$filename is just a name we give for the tmp_name that php is creating before the file is uploaded ]
			 */
			$filename = $_FILES['image']['tmp_name'];

			//creates a variable that holds a url path for our full size images
			$destination = "../userimages/" . $_FILES['image']['name'];

			//moves the uploaded file ($filename) to our server at our full destination path ($full_destination)
			move_uploaded_file($filename, $destination);

			//here we set up what we will put into our contestsants table of our database
			$query = "INSERT INTO contestants (ID, firstname, lastname, email, artistname, tracktitle, soundcloud, sitelink, image, votes) VALUES ('', '$firstName', '$lastName', '$email', '$artistName', '$trackTitle', '$soundName', '$siteLink', '$destination', '0')";
			//here we actually execute and put that information into the our database
			$result=mysql_query($query);

			//after putting the new contestant into the database, we went to send back an updated version of all the contestants. We use a fucnction from the functions.php file called allContestants to do this
			echo allContestants();
		}

		//this runs if our validate came back as false - which would mean there was some sort of error along the way.
		else {
			//we go through our error message array and print out each error statement so the user knows what went wrong
			foreach ($error_msg as $value) {
			echo "<h4>" . $value . "</h4>";
			}
		}
	}
	// this runs if we're never given a file in the form. We let the user know they'll need to upload an image if they want to enter the contest.
	else{
		echo "<h4>You'll need upload an image! </h4>";
	}





 ?>