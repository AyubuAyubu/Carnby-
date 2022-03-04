<?php
if (isset($_POST['btn-comment'])){

	//connect to database
	require "database_connection.php";

	//Receiving data from user
	$Guest_Name=($_POST['GuestName']);
	$Guest_Email=($_POST['GuestEmail']);
	$Guest_Comment=($_POST['GuestComment']);


	//Save data by preparing insert query
	$insert_query="INSERT INTO `Guest`(`GuestID`,`Name`,`Email`,`Comment`)VALUES(null,'$Guest_Name','$Guest_Email','$Guest_Comment')";


	//Execute the Query
	$save=mysqli_query($conn,$insert_query);


	//Check if data have been save
	if (!save) {
		echo "Failed to Save the Data";
	}else{
		header("location:contact.html");
	}
}