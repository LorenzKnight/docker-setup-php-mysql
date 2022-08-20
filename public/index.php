<?php
$realpath = realpath(dirname(__FILE__));
require_once('connections/conexion.php');

// $query_infouser = sprintf("SELECT * FROM users");
// $infouser = mysqli_query($con, $query_infouser) or die(mysqli_error($con));
// $row_infouser = mysqli_fetch_assoc($infouser);
// $totalRows_infouser = mysqli_num_rows($infouser);

?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link href="css/index.css" rel="stylesheet" type="text/css"  media="all" />

</head>
<body>
    <div style="background-color: orange;">
        este es el index
        <?php echo $row_infouser['name']; ?>
    </div>
</body>
</html>