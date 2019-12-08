<?php ob_start();?>

<?php include("includes/header.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	
	
session_start();
session_destroy();
header('location:../h/index1.php');
?>

<?php include("includes/footer.php"); ?>
