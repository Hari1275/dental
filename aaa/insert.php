
<?php



$con = $con = mysqli_connect("127.0.0.1","root","","dentalclinic");

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"dentalclinic");

$name=$_POST['ffname'];
$pass=$_POST['llname'];
$pname=$_POST['ppname'];


$sql="INSERT INTO `problem`(`problem_name`, `problem_type`, `problem_descrip`) 
VALUES ('$name','$pass','$pname')";



if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

  echo '<script type="text/javascript">alert("Your problem succussfully recevied")</script>';

 
 $id=$_POST['ffname'];

?>
