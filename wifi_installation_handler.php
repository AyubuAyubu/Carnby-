<?php
if (isset($_POST['btn-wifi'])){

	//connect to database
	require "database_connection.php";

	//Receiving data from user
	$Client_Name=($_POST['ClientName']);
	$ClientLocation=($_POST['Location']);
	$DateOfInstallation=($_POST['DOI']);
	$InstallationType=($_POST['Installation']);
	$SpeedPackage=($_POST['speed']);


	//Save data by preparing insert query
	$insert_query="INSERT INTO `Wifi`(`WifiID`,`ClientName`,`ClientLocation`,`DateOfInstallation`,`InstallationType`,`SpeedPackage`)VALUES(null,'$Client_Name','$ClientLocation','$DateOfInstallation','$InstallationType','$SpeedPackage')";


	//Execute the Query
	$save=mysqli_query($conn,$insert_query);


	//Check if data have been save
	if (!save) {
		echo "Failed to Save the Installation Data";
	}else{
		header("location:client_with_wifi.php.html");
	}
}
