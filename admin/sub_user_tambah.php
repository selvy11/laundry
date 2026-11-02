<?php
    include 'header.php';
?>

<div class="container">
    <br><br><br>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <h4>Tambah Pelanggan Baru</h4>
        </div>
        <div class="panel-body">
            <form method="post" action="pelanggan_aksi.php">
                <div class="form-group">
                    <label>username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
    </div>
</div>