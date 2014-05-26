<?php


include ('header.php');
?>
<div class="sub-page-content">
<h1>Competitions</h1>

<h2>The Remix</h2>

<p>We're giving the chance to perform at Sonar Copenhagen to 5 talented artists. They will play a set together at the festival. 5 runners up will also win €50 vouchers for beatport. SO GET VOTING!</p>
<p>Click on a heat to vote for your favourite track or enter the competition yourself</p>

<button id="contestant-upload-button" class="important-button">Enter the Competition Now</button>

<?php
include('php/form.php');
?>

<h2>Our Participants</h2>

<p><a href="https://soundcloud.com/natasha-natarajan/sets/competition" class="stratus">Listen to the full playlist<span class="play-empty"></span></a></p>
<div class="all-contestants">
<?php
allContestants();
?>
</div>

<h2 class="border-top">Facebook Raffles</h2>

<p>Every 3 weeks we announce a new competition on our facebook page so like us and take part. We have great prizes to give away</p>

<p>Check out the competitions we've had so far:</p>

<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="200" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>

</div>
<?php
include ('footer.php');
?>