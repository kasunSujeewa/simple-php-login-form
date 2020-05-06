<?php 
include_once 'dtb.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$data="kasun";
 $sql="SELECT * FROM useddata WHERE first_name=?;";
 $stmt= mysqli_stmt_init($connec);
 if(!mysqli_stmt_prepare($stmt,$sql)){
     echo"sql failed";
 }else{
     mysqli_stmt_bind_param($stmt,"s",$data);
     mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);

    while($row= mysqli_fetch_assoc($result)){
        echo $row['ID']."<br>";
        echo $row['password']."<br>";
    }
    
    }


   




?>

    
</body>
</html>