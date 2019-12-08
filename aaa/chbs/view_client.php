<?php include('includes/header.php'); ?>
<?php
	if(isset($_POST['delete'])){
		$client_id = $_POST['client_id'];
		$name = getClient($client_id)['name'];

		$q = "DELETE FROM client where client_id='{$client_id}'";

		$result = mysqli_query($dblink, $q);

		if(!$result){			
			dangerMsg('Can\'t delete client. To delete first remove all <strong>Booking</strong> by him.');
		}
		else{
			dangerMsg('Client: '.$name.' Deleted');
		}

		
	}
?>
<?php
	$query = "SELECT * FROM client";
	$clients = mysqli_query($dblink,$query);
	if(mysqli_num_rows($clients)==0){
		dangerMsg('No client added yet.');
	}
	else{

?>
	
<h2 class="text-center">PATIENT</h2> 

 
<br>                                                                               
	<div  id="search-result">
	  <div class="table-responsive">          
	  <table class="table">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th> PATIENT ID</th>
			<th> Doctor name</th>
			
	        <th>Name</th>
	        <th>Phone</th>
	        <th>Address</th>
	        <th>Email</th>
			<th>Card Holder Name</th>
			<th>Card Number</th>
			<th>CVC</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php
			$count = 1;
			while($r = mysqli_fetch_assoc($clients)){

				?>
	      <tr>

	        <td><?php echo $count++;?></td>
			<td><?php echo $r['client_id']?></td>
			<td><?php echo $r['doctor']?></td>
			<td><?php echo $r['name']?></td>
			<td><?php echo $r['phone']?></td>
			<td><?php echo $r['address']?></td>
			<td><?php echo $r['email']?></td>
			<td><?php echo $r['card']?></td>
			<td><?php echo $r['cardn']?></td>
			<td><?php echo $r['cvc']?></td>
					
			<td>
				<div class="btn-group">
					<button  class="btn btn-primary" onclick="location.href='edit_client.php?client_id=<?php echo $r['client_id']?>'" ><i class="fa fa-edit"></i>Edit</button>&nbsp;&nbsp;&nbsp;
					<form method="post" class="inline">
						<input type="hidden" name="client_id" value="<?php echo $r['client_id']?>">
						
						<button type="submit" class="btn btn-danger" name="delete" ><i class="fa fa-trash"></i>Delete</button>
					</form>
				</div>
			</td>

	      </tr>

	      <?php
		}
			?>
	    </tbody>
	  </table>
	  </div>
	</div>
 <?php
}
?>

<?php include('includes/footer.php'); ?>
