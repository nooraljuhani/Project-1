<?php
include('connection.php');
$id=$_GET['id'];
$query    = "select * from product where product_ID = {$_GET['id']}";
$result  = mysqli_query($conn,$query);
$productSet = mysqli_fetch_assoc($result); 
$img=$productSet['image'];
if(isset($_POST['sub'])){
$Name=$_POST['name'];
$des=$_POST['Description'];
$qua=$_POST['quantity'];
$pri=$_POST['price'];

if(! $_FILES['image']['name'])
{
$query= "update product set
proname     = '$Name',
Description = '$des',
quantity    ='$qua',
Price       ='$pri'
where product_ID =$id";
$result  = mysqli_query($conn,$query);
}
else{
 $img=$_FILES['image']['name'];
 $tmp='product.php';
$path="image/";
move_uploaded_file($tmp,$path.$img);
$query= "update product set
proname     = '$Name',
Description = '$des',
quantity    ='$qua',
Price       ='$pri',
image       ='$img'
where product_ID = $id";
echo $query;
$result  = mysqli_query($conn,$query);
}
if($result)
{header("location:prodect.php");}
}

include('Admin.php');
?>
 <section id="container">
  <section id="main-content">
  <section class="wrapper">
  <div class="row mt">
   <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Manage Prodect</h4>
    <div class="form-panel">
    <div class="form">
    <form class="cmxform form-horizontal style-form" enctype="multipart/form-data"  action="" method="post">
      <div class="form-group ">
      <label  class="control-label col-lg-2" >Name</label>
      <div class="col-lg-10">
      <input class=" form-control"  name="name" type="text"  value="<?php echo $productSet['proname'] ?>"/>
      </div>
       </div>
       
     <div class="form-group ">
    <label  class="control-label col-lg-2" >Description</label>
      <div class="col-lg-10">
      <input class="form-control "  name="Description" type="text" value="<?php echo $productSet['Description'] ?>"/>
      </div>
      </div>
    
                   
       <div class="form-group ">
                    <label class="control-label col-lg-2" > quantity 
        </label>
                    <div class="col-lg-10">
                      <input class="form-control " name="quantity" type="text" value="<?php echo $productSet['quantity'] ?>"/>
                    </div>
                  </div>
            
             <div class="form-group ">
                    <label class="control-label col-lg-2" > Price 
        </label>
                    <div class="col-lg-10">
                      <input class="form-control " name="price" type="text" value="<?php echo $productSet['Price'] ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
      <label  class="control-label col-lg-2" >Image</label>
      <div class="col-lg-10">
        <?php
      echo "<img src='image/{$productSet['image']}' width='100' hight='140'/>";
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
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>