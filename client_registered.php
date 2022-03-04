<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- connection to CSS -->
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css" />
    <!-- Connection to FontAwesomes-->
    <link
      rel="stylesheet"
      href="Assets/fontawesome-free-5.15.4-web/css/all.css"
    />
    <link
      rel="stylesheet"
      href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css"
    />
  
    <!-- connection to javascript -->
    <script src="Assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assets/bootstrap/js/popper.min.js"></script>
    <script src="Assets/bootstrap/js/bootstrap.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact US</title>
  </head>
  <body>
  
    <h1 class="text-primary text-center">Carnby Registered Clients</h1>
    <table class="table table-success table-hover">
      <tr>
        <th>CLIENT ID</th>
        <th>FULL NAME</th>
        <th>EMAIL</th>
        <th>CONTACT</th>
        <th>PASSWORD</th>
        <th>DELETE</th>
        <th>UPDATE</th>
      </tr>

      <?php
        require 'database_connection.php';

        $select_query= "SELECT * FROM `Client` where 1";

        $client = mysqli_query($conn,$select_query);

        while ($row= mysqli_fetch_assoc($client)) {
          extract($row);
          echo "<tr>
                  <td>$ClientID</td>
                  <td>$FullName</td>
                  <td>$Email</td>
                  <td>$PhoneNumber</td>
                  <td>$Password</td>
                  <td><a href='delete_registered_client.php?ClientId=$ClientID' class='btn btn-danger btn-block'>DELETE</a></td>
                  <td><a href='update_registered_client.php?client_name=$FullName&client_email=$Email&client_contact=$PhoneNumber&client_pwd=$Password&client_Id=$ClientID' class='btn btn-primary btn-block'>UPDATE</a></td>
                </tr>";
        }

      ?>
    </table>
  </body>
  </html>