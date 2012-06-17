<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php candytitle('-') ?></title>
	<?php candyCss('styles.css') ?>
	<?php candyCss('user.php') ?>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php 
	// Include this before the closing head tag to allow plugins to include scripts and styles
	candyHead() ?>
</head>
<body>
<?php theNav() ?>