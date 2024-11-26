<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 75;
    echo " x ==> " .$x;
    echo "<br>";


    function myfunction(){
        global $x;
        echo "อ่านจาก function คำของ x ==> " .$x;
    }


    myfunction();
    echo "<br>";
    echo "คำของ x ==> " .$x;

    echo "<br>";
    echo "<h2> การใช้ข้อมูลจาก Server ด้วย \$_SERVER </h2>";
    echo "<br>";

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<hr>";
    
    
    
    ?>
</body>
</html>