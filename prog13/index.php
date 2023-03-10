<?php
include("function.php");
echo '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/basic.css">
<link rel="stylesheet" href="../assets/css/main.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</head>	
<body>
<div id="page-inner">';
include("navg.php");
if(isset($_GET['page']) && $_GET['page']!=""){
	
	$page=$_GET['page'];
	switch ($page){
		case "work":
			include("./work.php");
			break;
		case "school":
			include("./school.php");
			break;
		case "contact":
			include("./contact.php");
			break;
		default:
			include("./home.php");
			break;
	}		
} else {
	
	include("home.php");
}
echo '</div>';
echo '</body>';
echo '</html>';
?>