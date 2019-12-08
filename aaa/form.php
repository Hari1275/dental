<?php
include 'connect.php ';
if(isset($_POST['done'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['Address'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    if($password==$cpassword){
      $query = "select * from user where name='$name'";

    
    $q="INSERT INTO `user`( `name`, `email`, `address`, `contact`, `password`) VALUES ('$name','$email','$address','$contact','$password')";
    $query=mysqli_query($con,$q);
    echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
    header('location:log.php');
    }
    else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-dark">
<h1 class="text-white text-center">patient Resgistration</h1>
</div>
<label> Name:   </label>
<input type="text" name="name" class="form-control"required><br>
<label> email :  </label>
<input type="text" name="email" class="form-control"required><br>
<label>  Address:  </label>
<input type="text" name="Address"class="form-control"required ><br>
<label>  Contact:  </label>
<input type="text" name="contact" class="form-control"required><br>
<label>  password:  </label>
<input type="password" name="password" class="form-control"required><br>
<label> confirm password:  </label>
<input type="password" name="cpassword" class="form-control"required><br>
<button class="btn btn-success" type="submit" name="done">Submit</button><br>

</div>
</form>
</body>
</html>




