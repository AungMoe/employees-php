<?php
// session_start();
// $servername = "localhost";
// $server_user = "root";
// $server_pass = "";
// $dbname = "food";
// $name = $_SESSION['name'];
// $role = $_SESSION['role'];
// $con = new mysqli($servername, $server_user, $server_pass, $dbname);

session_start();
$servername = "remotemysql.com";
$server_user = "HRyxs0JYts";
$server_pass = "sOrJWv38vD";
$dbname = "HRyxs0JYts";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);


