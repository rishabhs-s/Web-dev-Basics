<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str="rishabh";
    $len=strlen($str);
    echo"the length of string is ". $len;
    echo"<br>";
    $cnt=str_word_count($str);
    echo " word count".$cnt;

    
    
    ?>
</body>
</html>