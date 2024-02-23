ff<?php
session_start();
if (isset($_SESSION['id'])) {
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
    <div class="container-lg">
    <h1 style="text-align:center ;">Webboard KakKak</h1>

    <?php 
    include"nav.php"
    ?>

    <div class="row mt-4">
        <div class="col-lg-4 col-md3 col-sm-8 coi-1"></div>
        <div class="col-lg-4 col-md3 col-sm-8 coi-10"></div>
        <?php
        if(isset($_SESSION['error'])){
            echo"<div class='alert-danger'</div>>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>";
            unset($_SESSION['error']);
        }
        ?>
        <div class="card">
            <div class="card-header">เข้าสู่ระบบ</div>
            <div class="card-body"></div>
            <form action="verif.php" methood="post>
            <div class="form-group>
                <label for="user" class="form-label">Login</label>
                <input type="text" id=user class="form-control"name="login"required></div>
                <div class="fore-group st-2">
                <label for="user" class="form-label">Password</label>
                <input type="text" id=user class="form-control"name="Password"required>
                </div>
                <div class="mt-3 justify-content-center d-flex">
                <button typs="submit"class="btn btn-secondary btn-sm me-2">Login</button>
                <button typs="reset"reset="btn btn-danger btn-sm"></button>
    </div>
            </form>
            </div>
    </div>
    <center>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center>
    </div>
    </div>
        <div class="col-lg-4 col-md3 col-sm-8 coi-1"></div>
    </div>
    <form action="verify.php" method="post">
    <table style="border: 2px solid black; width: 40%" align="center">
        <tr><td colspan="2" style="background-color: #6cd2fe;">เข้าสู่ระบบ</td></tr>
        <tr><td>Login</td><td><input type="text" name="name" size ="40" required></td></tr>
        <tr><td>Password</td><td><input type="password" name="password" size ="40" required></td></tr>
        <tr><td colspan="2" align="center"><input type="submit"value="login"></td></tr>
    </table>
    <br>
    <center>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center>

</form>
</div>
</body>

</html>
