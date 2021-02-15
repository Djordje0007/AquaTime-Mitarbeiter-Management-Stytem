<?php
session_start();

if(!isset($_SESSION['userid'])){
    header('location: login.php');
    exit();
}
$userid = $_SESSION['userid'];

require_once ('PA-database.php');


?>




