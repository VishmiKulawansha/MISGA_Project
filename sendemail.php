<!DOCTYPE html>
<html>
<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "misga");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$email = $_REQUEST['email'];
		$country = $_REQUEST['country'];
		$subject = $_REQUEST['subject'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contact VALUES ('$first_name','$email','$country','$subject')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
