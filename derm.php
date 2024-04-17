<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$appointmentDate = $_POST['appointmentDate'];
	$timeslot = $_POST['timeslot'];
	$doctor = $_POST['doctor'];
	$payment = $_POST['payment'];
	 
	

	// Database connection
	$conn = new mysqli('localhost','root','','appointment booking');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT into dermatappointment(name, email,appointmentDate,timeslot,doctor,payment) values(?,?,?,?,?,?)");
		$stmt->bind_param("ssssss", $name, $email, $appointmentDate,$timeslot,$doctor,$payment);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Appointment successfull...";
		$stmt->close();
		$conn->close();
	}
?>