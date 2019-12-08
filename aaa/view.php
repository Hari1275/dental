<?php

$con = $con = mysqli_connect("127.0.0.1","root","","dentalclinic");

mysqli_select_db($con,"dentalclinic");

$sql="SELECT * FROM problem";

$records=mysqli_query($con,$sql);

?>

<html>
	<head>
		<title>dental clinic</title>
		<center><font color="white" size="7"><u> &nbsp Customer &nbsp Details</u></font></center>
        <style>
        body{
            background:cyan;
        }
        </style>
	</head>
	
	<body >
	<center>
	<br><br>
	<pre>
		<table width="600" border="4" cellpadding="3" cellspacing="3" style="color:white" bgcolor="blue">
			<font color="red">
			<tr>
            <th>id</th>
			<th>Customer Name</th>
			<th>problem type</th>
			<th>problem description</th>
			
			<th><table style =bgcolor="red">Cancel</table></th>
			</th>
			</font>
		
		<?php
		while($rowvalue=mysqli_fetch_array($records))
		{
            echo "<tr>";	
            echo "<td>".$rowvalue['id']."</td>";	
            echo "<td>".$rowvalue['problem_name']."</td>";
            echo "<td>".$rowvalue['problem_type']."</td>";
            echo "<td>".$rowvalue['problem_descrip']."</td>";
            
		$id=$rowvalue['id'];
		echo "<td>"."<form action='del.php'><input type='hidden' name='id' value='$id' /><input type='submit' value='Cancel'></form>"."</td>";
		}
		?>
		</table>
	</pre>
	</center>
	</body>
</html>