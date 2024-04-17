<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];
    

	 
	

	// Database connection
	$conn = new mysqli('localhost','root','','feedback');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT into details(name, email,feedback) values(?,?,?)");
		$stmt->bind_param("sss", $name, $email, $feedback);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
	}
?>