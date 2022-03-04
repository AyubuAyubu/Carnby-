<?php
if (isset($_POST['btn-update'])){

	//connect to database
	require "database_connection.php";

	//Receiving data from user
	$update_Client_name=($_POST['fullName']);
	$update_Client_email=($_POST['Email']);
	$update_Client_contact=($_POST['PhoneNumber']);
  $update_Client_password=($_POST['Passwd']);
  $update_Client_id=($_POST['my_id']);


	//Update data by preparing  query
	$update_query="UPDATE `Client` SET   `FullName`='$update_Client_name' 
                         `Email`='$update_Client_email' `PhoneNumber`='$update_Client_contact'
                           `Password`='$update_Client_password' WHERE `ClientID`='$update_Client_id'";
                       


	//Execute the Query
	$update=mysqli_query($conn,$update_query);


	//Check if data have been save
	if (!update) {
		echo "Failed to Save the Record";
	}else{
		header("location:client_registered.php");
	}
}