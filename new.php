<html>
	<body bgcolor="brickred">
	<center><br>	<h1> Session Feedback </h1><br><br>
	
	
			<form method="post" action="new.php">
				<input type="text" name="username" placeholder="Name"/><br><br>
				<input type="text" name="email" placeholder="Email"/><br><br>
				<textarea rows="5" cols="20" name="message"  placeholder="Your Message" style="width:175px;"></textarea><br><br>
				<input type="submit" name="submit" placeholder="Name"/><br><br>
				
		
		
		<a href="view.php"><h3>View Reports</h3></a>
		</form>
<?php
	$dbc = mysqli_connect("localhost","root","","attendance");
		if(isset($_POST['submit']))	
		{
			$qry = "insert into details values('" . $_POST['username'] . "','" . $_POST['email'] . "','" . $_POST['message'] . "')";
			mysqli_query($dbc,$qry);
			echo "Saved Successfully";
		}
		mysqli_close($dbc);	
?>
	</center>
	</body>
</html>