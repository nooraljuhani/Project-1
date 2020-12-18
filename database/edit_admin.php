<?php
include('connection.php');

if(isset($_POST['submit'])){
$Name=$_POST['Full_Name'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$query = "update admin set
Email   = '$email',
Password = '$pass',
Full_Name = '$Name'
where Admin_ID = {$_GET['id']}";
$r=mysqli_query($conn,$query);  
if($r){

  header("location:manage_admin.php");
}
}
$query    = "select * from admin where Admin_ID = {$_GET['id']}";
$result   = mysqli_query($conn,$query);
$adminSet = mysqli_fetch_assoc($result); 
include('Admin.php');
?>
<section id="container">
  <section id="main-content">
  <section class="wrapper">
  <div class="row mt">
   <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Manage Admin</h4>
    <div class="form-panel">
    <div class="form">
    <form class="cmxform form-horizontal style-form"   action="" method="post">
      <div class="form-group ">
      <label  class="control-label col-lg-2" >Full Name</label>
      <div class="col-lg-10">
      <input class=" form-control"  name="Full_Name" type="text" value="<?php echo $adminSet['Full_Name'] ?>"/>
      </div>
       </div>
     <div class="form-group ">
    <label  class="control-label col-lg-2" >Password</label>
      <div class="col-lg-10">
      <input class="form-control "  name="Password" type="password" value="<?php echo $adminSet['Password'] ?>" />
      </div>
      </div>
     <div class="form-group ">
      <label  class="control-label col-lg-2" >Email</label>
      <div class="col-lg-10">
      <input class="form-control " name="Email" type="email" value="<?php echo $adminSet['Email'] ?>" />
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