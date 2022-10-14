<?php
if (!isset($_SESSION)) {
  session_start();
}

$hostname = "192.168.160.2";
$username = "admin";
$password = "Admin456";
$database = "ratedb";

$con = mysqli_connect($hostname, $username, $password);
mysqli_select_db($con, $database);

if (is_file("inc/functions.php")) 
    include("inc/functions.php"); 
else
{
    include("./inc/functions.php");
}
?>