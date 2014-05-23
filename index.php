
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        <link href="CSS/mobile.css" type="text/css" rel="stylesheet"/>
        <link href="CSS/desktop.css" type="text/css" rel="stylesheet"/>
		<script type="text/javascript" src="js/jquery.js"></script>
         <script type="text/javascript" src="js/stratus.js"></script>
         <script type="text/javascript" src="js/scripts.js"></script>

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

      <!-- end facebook connect box -->

      <!-- start playlist  box -->
      <div id="playlist-wrapper">
        <img class="playlist-text" src="images/playlist-text.png" alt="Our Playlists"/> 
        <div id="playlists">
          <p>
            <a href="http://soundcloud.com/natasha-natarajan/sets/thursday" class="stratus">Thursday</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/friday" class="stratus">Friday</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/saturday" class="stratus">Saturday</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/sunday" class="stratus">Sunday</a> /</p>
          <p>
            <a href="http://soundcloud.com/natasha-natarajan/sets/pumpehuset" class="stratus">Pumpehuset</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/huset" class="stratus">Huset</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/forum" class="stratus">Forum</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/lille-vega" class="stratus">Lille Vega</a> / 
            <a href="https://soundcloud.com/natasha-natarajan/sets/vega" class="stratus">Store Vega</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/culturebox" class="stratus">Culturebox</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/loppen" class="stratus">Loppen</a> / 
            <a href="http://soundcloud.com/natasha-natarajan/sets/rust" class="stratus">Rust</a> </p>
        </div>
        

      </div>
      <!-- end playlist  box -->

        <div id="all-content-wrapper">
        <header>
          <div id="heading-wrapper">
            <img id="main-logo" src="images/sonarcphlogo.png" alt="sonarcph-logo"/>
            <div id="header-text" id="tag-line" >
             <p class="nowrap desktop-show">4 days. 8 venues. 50 artists. 1 experience.</p>
             <p class="nowrap" id="sonarcph">Sonar Copenhagen</p>
             <p class="nowrap" id="sonardates">October 16th-19th</p>
             <div><button class="important-button buy-tickets"><a href="">Buy tickets</a></button></div>
            </div>
        </div>
          <nav>
            <ul id="navigation">
              <li class="nav-item"><a href="">Program</a></li>
              <li class="nav-item"><a href="">Tickets</a></li>
              <li class="nav-item"><a href="">Information</a></li>
              <li class="nav-item"><a href="">News</a></li>
              <li class="nav-item"><a href="">Competitions</a></li>
              <li class="nav-item"><a href="">Gallery</a></li>
              <li class="nav-item"><a href="">About</a></li>
              <li class="nav-item" id="socialmediaicons"><a href=""><img class="nav-socialmedia" id="nav-facebook" src="images/social-media/facebook.png"/></a><a href=""><img class="nav-socialmedia"class="nav-socialmedia"  id="nav-soundcloud" src="images/social-media/soundcloud.png"/></a><a href=""><img class="nav-socialmedia" id="nav-twitter" src="images/social-media/twitter.png"/></a></li>
            </ul>
          </nav>
          </header>
         
          <div id="main-content-wrapper">
            
            <div id="homepage-venues" class="homepage-div desktop-show">
              <div id="venues" class="homepage">
                <div class="table-row align-bottom">
                  <div class="table-box">
                    <div class="slide-up">
                    <img src="images/venues/pumpehuset.png" alt="pumpehuset icon" class="venues"/>
                    <div class="venue-hover">
                      <h3>Bonobo</h3>
                      <h3>Plasticman</h3>
                      <button class="important-button"><a href="">See more</a></button>
                    </div>
                  </div>
                  </div>
                  <div class="table-box"><img src="images/venues/huset.png" alt="pumpehuset icon" class="venues"/></div>
                  <div class="table-box"><img src="images/venues/forum.png" alt="pumpehuset icon" class="venues"/></div>
                  <div class="table-box"><img src="images/venues/lillevega.png" alt="pumpehuset icon" class="venues"/></div>
                </div>
                 <div class="table-row align-bottom">
                  <div class="table-box"><img src="images/venues/storevega.png" alt="pumpehuset icon" class="venues"/></div>
                  <div class="table-box"><img src="images/venues/culturebox.png" alt="pumpehuset icon" class="venues"/></div>
                  <div class="table-box"><img src="images/venues/loppen.png" alt="pumpehuset icon" class="venues"/></div>
                  <div class="table-box"><img src="images/venues/rust.png" alt="pumpehuset icon"class=" venues" /></div>
                </div>
              </div>

              <button id="home program" class="important-button">See the full program </button>
              
            </div>
            
            <div id="homepage-competition" class="homepage-div desktop-show">
              <div class="homepage-title">
                <h1>Competition</h1>
                <p>5 artists will get the chance to perform at the festival this year but who will they be? We're running a competition where you, our audience, get to participate and decide who you think is an upcoming artist in the electronic dance music scene.</p>
              </div>
            </div>

            <div id="homepage-connect" class="homepage-div desktop-show">
              <div class="homepage-title"><h1>Connect</h1></div>
                <div id="connect" class="homepage">
                  <div class="table-row align-bottom">
                    <div class="table-box homepage-facebook"><h2>Like us</h2></div>
                    <div class="table-box"><h2>Ask us a question</h2></div>
                    <div class="table-box"><h2>Keep up to date</h2></div>
                  </div>
                  <div class="table-row">
                    <div class="table-box homepage-facebook"><div class="fb-like-box" data-href="https://www.facebook.com/SonarFestivalOfficialPage" data-width="90%" data-height="500px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true"></div></div>
                    <div class="table-box"><a class="twitter-timeline" href="https://twitter.com/SonarFestival" data-widget-id="468708489062150144">Tweets by @SonarFestival</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
</div>
                  
                </div>
      
              </div>
            </div>

            
          </div>
      	
      </body>

  </html>