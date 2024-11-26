<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/triangle_area.css">
    <title>ผลลัพธ์การคำนวณพื้นที่รูปสามเหลี่ยม</title>
</head>
<body>
    <h1>ผลลัพธ์การคำนวณพื้นที่รูปสามเหลี่ยม</h1>
    <?php
        // รับค่าความสูงและความยาวฐานจากฟอร์ม
        $height = $_POST['height'];  // รับค่าความสูง
        $width = $_POST['width'];   // รับค่าความยาวฐาน

        // คำนวณพื้นที่
        $area = 0.5 * $height * $width;
    ?>
    <div class="result-box">
        <h3>ข้อมูลที่ป้อน:</h3>
        <p>ความสูง: <span><?php echo $height; ?></span> หน่วย</p>
        <p>ความยาวฐาน: <span><?php echo $width; ?></span> หน่วย</p>
        <hr>
        <h3>ผลลัพธ์:</h3>
        <p>พื้นที่รูปสามเหลี่ยม: <span><?php echo number_format($area, 2); ?></span> ตารางหน่วย</p>
    </div>
    <footer>
        &copy; <?php echo date("Y"); ?> Code By Mr.TOP
    </footer>
</body>
</html>
