<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <title>Array 2D</title>
    <h1>Array 2D</h1>
    <?php
    $foods = array(
        array("คำไทย ",22,18),
        array("คำลาว ",15,13),
        array("คำน่า  ",5,2),
        array("คำนำ  ",17,15)
    );
    echo "<h2>ปริมาณการสั่งซื้อสินค้า</h2>";
    for ($i=0; $i < 4; $i++) { 
        echo $foods[$i][0]."จำนวนที่รอปรุง : ".$foods[$i][1]."จำนวนที่เสร็จแล้ว ".$foods[$i][2];
        echo "<br>";

    }echo "<hr>";

    echo "<h2>ปริมาณการสั่งซื้อสินค้า</h2>";
    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j < 3; $j++) { 
            echo $foods[$i][$j]."  ";
        }
        echo "<br>";
    }

    ?>


</body>
</html>