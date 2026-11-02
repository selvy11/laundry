<?php 
    include '../koneksi.php';
    $id = (int)$_GET['id'];
    mysqli_query($koneksi, "delete from admin where id='$id'");
    echo "<script type='text/javascript'>alert('Data berhasil dihapus');
     window.location.href='sub_user.php';</script>";
?>
