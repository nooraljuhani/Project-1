<?php 
include('connection.php');

$query = "delete from admin where Admin_ID = {$_GET['id']}";

mysqli_query($conn,$query);

header("location:manage_admin.php");