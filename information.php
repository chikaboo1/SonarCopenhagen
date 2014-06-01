<?php
include ('header.php');
?>

<script type="text/javascript">
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'pumpehuset',
        clientId: '4604e28ba24e4582ab9dae943c927879'
    });
    feed.run();

</script>

<div id="information"> 
<h1>Information</h1>
<p class="large">Sonar Copenhagen is a <span class="highlight-red">city festival</span> taking place in <span class="highlight-red">8 different venues</span> in Copenhagen's city center <span class="highlight-red">this Autumn</span> between October 16th and 19th 2014.</p>
<h3>More information on: <a href="#venues">The Venues</a> / <a href="#accommodation">Accommodation</a> / <a href="#travel">Travel</a></h3>

<h2 class="border-top" id="venues">The Venues</h2>

<!-- p>Huset</p>
<p>Store Vega</p>
<p>Pumpehuset</p>
<p>Forum</p>
<p>Lille Vega</p>
<p>Culturebox</p>
<p>Loppen</p>
<p>Rust</p>

<h3>Latest in <span>Huset</span></h3> -->

<div id="instafeed"></div>

<h2 class="border-top" id="accommodation">Accommodation</h2>
<h2 class="border-top" id="travel">Travel</h2>


</div>
<?php
include ('footer.php');
?>