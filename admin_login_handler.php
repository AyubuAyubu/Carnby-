
<?php
if (isset($_POST['btn-admin'])){
    $My_user="Carnby001";
    $My_Pass="WIFI89";
	
	//Receiving data from user
	$Admin_Username=($_POST['Username']);
	$Admin_Password=($_POST['Password']);

	if ($My_user==$Admin_Username AND $My_Pass=$Admin_Password) {
		header("location:admin_dash.html");
	}else{
		header("location:admin_login.html");
	}
 }
