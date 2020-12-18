<?php
session_start();
include('connection.php');
if(isset($_POST['sub'])){
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $query = "select * from admin where Email = '$email' AND 
              Password = '$password'";
    $result = mysqli_query($conn,$query);
    $row    = mysqli_fetch_assoc($result);
    if(isset($row['Admin_ID'])){
        $_SESSION['id'] = $row['Admin_ID']; 
        header("location:manage_admin.php");
    }else{
        $error =  "User Not Found";
    }
    
     
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Login</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
 
  <div id="login-page">
    <div class="container">
      <div class="login-form">
      <?php if(isset($error)){ echo "<div class='alert alert-danger'>$error</div>";} ?>
      <form class="form-login" action=""  method="post">
        <h2 class="form-login-heading">Login Now</h2>
        <div class="login-wrap">
        
          <input type="text" class="form-control"  autofocus name="email">
          <br>
          <input type="password" class="form-control" name="password">
      <br>
          <button class="btn btn-theme btn-block" href="index.html" type="submit" name="sub"><i class="fa fa-lock"></i>  LOGIN</button>
          <hr>
          
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
   <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>
