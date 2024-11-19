<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> การใช้คำสั่งแบบ loop Stringable </h1>
    <?php
        echo "<h2> Whli loop </h2>";
        echo "<br>";

        $x = 1;
        $y = 1;

        while ($x <= 5) {
            //if ( $x == 3) break ; 
            echo " Whli วนรอบที่ : $x <br>";
            $x++;

        }
        echo "<br>";
        $i = 1;
        while ($i <= 80 )   {echo "-"; $i++;}
        echo "<br>";

        echo "<h2> Do Whli loop </h2>";
        echo "<br>";
        do {
            echo " Do Whli วนรอบที่ : $y <br>";
            $y++;
            //if ($y <= 5) break; 
        } while ($y <= 5);
        echo "<br>";
        $i = 1;
        while ($i <= 80 )   {echo "-"; $i++;}
        echo "<br>";

        echo "<h2> For loop </h2>";
        echo "<br>";
        for ($i=1; $i<=10; $i++) {
            echo "For รอบที่ $i <br>";
        }
        echo "<br>";
        $i = 1;
        while ($i <= 80 )   {echo "-"; $i++;}
        echo "<br>";


        echo "<h2> * For ซ่อนกัน</h2>";
        echo "<br>";
        for ($i=1; $i<=5; $i++) {
            for ($j= 1; $j<=$i; $j++) {
                echo "*";
            }
            echo "<br>";
        } 
        echo "<br>";
        $i = 1;
        while ($i <= 80 )   {echo "-"; $i++;}
        echo "<br>";


        echo "<h2> Foreach Loop ปกติ</h2>";
        echo "<br>";
        $pet = array ("แมว", "สุนัก", "นกแก้ว", "ปลาทอง", "หมูเด้ง");
        foreach ($pet as $value) {
            echo " ฉันชอบ ". $value . "<br>";
        }
        echo "<br>";
        $i = 1;
        while ($i <= 80 )   {echo "-"; $i++;}
        echo "<br>";

        echo "<h2> Foreach Loop แบบ Key = value</h2>";
        echo "<br>";
        $food = array("หมวย"=> "ส้มตำ", "บูม"=>"หมูย่าง", "บีม"=>"ผัดกระเผา", "อาร์ต"=>"ข้าวมันไก่");
        foreach ($food as $studentid => $value) {
            echo " ชื่อฉัน $studentid  | ชอบกิน $value <br>";
        }
        echo "<br>";
        $i = 1;
        while ($i <= 80 )   {echo "-"; $i++;}
        echo "<br>";
    ?>
</body>
</html>