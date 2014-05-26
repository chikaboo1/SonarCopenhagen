<?php
include ('header.php');
?>

<h1>Program</h1>

<form action="#" method="post">
	<h2>Filter by Venue</h2>
	<label><input type="checkbox" name="Huset" value="Yes" />Huset</label>
    <label><input type="checkbox" name="Pumpehuset" value="Yes" />Pumpehuset</label>
    <label><input type="checkbox" name="Forum" value="Yes" />Forum</label>
    <label><input type="checkbox" name="Lille Vega" value="Yes" />Lille Vega</label>
    <label><input type="checkbox" name="Store Vega" value="Yes" />Store Vega</label>
    <label><input type="checkbox" name="Culturebox" value="Yes" />Culturebox</label>
    <label><input type="checkbox" name="Loppen" value="Yes" />Loppen</label>
    <label><input type="checkbox" name="Rust" value="Yes" />Rust</label>
    <label><input type="submit" name="formSubmit" value="Submit" /></label>
</form>


<?php
allArtists();
?>


<?php
include ('footer.php');
?>