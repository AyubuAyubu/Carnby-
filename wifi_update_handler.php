<?php
if (isset($_POST['btn-install'])){

	//connect to database
	require "database_connection.php";

	//Receiving data from user
	$update_name=($_POST['ClientName']);
	$update_location=($_POST['Location']);
	$update_date=($_POST['DOI']);
  $update_install=($_POST['Installation']);
  $update_speed=($_POST['speed']);
  $update_id=($_POST['wifi_Id']);


	//Update data by preparing  query
	$update_query="UPDATE `Wifi` SET   `ClientName`='$update_name' 
                         `ClientLocation`='$update_location', `DateOfInstallation`='$update_date',
                           `InstallationType`='$update_install',`SpeedPackage`='$update_speed' WHERE `WifiID`=' $update_id'";
                       


	//Execute the Query
	$update=mysqli_query($conn,$update_query);


	//Check if data have been save
	if (!update) {
		echo "Failed to Save the Record";
	}else{
		header("location:client_registered.php");
	}
}