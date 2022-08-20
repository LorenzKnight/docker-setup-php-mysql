<?php
// if (!isset($_SESSION)) {
//   session_start();
// }

$hostname = "192.168.160.2";
$username = "admin";
$password = "Admin456";
$database = "ratedb";

$con = mysqli_connect($hostname, $username, $password, $database);
// mysqli_select_db(DATABASENAME, $con);

if (is_file("inc/functions.php")) 
    include("inc/functions.php"); 
else
{
    include("./inc/functions.php");
}
// # Comprobar si existe registro

// $query = "SELECT * FROM $usertable";
// $result = mysqli_query($query);

// if($result){
//   while($row = mysqli_fetch_array($result)){
//     $name = $row["name"];
//     echo "Nombre: ".$name."br/>";
//   }
// }
?>
<?php
// if (!isset($_SESSION)) {
//   session_start();
// }

// $hostname_con = "192.168.160.2";
// $database_con = "ratedb";
// $username_con = "admin";
// $password_con = "Admin456";
// $con = mysqli_connect($hostname_con, $username_con, $password_con, $database_con);
// mysqli_set_charset($con, 'utf8');
?>