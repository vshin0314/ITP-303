<?php
require 'config/config.php';
$isDeleted = false;
if ( !isset($_GET['calendarID']) || empty($_GET['calendarID']) ) {
	$error = "Invalid menu.";
}
else {
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if ( $mysqli->connect_errno ) {
		echo $mysqli->connect_error;
		exit();
	}
	$sql = "DELETE FROM calendar WHERE calendarID = " . $_GET["calendarID"] . ";";
	$results = $mysqli->query($sql);
	if(!$results) {
		echo $mysqli->error;
		exit();
	}
	if ($mysqli->affected_rows == 1) {
		$isDeleted = true;
	}
	$mysqli->close();
	header("Location: ../final_project/profile.php");
}
?>