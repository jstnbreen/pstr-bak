<?php
// TURN ON/OFF ERROR REPORTING
error_reporting(0);
@ini_set('display_errors', 0);

// START SESSION
session_start();

// VARIABLES
//
// site5 connection
$connection = mysqli_connect("localhost","justinbr_admin","j00stin1","justinbr_db");

// vagrant scotchbox
//$connection = mysqli_connect("localhost","root","root","scotchbox");
?>