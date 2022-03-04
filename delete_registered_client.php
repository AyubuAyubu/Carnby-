<?php
if(isset($_GET['ClientId'])){

    require 'database_connection.php';

    $ReceivedId= $_GET['ClientId'];

    $delete_query= "DELETE FROM `Client` WHERE ClientID= $ReceivedId";

    $delete = mysqli_query($conn,$delete_query);
    if($delete){
       header("location:client_registered.php");
    }

}