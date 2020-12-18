<?php
include('connection.php');
include('Admin.php');
if(isset($_POST['sub'])){
$Name=$_POST['Name'];
$des=$_POST['Description'];
$img=$_FILES['image']['name'];
$tmp='category.php';
$path="image/";
move_uploaded_file($tmp, $path.$img);
$query="insert into category(Name,Description,image)
values('$Name','$des','$img')";
mysqli_query($conn,$query);    
}
?>
<!DOCTYPE html>
<html lang="en">
<section id="main-content">
      <section class="wrapper">
        
           
        
        <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Manage Category</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form"  enctype="multipart/form-data" action="category.php" method="post">
                  <div class="form-group ">
                    <label  class="control-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control"  name="Name" type="text" />
                    </div>
                  </div>
                
                 
             
                  <div class="form-group ">
                    <label  class="control-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                      <input class="form-control "  name="Description" type="text" />
                    </div>
                  </div>
                  
                  
                   <div class="form-group ">
   <label  class="control-label col-lg-2" >Image</label>
   <div class="col-lg-10">
     <input class="form-control "  name="image" type="file" />
     </div></div>
                   
            
             
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
  <section id="main-content">
      <section class="wrapper">
 <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Category Table</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Category ID</th>
                    <th><i class="fa fa-bookmark"></i> Name</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Image</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                    
                  </tr>
                </thead>
                <tbody>
<?php
 $query  = "select * from category";
  $result = mysqli_query($conn,$query);
 while($row = mysqli_fetch_assoc($result)){
 echo "<tr>";
 echo "<td>{$row['category_ID']}</td>";
 echo "<td>{$row['Name']}</td>";
 echo "<td><img src='image/{$row['image']}' width='100' hight='140'/></td>";
 echo "<td>{$row['Description']}</td>";
 echo "<td><a href='edit_category.php?id={$row['category_ID']}' class='btn btn-primary'>Edit</a></td>";
 echo "<td><a href='delete_category.php?id={$row['category_ID']}' class='btn btn-danger'>Delete</a></td>";
echo "</tr>";
}?>
                  
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</html>