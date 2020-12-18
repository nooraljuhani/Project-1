<?php
session_start();
if(!$_SESSION['id']) {
  header("location:login.php");
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
  <title>ADMIN</title>

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

  


    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="" class="logo"><b>Admain<span>Page</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        
    </header>

<body>
  <section id="container">
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="manage_admin.php">
              <i class="fa fa-dashboard"></i>
              <span>Manage Admin</span>
              </a>
          </li>
          <li class="sub-menu">
           <a href="category.php">
              <i class="fa fa-desktop"></i>
              <span>Manage Category</span>
              </a>
          </li>
          <li class="sub-menu">
             <a href="prodect.php">
              <i class="fa fa-cogs"></i>
              <span>Manage Prodect</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="customer.php">
              <i class="fa fa-book"></i>
              <span>Manage Customer</span>
              </a>
           
          </li>

        
          <li><a class="logout" href="logout.php"><span >Logout</span></a></li>
    
      </div>
      </div>
    </aside>
   
</body>

</html>