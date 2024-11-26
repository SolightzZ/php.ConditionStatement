<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/triangle_area_form.css">
    <title>คำนวณพื้นที่รูปสามเหลี่ยม</title>
</head>
<body>
    <h1>คำนวณพื้นที่รูปสามเหลี่ยม</h1>
    <p>กรุณากรอกข้อมูลความสูงและความยาวฐานของรูปสามเหลี่ยม</p>
    <form action="triangle_area.php" method="post">
        <label for="height">ความสูง (หน่วย): </label>
        <input type="text" name="height" id="height" placeholder="กรุณากรอกความสูง" required> <br>

        <label for="width">ความยาวฐาน (หน่วย): </label>
        <input type="text" name="width" id="width" placeholder="กรุณากรอกความยาวฐาน" required> <br>

        <input type="submit" value="คำนวณ">  
        <input type="reset" value="ล้างข้อมูล">
    </form>
</body>
</html>
