<?php
$client_id=$_GET['ID'];



include 'connect.php';
$q=$conn->prepare("DELETE FROM `client` where client_id='$client_id'");
$res=$q->execute();
if($res){
	echo "<script>alert('DELETED INFORMATION');</script>";
	echo "<script> window.location='db.php';</script>";
}
else{
	echo "<script>alert('failure');</script>";
	// echo "<script> window.location='contacts.html';</script>";
}