<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => feedback
		$conn = mysqli_connect("localhost", "root", "", "feedback_form");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$item = $_REQUEST['item'];
		$feedback = $_REQUEST['feedback'];
		$rating = $_REQUEST['rating'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO feedback VALUES ('$name',
			'$item','$feedback','$rating')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Thank you for submitting your feedback!"
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $item\n "
				. "$feedback\n $rating");
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
