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
    <h1 class="text-danger text-center">Carnby Registered Clients Need WiFi</h1>
    <table class="table table-info table-hover">
      <tr>
        <th>WIFI ID</th>
        <th>CLIENT NAME</th>
        <th>CLIENT LOCATION</th>
        <th>INSTALLATION DATE</th>
        <th>INSTALLATION TYPE</th>
        <th>SPEED TYPE</th>
        <th>UPDATE</th>
      </tr>

      <?php
        require 'database_connection.php';

        $select_query= "SELECT * FROM `Wifi` where 1";

        $wifi = mysqli_query($conn,$select_query);

        while ($row= mysqli_fetch_assoc($wifi)) {
          extract($row);
          echo "<tr>
                  <td>$WifiID</td>
                  <td>$ClientName</td>
                  <td>$ClientLocation</td>
                  <td>$DateOfInstallation</td>
                  <td>$InstallationType</td>
                  <td>$SpeedPackage</td>
                  <td><a href='update_client_with_wifi.php?client_name=$ClientName&client_location=$ClientLocation&client_date=$DateOfInstallation&client_install=$InstallationType&client_speed=$$SpeedPackage&wifi_Id=$WifiID' class='btn btn-primary btn-block'>UPDATE</a></td>
                </tr>";
        }

      ?>
    </table>
  </body>
  </html>