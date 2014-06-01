<?php


include ("php/dbconnect.php");
include ("php/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width"/>
        <link href="CSS/style.css" type="text/css" rel="stylesheet"/>
        <link href="CSS/desktop.css" type="text/css" rel="stylesheet"/>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src ="js/instafeed.js"></script>
         <script type="text/javascript" src="js/stratus.js"></script>
         <script type="text/javascript" src="js/scripts.js"></script>
         <script type="text/javascript" src ="js/php_scripts.js"></script>
        <script type="text/javascript" src ="js/facebook_scripts.js"></script>
        <script type='text/javascript'>
         $(document).ready(function(){
        <?php

        //to hide navigation
              if ($_SERVER['PHP_SELF']!='/index.php'){
                echo "$('nav').hide();";
              }

              else {
                echo "$('nav').show();";
              }
            ?>
                   });
    </script>
      </head>

      <body>

        <!-- start facebook connect box -->
        <div id="fb-root"></div>
          <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <script src = 'js/facebook_SDK.js'></script>

     <!--  <button onclick="logOut();">Log Out</button> -->

      <div id="result"></div>

      <!-- end facebook connect box -->

      <!-- start playlist  box -->
      <div id="playlist-wrapper-desktop" class="desktop-show">
        <img class="playlist-text" src="images/playlist-text.png" alt="Our Playlists"/>
        <div id="playlists">
          <p>
            <a href="http://soundcloud.com/natasha-natarajan/sets/thursday" class="stratus">Thursday</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/friday" class="stratus">Friday</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/saturday" class="stratus">Saturday</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/sunday" class="stratus">Sunday</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/pumpehuset" class="stratus">Pumpehuset</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/huset" class="stratus">Huset</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/forum" class="stratus">Forum</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/lille-vega" class="stratus">Lille Vega</a> /
            <a href="https://soundcloud.com/natasha-natarajan/sets/vega" class="stratus">Store Vega</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/culturebox" class="stratus">Culturebox</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/loppen" class="stratus">Loppen</a> /
            <a href="http://soundcloud.com/natasha-natarajan/sets/rust" class="stratus">Rust</a> </p>
            <p>** double click on the soundcloud player to see what you've been listening to</p>
        </div>

      </div>
            <!-- end playlist  box -->


      <!-- listen to our playlists mobile button-->
       <div id="playlist-button-mobile" class="mobile-show"><button><a href="https://soundcloud.com/natasha-natarajan/sets" target="_blank">Listen to our playlists on soundcloud</a></button></div>


        <div id="all-content-wrapper">
        <header>
          <div id="heading-wrapper">
            <?php
              if ($_SERVER['PHP_SELF']!='/index.php'){
                include('mobile-menu.php');
              }
            ?>
            <a href="index.php"><img id="main-logo" src="images/sonarcphlogo.png" alt="sonarcph-logo"/></a>
            <div id="header-text" id="tag-line" >
             <p class="nowrap desktop-show">4 days. 8 venues. 120 artists. 1 experience.</p>
             <p class="nowrap" id="sonarcph">Sonar Copenhagen</p>
             <p class="nowrap" id="sonardates">October 16th-19th</p>
             <p><div class="buy"><button class="important-button buy-tickets"><a href="tickets.php">Buy tickets</a></button></div><div id="socialmediaicons"><a href="https://www.facebook.com/SonarFestivalOfficialPage" target="_blank"><img class="nav-socialmedia" id="nav-facebook" src="images/social-media/facebook.png"/></a><a href="http://www.soundcloud.com/natasha-natarajan" target="_blank"><img class="nav-socialmedia"class="nav-socialmedia"  id="nav-soundcloud" src="images/social-media/soundcloud.png"/></a><a href="https://twitter.com/SonarFestival" target="_blank"><img class="nav-socialmedia" id="nav-twitter" src="images/social-media/twitter.png"/></a></div></p>
            </div>
        </div>
          <nav>
            <ul id="navigation">
              <li class="nav-item"><a href="about.php">About</a></li>
              <li class="nav-item"><a href="program.php">Program</a></li>
              <li class="nav-item"><a href="tickets.php">Tickets</a></li>
              <li class="nav-item"><a href="information.php">Information</a></li>
              <li class="nav-item"><a href="competition.php">Competitions</a></li>
              <li class="nav-item"><a href="news.php">News</a></li>
              <li class="nav-item"><a href="gallery.php">Gallery</a></li>
              <li class="nav-item"><a href="sonard.php">Sonar +D</a></li>
              <li class="nav-item">Search</li>

            </ul>
          </nav>
          </header>

          <div id="main-content-wrapper">