<?php

// Connect to the mySQL database
$db = new mysqli("localhost", "snadmin", "snadmin*", "sensornetworks");

// Check that connection to the database was successfully established
if ($db->connect_error)
	die("Error connecting to the database");

// Get and return the list of all mote id's
$selectString = "SELECT DISTINCT id FROM sensornetworks.sp14_elliotd_motes;";
$res = $db->query($selectString);
while ($row = $res->fetch_assoc())
	echo $row['id'] . ' ';

?>
