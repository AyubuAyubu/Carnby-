<?php
session_start();
$Email=$_POST['Email'];
$Password=$_POST['Password'];

require_once "database_connection.php";

$sql="SELECT * FROM Client WHERE Email='$Email' AND  Password='$Password'";

$run=mysqli_query($conn,$sql);

$check=mysqli_num_rows($run);

if($check==1){
	header("location:user_dash.html");
}else{
	header("location:index.html");
}