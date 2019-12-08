<?php

if(isset($_POST['done'])){
$names = $_POST['names'];

$phone= $_POST['phone'];

$emails = $_POST['emails'];

$date= $_POST['ddate'];
$time= $_POST['ttime'];

$messages=$_POST['messages'];
$doctor=$_POST['doctor'];


//  echo "$name";
//  echo "$email";
//  echo "$phone";
// echo "$msg";

include 'connect.php';
$query = "select * from doctor where name='$names'";

    
$q="INSERT INTO `doctor`( `names`, `phone`, `emails`, `ddate`, `ttime`,`messages`,`doctor`) VALUES ('$names','$phone','$emails','$date','$time','$messages',$doctor)";
$query=mysqli_query($con,$q);

echo '<script type="text/javascript">alert(" succussfully appointment")</script>';
}