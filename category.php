<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Webboard nine</title>
</head>

<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">Webboard KakKak</h1>
        <?php include"nav.php"?>
        <div class="d-flex justify-content-center mt-3">
        <table class="table table-striped w-50   ">
            <tbody class="text-center">
                <tr><td class="w-10">ลำดับ</td><td class="">ชื่อหมวดหมู่</td><td>จัดการ</td></tr>
                <tr><td>ลำดับ</td><td>ชื่อหมวดหมู่</td><td>จัดการ</td></tr>
            </tbody>
        </table>
        </div>
    </div>

</body>

</html>