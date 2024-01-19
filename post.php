<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1 style="text-align:center ;">Webboard KakKak</h1>
    <hr>
    
    <div style="text-align:center;" >ต้องการดูกระทู้หมายเลข<?php $id=$_GET ['id']; echo $id ."<BR>";?>
</div>
    <?php
        if ($id=$_GET ['id'] / 2 == 0) {
            echo"<center>เป็นกระทู้หมายเลขคู่ <br>";
        }
        else{
            echo"<center>เป็นกระทู้หมายเลขคี่ <br>";
        }

    ?>
    <br>
    <form >
    <table style="border: 2px solid black; width: 25%" align="center">
        <tr><td align="left" bgcolor="#6CD2FE">แสดงความคิดเห็น</td></tr>
        <td align="center"><textarea name="message" id="" cols="60" rows="10" ></textarea></td>
        <tr><td colspan="2" align="center"><input type="submit"value="ส่งข้อความ"></td></tr>
    </table>
    <br>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
</form>
</body>
</html>