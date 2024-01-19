<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:index.php");
    die();
}
?>
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
    
</div>
    <br>
    <form >
    <table style="width: 30%" align="left">
        <tr> <td>ผู้ใช้ :   </td><td><?php echo $_SESSION['name']
        
        ?> </td></tr>
        <tr> <td>หมวดหมู่ :   </td><td><select name="category" >
        <option value="all">--ทั้งหมด--</option>
        <option value="general">เรื่องทั่วไป</option>
        <option value="study">เรื่องเรียน</option></select></td></tr>
        <tr> <td>หัวข้อ :</td><td><input type="text" name="" size ="25" required></td></tr>
        <tr> <td>เนื้อหา :</td><td><textarea name="message" id="" cols="30" rows="3" ></textarea></td></tr>
        <tr><td>   </td><td colspan="2" align=""><input type="submit"value="บันทึกข้อความ"></td></tr>
    </table>
  
   
</form>
</body>
</html>