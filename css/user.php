<?php header("Content-type: text/css");
include '../../../core/classes.php';
$colors = Theme::getColors();  ?>

body{
	background: <?php echo $colors->bg ?>;
}

a:link, a:visited{
	color: <?php echo $colors->link ?>;
}