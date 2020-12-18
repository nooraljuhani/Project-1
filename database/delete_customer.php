<?php 
include('connection.php');

$query = "delete from customer where customer_ID = {$_GET['id']}";

mysqli_query($conn,$query);

header("location:customer.php");