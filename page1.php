<!DOCTYPE html>
<html>

<body>

    <h1>รับข้อมูลและแสดงผล</h1>
    <form action="show.php" method="get" style="margin-left: 80px;">
        ชื่อ:<input type="text" name="name"><br>
        การุณาระบุเพศ:
        <select name="gender">
            <option value="male">หญิง</option>
            <option value="female">ชาย</option>
        </select><br>
        การุณาใส่อายุ:
        <input type="number" name="num" style="width: 40px;"><br>
        สถานะ:
        <select name="status">
            <option value="single">โสด</option>
            <option value="marry">แต่งงานแล้ว</option>
        </select><br>
        <input type="submit" value="ส่ง">
    </form>
</body>
