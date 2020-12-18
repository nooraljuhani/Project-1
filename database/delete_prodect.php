<?php 
include('connection.php');

$query = "delete from product where product_ID = {$_GET['id']}";

mysqli_query($conn,$query);

header("location:prodect.php");