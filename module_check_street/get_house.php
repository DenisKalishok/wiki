<?php
require ('functions.php');
$input_street = $_POST['input_street'];
$db = new SQLite3("sqlite/addrs.db", SQLITE3_OPEN_READONLY);
get_house_list($db,$input_street);
?>