<?php 
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>register</title>
</head>
<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
        <?php include "nav.php"?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form action="register_save.php" method="post">
                            <div class="row">
                                <label for="user" class="col-lg-3 col-form-label">ชื่อบัญชี</label>
                                <div class="col-lg-9">
                                    <input id="user" type="text" name="login" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="pass" class="col-lg-3 col-form-label">รหัสผ่าน:</label>
                                <div class="col-lg-9">
                                     <input id="pass" type="password" name="pwd" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="name" class="col-lg-3 col-form-label">ชื่อ-นามสกุล:</label>
                                <div class="col-lg-9">
                                     <input id="name" type="text" name="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">เพศ:</label>
                                <div class="col-lg-9">
                                    <div class="form-check">
                                        <input id="m" type="radio" name="gender" value="m" class="form-check-input" required>
                                        <label for="m" class="form-check-label">ชาย</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="f" type="radio" name="gender" value="f" class="form-check-input" required>
                                        <label for="f" class="form-check-label">หญิง</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="o" type="radio" name="gender" value="o" class="form-check-input" required>
                                        <label for="o" class="form-check-label">อื่นๆ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="email" class="col-lg-3 col-form-label">อีเมล:</label>
                                <div class="col-lg-9">
                                     <input id="email" type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                               <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-sm me-2">
                                    <i class="bi bi-save"></i> สมัครสมาชิก</button>
                                    <button type="reset" class="btn btn-danger btn-sm me-2">
                                    <i class="bi bi-x-square"></i> ยกเลิก</button>
                               </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
    </div>
    <br>
    <!-- <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr><br>
    <form>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr><td colspan="2" style="background-color:#6CD2FE ;">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี :</td><td><input type="text" name="login" size="50" required></td></tr>
        <tr><td>รหัสผ่าน :</td><td><input type="password" name="pwd" size="50" required></td></tr>
        <tr><td>ชื่อ-นามสกุล :</td><td><input type="text" name="login" size="50" required></td></tr>
        <tr><td>เพศ :</td>
            <td>
                <input type="radio" name="gender" value="m">ชาย<br>
                <input type="radio" name="gender" value="f">หญิง<br>
                <input type="radio" name="gender" value="g">อื่นๆ <br>
            </td></tr>
        <tr><td>อีเมล :</td><td><input type="email" name="email" size="50" required></td></tr>   
        <tr><td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก "></td></tr>
    </table> 
</form>
<br>
<div style="text-align: center;"><a href="index.php">กลับไปหน้าหลัก</a></div> -->

</body>
</html>