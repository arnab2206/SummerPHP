<?php
session_start();
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "emp";
$conn = 
    mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
?>