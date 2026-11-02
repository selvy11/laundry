<?php
    include '../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_md5 = md5($password);


    mysqli_query($koneksi,"insert into pelanggan values('','$username','$password_md5')");

    echo "<script type='text/javascript'>alert('Data berhasil ditambah'); window.location.href='pelanggan.php';</script>";
?>