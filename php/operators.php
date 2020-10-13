<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operators</title>
</head>
<body>
<?php
$var1 =21;
$var2 =032;

echo"<h1>arithmetic operator</h1>";
echo"the sum of both the variables is: " ;
echo $var1+$var2;
echo"<br>";
echo"the -of both the variables is: " ;
echo $var1-$var2;
echo"<br>";
echo"the * of both the variables is: " ;
echo $var1*$var2;echo"<br>";

echo"the / of both the variables is: " ;
echo $var1/$var2;echo"<br>";

echo"<h1>Assignment operator</h1>";
$newvar= $var1;
echo $newvar;

echo"<h1>comparsion operator</h1>";
echo"<h3>returns boolean value</h3>";
echo"the value of 1 <= 4 is: ";
echo var_dump(1<=4);
echo"<br>";
echo"the value of 1 == 4 is: ";
echo var_dump(1==4);
echo"<br>";
echo"the value of 1 >= 4 is: ";
echo var_dump(1>=4);
echo"<br>";

echo"<h1>Pre/Post Increament /Decrement</h1>";
$x=100;
echo"varible x = ";
echo $x;
echo"<h3>post increament</h3>";
echo"x++  =";
echo $x++;
echo"<br>";
echo"new value= ";
echo $x;
echo"<h3>post decreament</h3>";
echo"x--  =";
echo $x--;
echo"<br>";
echo"new value= ";
echo $x;

echo"<h1>Logical Operator</h1>";
echo" AND (&&)";
$y=(true) and (true);
echo"<br>";
echo"(true) and (true) :";
echo $y;
$y=(false) and (true);
echo"<br>";
echo"(false) and (true) :";
echo $y;
$y=(true) or (true);
echo"<br>";
echo"(true) or (true) :";
echo $y;


echo $y;

 



?>
    
</body>
</html>