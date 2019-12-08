


<?php

$con = $con = mysqli_connect("127.0.0.1","root","","dentalclinic");

mysqli_select_db($con,"dentalclinic");

$id = $_REQUEST['id'];
$sql="DELETE FROM `problem` WHERE id='$id'";
$records=mysqli_query($con,$sql);
echo '<script type="text/javascript">alert(" succussfully deleted")</script>';
header('location:view.php')

?>

