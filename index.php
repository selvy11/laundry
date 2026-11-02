<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Laundry</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
</head>
<body style="background : #f0f0f0">
    <br><br><br><br>
    <center>
        <h2>SISTEM INFORMASI LAUNDRY<br></h2>
    </center>
    <br><br>
    <div class="container"> 
        <div class="col-md-4 col-md-offset-4"> 
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                        echo "<div class='alert alert-danger'> Login Gagal! Username atau Password salah!</div>";
                    }
                    elseif($_GET['pesan'] == "logout"){
                        echo "<div class='alert alert-info'> Anda telah berhasil logout</div>";
                    }
                    else if($_GET['pesan'] == "belum_login"){
                        echo "<div class='alert alert-danger'> Anda harus login untuk mengakses halaman admin</div>";
                    }
                }           
            ?>
            <form action="login.php" method="post">
                <div class="panel">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Log in">
                    </div>
                </div>
            </form>
            
        </div> 
    </div>

</body>
</html>