<?php
   if(isset($_GET['client_Id'])){
      $received_name=$_GET['client_name'];
      $received_email=$_GET['client_email'];
      $received_contact=$_GET['client_contact'];
      $received_password=$_GET['client_pwd']; 
      $received_Id=$_GET['client_Id'];
     
   }
 ?>


<!DOCTYPE html
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- connection to CSS -->
    <link rel="stylesheet" href="Assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="Assets/bootstrap/css/signup.css" />
    <!-- Connection to FontAwesomes-->
    <link
      rel="stylesheet"
      href="Assets/fontawesome-free-5.15.4-web/css/all.css"
    />
    <link
      rel="stylesheet"
      href="Assets/fontawesome-free-5.15.4-web/css/fontawesome.min.css"
    />
    <!-- carousel -->
    <link
      rel="stylesheet"
      href="Assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.css"
    />
    <link
      rel="stylesheet"
      href="Assets/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css"
    />
    <!-- connection to javascript -->
    <script src="Assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="Assets/bootstrap/js/popper.min.js"></script>
    <script src="Assets/bootstrap/js/bootstrap.js"></script>
    <title>Home page</title>
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <title>Registration Form</title>
  </head>
  <body>
    <h1>WELCOME TO UPDATE CLIENT DETAILS</h1>
       <div class="form">
          <form action="update_handler.php" method="post">
            <h2>Update Here</h2>
            <input type="text" name="fullName" placeholder="Enter Your Name" required value="<?php echo $received_name; ?>">
            <input type="email" name="Email" placeholder="Enter Your Email" required value="<?php echo $received_email; ?>">
            <input type="phone" name="PhoneNumber" placeholder="Enter Your Phone Number" required value="<?php echo $received_contact; ?>">
            <input type="password" name="Passwd" placeholder="Enter Your Password " required value="<?php echo $received_password; ?>">
            <input type="hidden" name="my_id" required value="<?php echo $received_Id; ?>" >
            <button class="btnn"  type="submit" value="Update" name="btn-update">Update</button>
            <button class="btnn"><a href="client_registered.php">Go back</a></button>
          </form>
       </div>
  </body>
</html>
