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
    <h1 class="text-muted text-center">Carnby Guest Comment</h1>
    <table class="table table-secondary table-hover">
      <tr>
        <th>GUEST ID</th>
        <th>GUEST NAME</th>
        <th>GUEST EMAIL</th>
        <th>GUEST COMMENT</th>
      </tr>

      <?php
        require 'database_connection.php';

        $select_query= "SELECT * FROM `Guest` where 1";

        $guest = mysqli_query($conn,$select_query);

        while ($row= mysqli_fetch_assoc($guest)) {
          extract($row);
          echo "<tr>
                  <td>$GuestID</td>
                  <td>$Name</td>
                  <td>$Email</td>
                  <td>$Comment</td>
                </tr>";
        }

      ?>
    </table>
  </body>
  </html>