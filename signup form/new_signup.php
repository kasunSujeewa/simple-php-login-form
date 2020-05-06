<?php
if(isset($_POST['submit'])){
    $first_name=$_POST['$first_name'];
    $last_name=$_POST['$last_name'];
    $email=$_POST['$email'];
    $password=$_POST['$password'];
    if(empty($first_name)||empty($last_name)||empty($email)||empty($password)){
        header("Location:loginform.php?signup=empty");
    }else{
        
    }
    
}else{
    header("Location:loginform.php?signup=failed");
}
?>