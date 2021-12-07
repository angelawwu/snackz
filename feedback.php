<!DOCTYPE html>
<html lang="en">

<head>
	<title>Feedback Form</title>
</head>

<body>
	<center>
		<h1>Feedback Form</h1>

		<form action="insert.php" method="post">
			
			
<p>
				<label for="name">Name:</label>
				<input type="text" name="name" id="name">
			</p>		
			
<p>
				<label for="item">Item:</label>
				<input type="text" name="item" id="item">
			</p>
			
<p>
				<label for="feedback">Feedback:</label>
				<input type="text" name="feedback" id="feedback">
			</p>


			
			
			
<p>
				<label for="rating">Rating (out of 10):</label>
				<input type="text" name="rating" id="rating">
			</p>
		
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
