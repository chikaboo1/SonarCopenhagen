<?php

include ("php/dbconnect.php");
include ("php/functions.php");

 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
		    <!-- <script src="js/jquery-1.10.2.js"></script> -->
		    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
         <script type="text/javascript" src="http://stratus.sc/stratus.js"></script>

        <script src = 'js/php_scripts.js'></script>
        <script src = 'js/facebook_scripts.js'></script>

    </head>

      <body>
      <script src = 'js/facebook_SDK.js'></script>

      <button onclick="logOut();">Log Out</button>

      <div>

      <?php

         echo allContestants();
      ?>

      </div>

      <form>
        First Name: <input type='text' id ='firstname'> <br>
        Last Name: <input type='text' id = 'lastname'> <br>
        Email: <input type='text' id = 'email'> <br>
        Artist Name<input type='text' id = 'artistname'> <br>
        Track Title <input type="text" id ='tracktitle'> <br>
        Sound Cloud User Name<input type="text" id = "soundname"> <br>
        Site Link<input type="text" id = "sitelink"> <br>
        <input type='button' value='submit' onclick="add();">
      </form>


      <div id="result"></div>


      <br><br><br><br>


      </body>

  </html>