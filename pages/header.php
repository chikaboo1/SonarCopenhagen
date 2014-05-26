<?php

function subpage_prefix (){

  if ($_SERVER['PHP_SELF']!='/index.php'){
    echo '../';
  }
}

include ("../php/dbconnect.php");
include ("../php/functions.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        <link href="<?php subpage_prefix() ?>CSS/style.css" type="text/css" rel="stylesheet"/>
        <link href="<?php subpage_prefix()?>CSS/desktop.css" type="text/css" rel="stylesheet"/>
		<script type="text/javascript" src="<?php subpage_prefix() ?>js/jquery.js"></script>
         <script type="text/javascript" src="<?php subpage_prefix() ?>js/stratus.js"></script>
         <script type="text/javascript" src="<?php subpage_prefix() ?>js/scripts.js"></script>
         <script type="text/javascript" src ="<?php subpage_prefix()?>js/php_scripts.js"></script>
        <script type="text/javascript" src ="<?php subpage_prefix()?>js/facebook_scripts.js"></script>

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

      <script src = '<?php subpage_prefix()?>js/facebook_SDK.js'></script>

      <button onclick="logOut();">Log Out</button>

      <div id="result"></div>

      <!-- end facebook connect box -->

      <!-- start playlist  box -->
      <div id="playlist-wrapper-desktop" class="desktop-show">
        <img class="playlist-text" src="<?php subpage_prefix()?>images/playlist-text.png" alt="Our Playlists"/>
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

      <!-- listen to our playlists mobile button-->
       <div id="playlist-button-mobile" class="mobile-show"><button>Listen to our playlists</button></div>
       <!-- listen to our playlists mobile button-->
       <div id="playlist-wrapper-mobile" class="mobile-show">
        <img class="playlist-text" src="<?php subpage_prefix()?>images/playlist-text1.png" alt="Our Playlists"/>
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

        <div id="all-content-wrapper">
        <header>
          <div id="heading-wrapper">
            <a href="<?php subpage_prefix() ?>index.php"><img id="main-logo" src="<?php subpage_prefix() ?>images/sonarcphlogo.png" alt="sonarcph-logo"/></a>
            <div id="header-text" id="tag-line" >
             <p class="nowrap desktop-show">4 days. 8 venues. 50 artists. 1 experience.</p>
             <p class="nowrap" id="sonarcph">Sonar Copenhagen</p>
             <p class="nowrap" id="sonardates">October 16th-19th</p>
             <div><button class="important-button buy-tickets"><a href="<?php subpage_prefix()?>pages/tickets.php">Buy tickets</a></button></div>
            </div>
        </div>
          <nav>
            <ul id="navigation">
              <li class="nav-item"><a href="<?php subpage_prefix() ?>pages/program.php">Program</a></li>
              <li class="nav-item"><a href="<?php subpage_prefix() ?>pages/tickets.php">Tickets</a></li>
              <li class="nav-item"><a href="<?php subpage_prefix() ?>pages/information.php">Information</a></li>
              <li class="nav-item"><a href="<?php subpage_prefix() ?>pages/news.php">News</a></li>
              <li class="nav-item"><a href="<?php subpage_prefix() ?>pages/competition.php">Competitions</a></li>
              <li class="nav-item"><a href="<?php subpage_prefix() ?>pages/gallery.php">Gallery</a></li>
              <li class="nav-item"><a href="<?php subpage_prefix() ?>pages/gallery.php">About</a></li>
              <li class="nav-item" id="socialmediaicons"><a href=""><img class="nav-socialmedia" id="nav-facebook" src="<?php subpage_prefix() ?>images/social-media/facebook.png"/></a><a href=""><img class="nav-socialmedia"class="nav-socialmedia"  id="nav-soundcloud" src="<?php subpage_prefix() ?>images/social-media/soundcloud.png"/></a><a href=""><img class="nav-socialmedia" id="nav-twitter" src="<?php subpage_prefix() ?>images/social-media/twitter.png"/></a></li>
            </ul>
          </nav>
          </header>

          <div id="main-content-wrapper">