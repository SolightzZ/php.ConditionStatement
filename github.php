<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> การใช้คำสั่งแบบ ( กลุ่มคำสั่ง if )</h1>
    <?php
        echo "<h2> คำสั่ง if </h2> <br> <br>";
        $x = 5;
        $y = 8;
        echo "\$x = $x <br>";
        echo "\$y = $y <br>";
        if ($x<$y) {
            echo "ค่าในตัวแปร x น้อยกว่าค่าในตัวแปร y <br>";
        } else { 
            echo "ค่าในตัวแปร y น้อยกว่าค่าในตัวแปร y <by>";
        }

        echo "--------------------------------------";

        echo "<br>";
        echo "<br> <h2> Short hand</h2>";
        $score = 55;
        if ($score >= 50) echo "ขอแสดงความยินดีคุณสอบผ่าน";
        echo "<br>";
        $reult = $score >= 50 ? "ได้เกรด P" : "ได้เกรด F";
        echo "<br>";
        echo "ผลการเรียนคุณ" . $reult;
        echo "<br>";
        echo "----------------------------------------";
        echo "<br>";
        echo "<h2> คำสั่ง switch case </h2>";
        echo "<br>";
        echo "Cat";
        $pet = 'Cat';
        switch ($pet) {
            case 'Cat':
                echo '  คุณชอบนอนเหมือนแมว';
                break;
            case 'Dog':
                echo '  คุณทำตัวเหมือนสุนัก';
                break;
            case 'Bird':
                 echo ' คุณพูดมากเหมือนนก';
                break;
            default:
                echo '  คุณเป็นมนุษย์ ';
                break;
        }

        echo '<br>';
        echo "----------------------------------------";
        echo "<br>";
        

    ?>
</body>
</html>