<?php
$con=mysqli_connect('localhost','root','','teacher');
session_start();
$id=$_GET['id'];
$sql="update tmetble set status='2' where id='$id'";
mysqli_query($con,$sql);
header('location:tlogin.php');
?>