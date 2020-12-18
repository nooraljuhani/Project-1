<?php
include('connection.php');
include('Admin.php');
if(isset($_POST['submit'])){
$Name=$_POST['Full_Name'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$query="insert into admin(Full_name,Email,Password)
values('$Name','$email','$pass')";
mysqli_query($conn,$query);    
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
  <title>Admin</title>

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
  <section id="container">
<section id="main-content">
<section class="wrapper">
 <div class="row mt">
 <div class="col-lg-12">
<h4><i class="fa fa-angle-right"></i> Manage Admin</h4>
<div class="form-panel">
<div class="form">
<form class="cmxform form-horizontal style-form" id="signupForm" action="manage_admin.php" method="post">
<div class="form-group ">
<label for="firstname" class="control-label col-lg-2">Full Name</label>
<div class="col-lg-10">
<input class=" form-control"  name="Full_Name" type="text" />
</div>
</div>
<div class="form-group ">
<label for="password" class="control-label col-lg-2">Password</label>
<div class="col-lg-10">
<input class="form-control " id="password" name="Password" type="password" />
</div>
</div>
 <div class="form-group ">
<label for="email" class="control-label col-lg-2">Email</label>
<div class="col-lg-10">
<input class="form-control " name="Email" type="email" />
</div>
</div>
<div class="form-group">
<div class="col-lg-offset-2 col-lg-10">
<button class="btn btn-theme" type="submit" name="submit">Save</button>
</div>
</div>
 </form>
 </div>
</div>
</div>
</div>
</section>
</section>
<section id="main-content">
      <section class="wrapper">
 <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Admin Table</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Admin ID</th>
                    <th><i class="fa fa-bookmark"></i>full Name</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email</th>
                     <th class="hidden-phone"><i class="fa fa-question-circle"></i> Pasword</th>
        
                  </tr>
                </thead>
                <tbody>
<?php
 $query  = "select * from admin";
  $result = mysqli_query($conn,$query);
 while($row = mysqli_fetch_assoc($result)){
 echo "<tr>";
 echo "<td>{$row['Admin_ID']}</td>";
 echo "<td>{$row['Full_Name']}</td>";
 echo "<td>{$row['Email']}</td>";
 echo "<td>{$row['Password']}</td>";
 echo "<td><a href='edit_admin.php?id={$row['Admin_ID']}' class='btn btn-primary'>Edit</a></td>";
 echo "<td><a href='delete_admin.php?id={$row['Admin_ID']}' class='btn btn-danger'>Delete</a></td>";
echo "</tr>";
}?>
                </tbody>
              </table>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  
  <script src="lib/common-scripts.js"></script>
  
  <script src="lib/form-validation-script.js"></script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>
