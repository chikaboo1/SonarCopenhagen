<?php

//$connection = mysql_connect("localhost", "root", "root");
$connection = mysql_connect("s14exam11.keaweb.dk", "s14exam11", "ldyc32b3");
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

$db_selected = mysql_select_db("s14exam11", $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

mysql_query('SET NAMES utf8 ');

 ?>
