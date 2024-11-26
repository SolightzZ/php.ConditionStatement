<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>ทดสอบ ส่งค่าโดยใช้ Method GET</title>
</head>
<body>
    <h2>ทดสอบ ส่งค่าโดยใช้ Method GET (ผ่าน URL)</h2>
    <?php
       echo "ศึกษาเรื่อง :" . $_GET['subject'] . "ได้ที่ " . $_GET['web'];
    ?>
</body>
</html>