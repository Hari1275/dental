

<?php
include 'connect.php';
if(isset($_POST['done']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    $query = "select * from user where email='$email' and password='$password' ";
    //echo $query;
    $query_run = mysqli_query($con,$query);
    //echo mysql_num_rows($query_run);
    if($query_run)
    {
        if(mysqli_num_rows($query_run)>0)
        {
        $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
        
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        
        header( "Location:index1.php");
        }
        else
        {
            echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
        }
    }
    else
    {
        echo '<script type="text/javascript">alert("Database Error")</script>';
    }
}
else{
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
<h1 class="text-white text-center">patient Login</h1>
</div>
<label> email :  </label>
<input type="text" name="email" class="form-control"required><br>
<label>  password:  </label>
<input type="password" name="password" class="form-control"required><br>
<button class="btn btn-success" type="submit" name="done">Submit</button><br>
<a href="form.php"><li>Register here</li></a>
</div>
</form>
</body>
</html>
