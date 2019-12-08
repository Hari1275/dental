<?php include('includes/header.php'); ?>

<?php
if(isset($_POST['add'])){
	$doctor= $_POST['doctor'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$card = $_POST['card'];
	$cardn = $_POST['cardn'];
	$cvc = $_POST['cvc'];

	$q = "INSERT INTO client VALUES(NULL,'{$doctor}','{$name}','{$phone}','{$address}','{$email}','{$card}','{$cardn}','{$cvc}')";

	$result = mysqli_query($dblink, $q);

	if(!$result){
		echo dangerMsg('There was an error.');
	}
	else{
		echo successMsg('Client Added Successfully.');
	}
}

?>
<h2>Add patient</h2>
	<form method="post">
	<div class="form-group">
	    <label for="name">Choose docters</label>
	   
	    <select id="" class="form-group" name="doctor">
  <option value="hari">Hari</option>
  <option value="vishal">Vishal</option>
  <option value="yashaswi">Yashaswi</option>
  <option value="vignesh">Vignesh</option>
</select>
	  </div>
	  <div class="form-group">
	    <label for="name">patient  Name</label>
	    <input type="text" name="name" required class="form-control" id="name"  placeholder="Enter Name">
	    
	  </div>
	   <div class="form-group">
	    <label for="address">Address</label>
	    <input type="text" name="address" required class="form-control" id="address" aria-describedby="addHelp" placeholder="Enter Address">
	     <small id="addHelp" class="form-text text-muted">Enter your address with street, city and district.</small>
	  </div>
	  <div class="form-group">
	    <label for="phone">Phone</label>
	    <input type="text" name="phone" required class="form-control" id="phone" placeholder="Enter Phone">
	  </div>
	 	<div class="form-group">
	    <label for="pass">Email</label>
	    <input type="text" name="email" required class="form-control" id="pass" placeholder="Enter Email">
	  </div>
	  <div class="form-group">
	    <label for="pass">Card holder name</label>
	    <input type="text" name="card" required class="form-control" id="pass" placeholder="Enter Card holder name">
	  </div>
	  <div class="form-group">
	    <label for="pass">Card number</label>
	    <input type="text" name="cardn" required class="form-control" id="pass" placeholder="Enter Card number">
	  </div>
	  <div class="form-group">
	    <label for="pass">CVC</label>
	    <input type="text" name="cvc" required class="form-control" id="pass" placeholder="Enter CVC">
	  </div>
	  <button type="submit" name="add" class="btn btn-primary">Submit</button>
	</form>

<?php include('includes/footer.php'); ?>
