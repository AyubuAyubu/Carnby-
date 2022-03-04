<?php
if(isset($_GET['guest_Id'])){
    require 'database_connection.php';
    $received_id= $_GET['guest_Id'];

    $delete_query= "DELETE FROM `Guest_Messages` where GuestID= $guest_Id";

    $delete = mysql_query($conn,$delete_query);
    if(!$delete){
        die("Deletion Failed");
    }else{
        header("location:guest_comment.php");
    }

}