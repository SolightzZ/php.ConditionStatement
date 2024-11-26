<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <h1> โปรเจคกรอกชื่อของทำงาน </h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> 
        โปรดเลือกชื่อ : <input type="text" name="fname"> <input type="submit" value="Submit">
     </form>

     <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = htmlspecialchars($_POST['fname']);
        if (empty($name)) {
            echo "if ชื่อเป็นที่ว่าง";
        } else {
            echo 'else ยินดีต้อนรับคุณ ' . $name;
        }
    }
    ?>
</body>
</html>