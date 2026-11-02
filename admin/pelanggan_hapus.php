<?php 
    include '../koneksi.php';
    $id = (int)$_GET['id'];
    mysqli_query($koneksi, "delete from pelanggan where pelanggan_id='$id'");
    echo "<script type='text/javascript'>alert('Data berhasil dihapus');
     window.location.href='pelanggan.php';</script>";
?>
