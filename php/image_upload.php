 <?php
	include ("dbconnect.php");

	/**
	 * [$validate description = a default value that is set to true. We will use this to make sure the uploaded file meets our requirements. If it does not we will set this value to false]
	 * [$error_msg = We will use this to hold all of our error messages regarding size,type, or if it is already on the server. It is displayed later in the html]
	 */
	$validate = true;
	$error_msg = '';

	//checks to see if we have been given a file by the user. If so, we will move it to the server, put the info into the database and create a thumbnail
	if ($_FILES == true) {

		/**
		 * just some testing stuff that we will get rid of when everything is right
		 */

		//checks the file size of the image - if it is bigger than 2mb, we set $validate to false and add an error message to our $error_msg string
		if($_FILES['image']['size']>2000000){
			$validate = false;
			$error_msg[] .= "The file is too big - haha!";
		}

		//checks the type of the image - if it is not .jpg, .gif, or .png we will set $validate to false and update our $error_msg with a wrong type message
		switch ($_FILES['image']['type']) {
			case 'image/jpeg':
			case 'image/gif':
			case 'image/png':
				$validate = true;
				break;
			default:
				$validate = false;
				$error_msg[] .= 'Wrong file type, amigo';
				break;
		}

		//checks if the file is already on the server - if it is - validate is set to false and we update our error message
		if (file_exists("userimages/" . $_FILES['image']['name'])) {
			$validate = false;
			$error_msg[] .= " this file already exists on the server";
		}

		//now we check our $validate value. We only want to continue if it passed all our requirement tests - so if it was set to false at any point we won't continue beyond this point
		if($validate == true){
			//temp name
			/**
			 * [$filename is just a name we give for the tmp_name that php is creating before the file is uploaded ]
			 */
			$filename = $_FILES['image']['tmp_name'];

			//creates a variable that holds a url path for our full size images
			$destination = "userimages/fullimages/" . $_FILES['image']['name'];

			//moves the uploaded file ($filename) to our server at our full destination path ($full_destination)
			move_uploaded_file($filename, $destination);
			echo $out;

		}
	}

 ?>