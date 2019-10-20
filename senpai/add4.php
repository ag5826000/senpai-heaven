<?php
ob_start();
session_start();
include('connection.php');
if($_POST['clubs']=="1")
header('Location: perprofile.php');
$sql="SELECT * FROM users WHERE email='".$_SESSION['em']."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$user=$row['id'];
$sql="INSERT INTO additives(type,sub,userid) VALUES('Clubs','".$_POST['clubs']."','$user');";
mysqli_query($conn,$sql);
header('Location: perprofile.php');
?>