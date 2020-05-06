<?php
if(isset($_POST['submit'])){
    include_once"dtb1.php";
    
    $first=mysqli_real_escape_string($connec,$_POST['first_name']);
    $last=mysqli_real_escape_string($connec,$_POST['last_name']);
    $Email=mysqli_real_escape_string($connec,$_POST['email']);
    $Password=mysqli_real_escape_string($connec,password_hash($_POST['password'],PASSWORD_DEFAULT));
    //password_verify(mul password veriable, hased passwwd variable)
    




 if(empty($first)|| empty($last)|| empty($Email)|| empty($Password)){
     header("Location:index.php?signup=empty");
     exit();
 }else{
     if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
         header("Location:index.php?signup=char");
         exit();
     }else{
     if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
         header("Location:index.php?signup=invalid_email&first_name=$first&last_name=$last");
         exit();
     }else{
        $sql="INSERT INTO user_details (first_name, last_name, email, password)
        VALUES(?,?,?,?);";
       
        $stmt=mysqli_stmt_init($connec);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo"mysql fail";
        }else{
           mysqli_stmt_bind_param($stmt,"ssss",$first,$last,$Email,$Password);
           mysqli_stmt_execute($stmt);
        }
        header("Location:index.php?signup=success");
        

       
       
        

     }
    }
 }
    }


else{
    header("Location:index.php?signup=failed");
    exit();
}
