<?php
// $realpath = realpath(dirname(__FILE__));
// require_once($realpath.'/connections/conexion.php');

require_once('logic/index_be.php');
?>
<html>
<head>
<meta charset="iso-8859-1">
<title><?php echo $pageName; ?></title>
<link href="css/index.css" rel="stylesheet" type="text/css"  media="all" />

</head>
<body>
    <?php 
    $array = u_all_info(1);

    echo $array['name'];

    $the_river = post_wall_profile();

    foreach($the_river as $item)
    {
        echo $item['user_id'];
    }
    //include("src/wrap_index.php"); 
    ?>
</body>
</html>