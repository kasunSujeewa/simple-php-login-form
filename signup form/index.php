<?php
 include_once"dtb1.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$sql= "SELECT * FROM user_details;";
$result= mysqli_query($connec,$sql);
?>


<form action="sign_up.php" method="POST">
<h1>Sign up</h1>
<?php
if(isset($_GET['first_name'])){
    $first=$_GET['first_name'];
    echo '<input type="text" name="first_name" placeholder="First name" value="'.$first.'">';
}else{
  echo  '<input type="text" name="first_name" placeholder="First name">';
   
}


?>
<?php
if(isset($_GET['last_name'])){
    $last=$_GET['last_name'];
    echo '<input type="text" name="last_name"  value="'.$last.'">';
}else{
    echo '<input type="text" name="last_name" placeholder="last name">';
   
}


?>



<input type="text" name="email" placeholder="Email" >

<input type="password" name="password" placeholder="Password"><br>
<button type="submit" name="submit">Sign up</button><br>
<?php
/*$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullUrl,"signup=empty")==TRUE){
   echo "<p>Form is not completed</p>";
}
elseif(strpos($fullUrl,"signup=char")==TRUE){
    echo "<p>Names are not valid</p>";
 }
 elseif(strpos($fullUrl,"signup=invalid_email")==TRUE){
    echo "<p>Email is not valid</p>";
 }else{
     echo"<h3>Sign up sucess full</h3>";
 }*/
 if(isset($_GET['signup'])){
     switch($_GET['signup']){
         case "empty":
            echo "<p>Form is not completed</p>";
         break;
         case "char":
            echo "<p>Names are not valid</p>";
         break;

         case "invalid_email":
            echo"<p>Email is not valid</p>";
         break;
         case "success":
            echo"<h3>Sign up sucess full</h3>";
         break;


            
     }
 }

 
 

?>
</form>





    
</body>
</html>