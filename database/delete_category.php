<?php 
include('connection.php');

$query = "delete from category where category_ID = {$_GET['id']}";

mysqli_query($conn,$query);

header("location:category.php");