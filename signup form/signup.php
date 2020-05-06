<?php
include_once 'dtb.php';

$first= mysqli_real_escape_string($connec,$_POST['first_name']) ;
$last=mysqli_real_escape_string($connec,$_POST['last_name']) ;
$email=mysqli_real_escape_string($connec,$_POST['email']);
$password=mysqli_real_escape_string($connec,$_POST['password']);


$sql= "INSERT INTO useddata (first_name,last_name,email,password) VALUES('$first','$last','$email','$password');";

 mysqli_query($connec, $sql);

 header("Location:connecting database.php?signup=sucess");