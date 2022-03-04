<?php
if (isset($_POST['btn-register'])){

	//connect to database
	require 'database_connection.php';

	//Receiving data from user
	$FullName=($_POST['fullName']);
	$Email=($_POST['Email']);
	$PhoneNumber=($_POST['PhoneNumber']);
	$Password=($_POST['Passwd']);


	//Save data by preparing insert query
	$insert_query="INSERT INTO `Client`(`ClientID`, `FullName`, `Email`, `PhoneNumber`, `Password`) VALUES(null,'$FullName','$Email','$PhoneNumber','$Password')";


	//Execute the Query
	$save=mysqli_query($conn,$insert_query);


	//Check if data have been save
	if (!save) {
		echo "Failed to Save the Registration Data";
	}else{
		header("location:registration.html");
	}
}
?>





