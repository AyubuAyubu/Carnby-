<?php
$host="localhost";
$user="root";
$password="";
$DB="Carnby_DB";

$conn=mysqli_connect($host,$user,$password,$DB);
if(!$conn){
    die("Failed to Connect to Database");
}
