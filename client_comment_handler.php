<?php
if (isset($_POST['btn-help'])){

	//connect to database
	require "database_connection.php";

	//Receiving data from user
	$Name=($_POST['ClientName']);
	$Contact=($_POST['ActiveNumber']);
	$Comment=($_POST['ClientComment']);


	//Save data by preparing insert query
	$insert_query="INSERT INTO  `Assistance`(`HelpID`,`ClientName`,`ActiveContact`,`HelpMessage`) VALUES (null,'$Name','$Contact','$Comment')";


	//Execute the Query
	$save=mysqli_query($conn,$insert_query);


	//Check if data have been save
	if (!save) {
		echo "Failed to Save the Record";
	}else{
		header("location:help_center.html");
	}
}