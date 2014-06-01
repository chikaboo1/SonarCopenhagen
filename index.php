<?php
//this will bring the html head and navigational structure into the document
include ('header.php');
?>
          <!-- these are venues and the artists that will appear on hover -->
            <div id="homepage-venues" class="homepage-div desktop-show">
              <div id="venues" class="homepage">
                  <div class="table-box pumpehuset">
                    <div class="venues-slide-in">
                      <p>Bonobo</p>
                      <p>Plasticman</p>
                      <div class="important-button"><a href="program.php">See More</a></div>
                    </div>
                  </div>
                  <div class="table-box huset">
                    <div class="venues-slide-in">
                      <p>Bonobo</p>
                      <p>Plasticman</p>
                      <div class="important-button"><a href="program.php">See More</a></div>
                    </div>
                  </div>
                  <div class="table-box forum">
                    <div class="venues-slide-in">
                      <p>Bonobo</p>
                      <p>Plasticman</p>
                      <div class="important-button"><a href="program.php">See More</a></div>
                    </div>
                  </div>
                  <div class="table-box lillevega">
                    <div class="venues-slide-in">
                      <p>Bonobo</p>
                      <p>Plasticman</p>
                      <div class="important-button"><a href="program.php">See More</a></div>
                    </div>
                  </div>
                  <div class="table-box storevega">
                    <div class="venues-slide-in">
                      <p>Bonobo</p>
                      <p>Plasticman</p>
                      <div class="important-button"><a href="program.php">See More</a></div>
                    </div>
                  </div>
                  <div class="table-box culturebox">
                    <div class="venues-slide-in">
                      <p>Bonobo</p>
                      <p>Plasticman</p>
                      <div class="important-button"><a href="program.php">See More</a></div>
                    </div>
                  </div>
                  <div class="table-box loppen">
                    <div class="venues-slide-in">
                      <p>Bonobo</p>
                      <p>Plasticman</p>
                      <div class="important-button"><a href"program.php">See More</a></div>
                    </div>
                  </div>
                  <div class="table-box rust">
                    <div class="venues-slide-in">
                      <p>Bonobo</p>
                      <p>Plasticman</p>
                      <div class="important-button"><a href"program.php">See More</a></div>
                    </div>
                  </div>
              </div>
              <!-- button to the full program -->
              <button id="home program" class="important-button">See the full program </button>

            </div>
        </div>

            <!-- Competition section of homepage -->
            <div id="homepage-competition" class="homepage-div desktop-show">
              <div class="homepage-title">
                <h1>Competition</h1>
                <p>5 artists will get the chance to perform at the festival this year but who will they be? We're running a competition where you, our audience, get to participate and decide who you think is an upcoming artist in the electronic dance music scene.</p>
              </div>
              <?php
                //bring in the contestants with the four highest votes
                top_four();

              ?>

            </div>
            <!-- connect with us section -  -->
            <div id="homepage-connect" class="homepage-div desktop-show">
              <div class="homepage-title"><h1>Connect</h1></div>
                <div id="connect" class="homepage">
                    <div class="table-box homepage-connect"><h2>Like us</h2></div>
                    <div class="table-box homepage-connect"><h2>Ask us a question</h2></div>
                    <div class="table-box homepage-connect"><h2>Keep up to date</h2></div>
                    <div class="table-box homepage-connect"><div class="fb-like-box" data-href="https://www.facebook.com/SonarFestivalOfficialPage" data-width="90%" data-height="500px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="true"></div></div>
                    <div class="table-box homepage-connect"><a class="twitter-timeline" href="https://twitter.com/SonarFestival" data-widget-id="468708489062150144">Tweets by @SonarFestival</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
</div>

                </div>

              </div>

           <?php
           //this is where the footer is brought in
            include('footer.php');
           ?>