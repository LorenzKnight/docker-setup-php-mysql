<?php 
// echo "1234567890";

if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
  {
    if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
    }
    global $con;
    $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($con, $theValue) : mysqli_escape_string($con, $theValue);

    switch ($theType) {
      case "text":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;    
      case "long":
      case "int":
        $theValue = ($theValue != "") ? intval($theValue) : "NULL";
        break;
      case "double":
        $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
        break;
      case "date":
        $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
        break;
      case "defined":
        $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
        break;
    }
    return $theValue;
  }
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

// function info_user(int $id) : array
// {
//   global $con;
  
//   $query_infouser = sprintf("SELECT * FROM users WHERE user_id = %s ",
//                               GetSQLValueString($id, "int"));
//   $infouser = mysqli_query($con, $query_infouser) or die(mysqli_error($con));
//   $row_infouser = mysqli_fetch_assoc($infouser);
//   $totalRows_infouser = mysqli_num_rows($infouser);

//   $user = [
//     "name"    => $row_infouser['name'],
//     "surname" => $row_infouser['surname']
//   ];

//   return $user;
// }
?>