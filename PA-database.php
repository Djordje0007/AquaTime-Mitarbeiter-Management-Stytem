<?php

//Datenbank//

//Host
$db_host= "localhost";

//USER
$db_user= "web156";

//PASSWORT
$db_password = "nexruK-joqjyn-8bitqy";

//DATENBANK
$db_database = "usr_web156_22";

$topnavbarsql= new mysqli($db_host, $db_user, $db_password, $db_database);
///////////
//VERSION 1
///////////
$con = mysqli_connect("$db_host", "$db_user", "$db_password", "$db_database");
///////////
//VERSION 2
///////////
$conn = mysqli_connect("$db_host", "$db_user", "$db_password", "$db_database");
///////////
//VERSION 3
///////////
error_reporting(E_ALL);

// Zum Aufbau der Verbindung zu Datenbank navbar
$db_link = mysqli_connect($db_host, $db_user, $db_password, $db_database);

///////////
//SONSTIGES
///////////
// TOP NAVBAR
$topnavbarsql = new mysqli($db_host, $db_user, $db_password, $db_database);

/////////////////////
//MITARBEITER ABFRAGE
/////////////////////
//ADMIN
$con_admin = new mysqli ($db_host, $db_user, $db_password, $db_database);
//
?>