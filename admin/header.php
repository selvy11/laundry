<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("location:../index.php?pesan=belum_login");
    exit;
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'admin';
if (!isset($halaman_aktif)) {
    $halaman_aktif = 'dashboard';
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Malas Ngoding</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .navbar-custom {
            background-color: #343a40;
            width: 100%;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;
            position: relative;
            z-index: 1000;
        }

        .navbar-brand {
            color: #ffffff;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-menu > li > a {
            display: block;
            color: #b0b0b0;
            text-decoration: none;
            padding: 15px 20px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .nav-menu > li > a:hover {
            color: #ffffff;
            background-color: #000000;
        }

        .nav-menu > li > a i {
            margin-right: 8px;
        }

        .navbar-right {
            display: flex;
            align-items: center;
            gap: 20px;
            color: #ffffff;
        }

        .navbar-right a {
            color: #b0b0b0;
            text-decoration: none;
        }

        .navbar-right a:hover {
            color: #ffffff;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f0eeee;
            min-width: 220px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.4);
            z-index: 1001;
            top: 100%;
            left: 0;
        }

        .dropdown-content a {
            color: #000000;
            padding: 14px 20px;
            text-decoration: none;
            display: block;
            font-size: 15px;
            transition: all 0.3s;
        }

        .dropdown-content a i {
            margin-right: 10px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

    </style>
</head>
<body>

    <nav class="navbar-custom">
        <a class="navbar-brand" href="index.php">LAUNDRY Malas Ngoding</a>

        <ul class="nav-menu">
            <li>
                <a href="index.php" class="<?= ($halaman_aktif == 'dashboard') ? 'active' : ''; ?>">
                    <i class="bi bi-house-door-fill"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="pelanggan.php" class="<?= ($halaman_aktif == 'pelanggan') ? 'active' : ''; ?>">
                    <i class="bi bi-person-fill"></i> Pelanggan
                </a>
            </li>
            <li>
                <a href="transaksi.php" class="<?= ($halaman_aktif == 'transaksi') ? 'active' : ''; ?>">
                    <i class="bi bi-arrow-left-right"></i> Transaksi
                </a>
            </li>
            <li>
                <a href="laporan.php" class="<?= ($halaman_aktif == 'laporan') ? 'active' : ''; ?>">
                    <i class="bi bi-file-earmark-text"></i> Laporan
                </a>
            </li>
            
            <li class="dropdown">
                <a href="#" class="<?= ($halaman_aktif == 'pengaturan') ? 'active' : ''; ?>">
                    <i class="bi bi-wrench"></i> Pengaturan <i class="bi bi-caret-down-fill" style="font-size: 10px;"></i>
                </a>
                <div class="dropdown-content">
                    <a href="pengaturan_harga.php">
                        <i class="bi bi-cash-coin"></i> Pengaturan Harga
                    </a>
                    <a href="ganti_password.php">
                        <i class="bi bi-key-fill"></i> Ganti Password
                    </a>
                     <a href="sub_user.php">
                        <i class="bi bi-person-fill"></i> Sub_User
                    </a>
                </div>
            </li>

            <li>
                <a href="../index.php"><i class="bi bi-box-arrow-right"></i> Log Out</a>
            </li>
        </ul>

        <div class="navbar-right">
            <span>Halo, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
        </div>
    </nav>