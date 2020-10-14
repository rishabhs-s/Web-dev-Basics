<?php
$username="root";
$server="localhost";
$password="";

$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("connection to database failed".mysqli_connect_error());
    
}
$name = $_POST['name'];
$email=$_POST["email"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$mobile=$_POST["mobile"];

$sql="INSERT INTO `phpreg`.`reg` (`name`, `email`, `age`, `gender`, `mobile`, `date`) VALUES ( '$name', '$email', '$age', '$gender', '$mobile', CURRENT_TIME())";

if($con->query($sql) == true){
    echo "successfully inserted";
}
else{
    echo"Error: $sql<br> $con->error";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="div">
        <h1>Registration Form</h1>
        <h3>Register here</h3>
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Enter your name" id="name">
            <input type="text" name="email" placeholder="Enter your email" id="email">
            <input type="text" name="age" placeholder="Enter your age" id="age">
            <input type="text" name="gender" placeholder="Enter your gender" id="gender">
            <input type="text" name="mobile" placeholder="Enter your mobile" id="mobile">
            <button id="sub">Submit</button>



        </form>

    </div>
    
    <script src="index.js"></script>
</body>
</html>