<?php


include ('header.php');
?>
<div class="sub-page-content">
<h1>Competitions</h1>

<h2>The Remix</h2>

<p>We're giving the chance to perform at Sonar Copenhagen to 5 talented artists. They will play a set together at the festival. 5 runners up will also win €50 vouchers for beatport. SO GET VOTING!</p>
<p>Click on a heat to vote for your favourite track or enter the competition yourself</p>

<button id="contestant-upload-button" class="important-button">Enter the Competition Now</button>

  <form id="contestant-upload" action=''>
    <h2>Fill in the following form to enter the competition today</h2>
    <div class="input-wrapper"><p>First Name*</p> <input type='text' name ='firstname' id='test'>
   <p>Last Name*</p> <input type='text' name = 'lastname'>
    <p>Email*</p><input type='text' name = 'email'>
    <p>Artist Name*</p><input type='text' name = 'artistname'>
    <p>Track Title*</p><input type="text" name ='tracktitle'>
    <p>SoundCloud link to track*</p><input type="text" name = "soundname">
    <p>Link to website</p><input type="text" name = "sitelink">
    <p>Artist image*</p><input type="file" name = 'image'> </div>
    <div class="border"><p class=""> // Please only use .jpg, .gif, or .png files. </p>
    <p> // Don't go over 2MB per image or a monster will get you!!!</p></div>
    <div id="myDiv"></div>
    <button type = 'submit' onclick = 'add();'>Upload</button>
  </form>

  
<h2>Our Participants</h2>

<p><a href="https://soundcloud.com/natasha-natarajan/sets/competition" class="stratus">Listen to the full playlist<span class="play-empty"></span></a></p>
<div id="all-contestants">
<?php
allContestants();
?>
</div>

<h2 class="border-top">Facebook Raffles</h2>

<p>Every 3 weeks we announce a new competition on our facebook page so like us and take part. We have great prizes to give away</p>

<p>Check out the competitions we've had so far:</p>

<img class="competition" src="images/pages/competition1.jpg" alt="competition poster"/>

<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="200" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>

</div>
<?php
include ('footer.php');
?>