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
   
    <h1 class="text-muted text-center">Carnby Registered Clients</h1>
    <table class="table table-dark table-hover">
      <tr>
        <th>Client ID</th>
        <th>Full Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
        <th>DELETE</th>
        <th>UPDATE</th>
      </tr>

      <?php
        require 'database_connection.php';

        $select_query= "SELECT * FROM `Client` where 1";

        $client = mysql_query($conn,$select_query);

        while ($row= mysqli_fetch_assoc($client)) {
          extract($row);
          echo "<tr>
                  <td>$ClientID</td>
                  <td>$FullName</td>
                  <td>$Email</td>
                  <td>$PhoneNumber</td>
                  <td>$DELETE</td>
                  <td>$UPDATE</td>
                </tr>";
        }

      ?>
    </table>
  </body>
  </html>