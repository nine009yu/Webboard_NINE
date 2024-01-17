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
    <title>Document</title>
    
    
</head>
<body>
<h1 style="text-align: center;">Webboard KakKak</h1>
    <hr><br>   
    <div style="text-align: center;">
    <?php   
    $Login = $_POST['login']; 
    $Password = $_POST['pwd'];

    if(($Login =="admin")&&($Password=="ad1234")){
        $_SESSION["username"] = "admin";
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        echo "ยินดีต้อนรับ ADMIN";
    } 
    elseif(($Login =="member")&&($Password=="mem1234")){
        $_SESSION["username"] = "member";
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        echo "ยินดีต้อนรับ MEMBER";
    }
    else{
        echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    }
    

    
    ?>
    <br>
    <a href="index.php">กลับไปยังหน้าหลัก</a> 
    </div>
</body>
</html>

