<?php
include ('header.php');
?>

<h1>Program</h1>

<form action="#" method="post" id="program-filter">
	<h2>Filter by Venue</h2>
    <div class="program-checkbox-wrapper">
        <p><label><input type="checkbox" name="all" id="all" value="Yes" />All</label></p>
    	<p><label><input type="checkbox" name="Huset" id="huset" value="Yes" />Huset</label></p>
        <p><label><input type="checkbox" name="Pumpehuset" id="pumpehuset" value="Yes" />Pumpehuset</label></p>
        <p><label><input type="checkbox" name="Forum" id="forum" value="Yes" />Forum</label></p>
        <p><label><input type="checkbox" name="Lille Vega" id="lillevega" value="Yes" />Lille Vega</label></p>
        <p><label><input type="checkbox" name="Store Vega" id="storevega" value="Yes" />Store Vega</label></p>
        <p><label><input type="checkbox" name="Culturebox" id="culturebox" value="Yes" />Culturebox</label></p>
        <p><label><input type="checkbox" name="Loppen" id="loppen" value="Yes" />Loppen</label></p>
        <p><label><input type="checkbox" name="Rust" id=" " value="Yes" />Rust</label></p>
    </div>
    
    <h2>Filter by Day</h2>
    <div class="program-checkbox-wrapper">
        <p><label><input type="checkbox" name="all" id="all" value="Yes" />All</label></p>
        <p><label><input type="checkbox" name="Huset" id="huset" value="Yes" />Thursday</label></p>
        <p><label><input type="checkbox" name="Huset" id="huset" value="Yes" />Friday</label></p>
        <p><label><input type="checkbox" name="Huset" id="huset" value="Yes" />Saturday</label></p>
        <p><label><input type="checkbox" name="Huset" id="huset" value="Yes" />Sunday</label></p>
    </div>
</form>


<?php
allArtists();
?>


<?php
include ('footer.php');
?>