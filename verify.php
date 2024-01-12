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
    <?php
    $n = $_POST['name'];
    $p = $_POST['password'];

    if ($n =="admin" && $p =="ad1234") {
        echo "<center>ยินดีต้อนรับ คุณADMIN <Br>";
    }
    if ($_POST['name'] == "member" && $_POST['password'] == "mem1234") {
        echo "<center>ยินดีต้อนรับ คุณMEMBER <BR>";
    }
    else{
        echo"<center>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <BR>";
    }
    echo"<a href=login.html>กลับไปหน้าหลัก</a>";
    ?>
    
</div>
    <br>
    
</body>
</html>


