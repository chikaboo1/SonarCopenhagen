<?php
	include ("dbconnect.php");

	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$email = $_POST['email'];
	$artistName = $_POST['artistname'];
	$trackTitle = $_POST['tracktitle'];
	$soundName = $_POST['soundname'];
	$siteLink = $_POST['sitelinke'];

if ($_FILES == true) {
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

		// //checks if the file is already on the server - if it is - validate is set to false and we update our error message
		if (file_exists("../userimages/" . $_FILES['image']['name'])) {
			$validate = false;
			$error_msg[] .= "this file already exists on the server.You can't have the same image as someone else.";
		}

		foreach ($error_msg as $value) {
			echo "<h4>" . $value . "</h4>";
		}
		// //now we check our $validate value. We only want to continue if it passed all our requirement tests - so if it was set to false at any point we won't continue beyond this point
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

			$query = "INSERT INTO contestants (ID, firstname, lastname, email, artistname, tracktitle, soundcloud, sitelink, image, votes) VALUES ('', '$firstName', '$lastName', '$email', '$artistName', '$trackTitle', '$soundName', '$siteLink', '$destination', '0')";

			$result=mysql_query($query);
		}
	}



 ?>