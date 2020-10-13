<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statements</title>
    <style>
        .div{
            width: 80%;
            background-color: rgb(189, 45, 86);
            margin: auto;
            padding:25px ;

        }
    </style>
</head>
<body>
<div class="div">
    <h1>Conditional Statements</h1>
<?php
$age=3;
if($age>18){
    echo "age is more than 18";
}
else{
    echo "age less than 18";
}


?>
</div>


    
</body>
</html>