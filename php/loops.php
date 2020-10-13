<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #div1{
            border: 2px solid rebeccapurple;
            margin:auto;
            width: 80%;
        }
        #div2{
            border: 2px solid red;
            margin:auto;
            margin-top:5px;
            width: 80%;


        }
        #div3{
            border: 2px solid blue;
            margin:auto;
            margin-top:5px;
            width: 80%;

        }
    </style>
</head>
<body>
<div id="div1">
    <h1>While loop</h1>
    <?php
    $a=0;
    while($a<=10){
        echo"the value of a is : ";

        echo $a;
        echo "<br>";
        $a++;
    }

?>
</div>
<div id="div2">
<h1>While loop</h1>

<?php
    $languages=array("c++","python","php","c","js");
    $b = 0;
    while($b < count($languages)){
        echo "language is : ";
        echo $languages[$b];
        echo"<br>";
        $b++;

    }
    ?>
    </div>
    <div id="div3">
    <h1>for loop</h1>

    <?php
    for($c=0;$c<=10;$c++)
    {
        echo"the value of  c is : ";
        echo $c;
        echo"<br>";

    }
    
    ?>
    </div>
  
</body>
</html>