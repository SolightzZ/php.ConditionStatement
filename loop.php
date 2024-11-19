<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> การใช้คำสั่งแบบว loop Stringable </h1>
    <?php
        echo "<h2> Whli loop </h2>";
        echo "<br>";

        $x = 1;
        while ($x <= 5) {
            echo "วนรอบที่ : $x <br>";
            $x++;
        }
        echo "<br>";
        $l = 1;
        while ($l <= 80 )   {echo "-"; $l++;}
        echo "<br>";
    ?>
</body>
</html>