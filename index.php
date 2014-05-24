<?php

include ("dbconnect.php");

$contestantInfo = "SELECT * FROM contestants";
$resultInfo = mysql_query($contestantInfo);

 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
		<!-- <script src="js/jquery-1.10.2.js"></script> -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
         <script type="text/javascript" src="http://stratus.sc/stratus.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
          $.stratus({
            links: 'https://soundcloud.com/natasha-natarajan/sets/vega'
          });
        });
      </script>

    <script>
      var facebookID;
      function post(id, user){
        var selection = "#" + id + " .votes" ;
        $.post('vote-upload.php', {posttest:id, postUser:user},
          function(data){
            $(selection).replaceWith("<p class = 'votes'>" + data + "</p>");
          });
      }

      function add(){
        var firstName = document.getElementById('firstname').value;
        var lastName = document.getElementById('lastname').value;
        var email = document.getElementById('email').value;
        var artistName = document.getElementById('artistname').value;
        var trackTitle = document.getElementById('tracktitle').value;
        var soundName = document.getElementById('soundname').value;
        var siteLink = document.getElementById('sitelink').value;



        $.post('contestant-upload.php', {postFirstName:firstName, postLastName:lastName,postEmail:email,postArtistName:artistName,postTrackTitle:trackTitle,postSoundName:soundName,postSiteLink:siteLink}, function(data){
            $('#result').html(data);
        });
      }

      function doLogin(id){
        FB.getLoginStatus(function(response) {
          if (response.status === 'connected') {
            facebookID = response.authResponse.userID;
            post(id, facebookID);
            // connected
          } else if (response.status === 'not_authorized') {
            // not_authorized
            login(id);
          } else {
            // not_logged_in
            login(id);
          }
        });
      }

      function login(id){
        FB.login(function(response){
          facebookID = response.authResponse.userID;
          post(id, facebookID);

          console.log(response.authResponse.accessToken);

          console.log(facebookID);
        });
      }

      function logOut(){
        FB.getLoginStatus(function(response){
          if(response.status === 'connected'){
            FB.logout();
            alert("you have been logged out of facebook.");
          }
        });
      }


    </script>

      </head>

      <body>
      <script>

      //this is taken from developer.facebook.com - it is their own quick initialization for their SDK
       window.fbAsyncInit = function() {
        FB.init({
          appId      : '712639635464013',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

        function testAPI() {
          console.log('Welcome!  Fetching your information.... ');
          FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);
            document.getElementById('status').innerHTML =
              'Thanks for logging in, ' + response.name + '!';
          });
        }
      </script>




      <button onclick="logOut();">Log Out</button>

      <div>

      <?php


      while($row = mysql_fetch_assoc($resultInfo)){
        echo "<div class = 'contestant' id = '".  $row['ID'] . "'>";
        echo "<h3 class = 'contestantName'>" . $row['firstname'] . " " . $row['lastname'] . "</h3>";
        echo "<p class = 'trackname'>" . $row['tracktitle'] . "</p>";
        echo "<p class = 'votes'>" . $row['votes'] . "</p>";
        echo "<input type = 'button' value = 'vote!' onclick = 'doLogin(" . $row['ID'] . ")'>";
        echo "<br>";

        echo "</div>";
      }


// post(" . $row['ID'] . ")
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