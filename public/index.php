<?php
$realpath = realpath(dirname(__FILE__));
require_once($realpath.'/connections/conexion.php');
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