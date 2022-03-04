<?php
   if(isset($_GET['wifi_Id'])){
      $received_name=$_GET['client_name'];
      $received_location=$_GET['client_location'];
      $received_date=$_GET['client_date'];
      $received_install=$_GET['client_install'];
      $received_speed=$_GET['client_speed'];
      $received_Id=$_GET['wifi_Id']; 
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- connection to CSS -->
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/bootstrap/css/wifi.css"> 
    <!-- Connection to FontAwesomes-->
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <!-- carousel -->
    <link rel="stylesheet" href="Assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="Assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
    <!-- connection to javascript -->
    <script src="Assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assets/bootstrap/js/popper.min.js"></script>
    <script src="Assets/bootstrap/js/bootstrap.js"></script>  
    <title>Wifi Installation</title>
</head>
<body>
  <h1>WELCOME TO CARNBY DATA WIFI INSTALLATION FORM</h1>
  <div class="form">
      <form action="wifi_update_handler.php" method="post">
          <h2>Update Wifi Here</h2>
              <input type="text" name="ClientName" placeholder="Enter Your Name" required value="<?php echo $received_name;?>">
              <input type="text" name="Location" placeholder="Enter Your Location" required value="<?php echo  $received_location; ?>">
              <input type="date" name="DOI" placeholder="Enter Installation Date" required value="<?php echo $received_date; ?>">
              <select id="Installation" name="Installation" value="<?php echo $received_install; ?>">
                <option value="">Select Installation Type</option>
                <option value="Full board Installation">Full board Installation</option>
                <option value="Half board Installation">Half board Installation</option>
                <option value="Quarter board Installation">Quarter board Installation</option>
              </select>
              <select id="Speed" name="speed" value="<?php echo $$received_speed; ?>">
                <option value="">Select Internet Speed</option>
                <option value="3Mb/s">3Mb/s</option>
                <option value="5Mb/s">5Mb/s</option>
                <option value="10Mb/s">10Mb/s</option>
              </select>
              <button class="btnn"  type="update" value="Update" name="btn-install">Update</button>
          </form>
  </div>
</div>
</body>
</html>
