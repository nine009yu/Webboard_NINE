<?php
session_start();
$id = $_GET['id'];
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
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
            <?php 
                if(isset($_SESSION['update'])){
                    if($_SESSION['update']=="success"){
                        echo "<div class='alert alert-success'>แก้ไขข้อมูลเรียบร้อยแล้ว</div>";
                    }
                    unset($_SESSION['update']);
                }
                ?>
                <div class="card border-warning">
                    <div class="card-header bg-warning text-white">แก้ไขกระทู้</div>
                    <div class="card-body">
                        <form action="editpost_save.php?id=<?php echo $id ?>" method="post">
                            <div class="row">
                                <label for="cat" class="col-lg-3 col-form-label">หมวดหมู่:</label>
                                <div class="col-lg-9">
                        
                                <select name="category" class="form-select">
                                        <?php 
                                            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                            $sql="SELECT * FROM category";
                                            
                                            foreach($conn->query($sql) as $row){
                                                echo "<option  value=$cat>$row[name]</option>";
                                            }
                                            $conn=null;
                                        ?>
                                    </select>
                                   
                                </div>
                            </div>
                            <?php
                            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                            $sql = "SELECT *  FROM post where id=$id";
                            // -- INNER JOIN category  ON (post.cat_id=category.id) ";
                            $result=$conn->query($sql);                 
                            $result = $conn->query($sql);
                            $row = $result->fetch();
                            echo "<div class='row mt-3'>
                            <label for='title' class='col-lg-3 col-form-label'>หัวข้อ:</label>
                             <div class='col-lg-9'>
                           <input id='title' type='text' name='title'  value='$row[1]' class='form-control' required>
                            </div>
                            </div>
                            <div class='row mt-3'>
                            <label for='content' class='col-lg-3 col-form-label'>เนื้อหา:</label>
                            <div class='col-lg-9'>
                                <textarea name='content' rows='8'  class='form-control' required> $row[2]</textarea>
                            </div>
                            </div>";
                            $conn = null;
                            ?>
                            <div class="row mt-3 ">
                                <div class="col-lg-12 d-flex justify-content-center ">
                                    <button type="submit" class="btn btn-warning btn-sm me-2 text-white">
                                        <i class="bi bi-play-btn"></i> บันทึกข้อความ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-1"></div>
            </div>
        </div>
</body>

</html>