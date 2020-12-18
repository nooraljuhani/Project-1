<?php
include('connection.php');
$id=$_GET['id'];
$query    = "select * from category where category_ID = {$_GET['id']}";
$result  = mysqli_query($conn,$query);
$catSet = mysqli_fetch_assoc($result); 
$img=$catSet['image'];
if(isset($_POST['sub'])){
$Name=$_POST['Full_Name'];
$des=$_POST['Description'];
if(! $_FILES['image']['name'])
{
  $query = "update category set
 Name = '$Name',
Description ='$des'
where category_ID = $id";

$result  = mysqli_query($conn,$query);}
  else{
$img=$_FILES['image']['name'];
$tmp='category.php';
$path="image/";
move_uploaded_file($tmp,$path.$img);
$query = "update category set
 Name = '$Name',
 image       ='$img',
Description ='$des'
where category_ID = $id";
echo $query;
$result  = mysqli_query($conn,$query);
}
if($result){

  header("location:category.php");
}   
}


include('Admin.php'); 
?>
<section id="container">
  <section id="main-content">
  <section class="wrapper">
  <div class="row mt">
   <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Manage Category</h4>
    <div class="form-panel">
    <div class="form">
    <form class="cmxform form-horizontal style-form" enctype="multipart/form-data"  action="" method="post">
      <div class="form-group ">
      <label  class="control-label col-lg-2" >Name</label>
      <div class="col-lg-10">
      <input class=" form-control"  name="Full_Name" type="text" value="<?php echo $catSet['Name'] ?>"/>
      </div>
       </div>
     <div class="form-group ">
    <label  class="control-label col-lg-2" >Description</label>
      <div class="col-lg-10">
      <input class="form-control "  name="Description" type="text" value="<?php echo $catSet['Description'] ?>" />
      </div>
      </div>
     <div class="form-group ">
      <label  class="control-label col-lg-2" >Image</label>
      <div class="col-lg-10">
        <?php
      echo "<img src='image/{$catSet['image']}' width='100' hight='140'/>";
      ?>
     <input class="form-control "  name="image" type="file" />
     </div>
      </div>
   
<div class="form-group">
  <div class="col-lg-offset-2 col-lg-10">
  <button class="btn btn-theme" type="submit" name="sub">Save</button>
  </div>
 </div>
 </form>
 </div>
</div>
</div>
</div>
</section>
</section>