<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
<input type="text" placeholder="Number 1" name="num1">
<input type="text" placeholder="Number 2" name="num2">
<select name="Operators" id="">
<option >none</option>
<option >addition</option>
<option>multiple</option>
<option >devide</option>
<option >subtract</option>
</select>
<button type="submit" name="submit" value="submit">Submit</button>

</form>
<p>Answer is:</p>    
<?php 
if(isset($_GET['submit'])){
    $result1=$_GET['num1'];
    $result2=$_GET['num2'];
    $operator=$_GET['Operators'];
    switch($operator){
        case 'none':
            echo'Enter the operator';
        break;
        case 'addition':
            echo $result1+$result2;
        break;
        case 'subtract':
            echo $result1-$result2;
        break;
        case 'multiple':
            echo $result1*$result2;
        break;
        case 'devide':
            echo $result1/$result2;
        break;
    }
}

?>
</body>
</html>