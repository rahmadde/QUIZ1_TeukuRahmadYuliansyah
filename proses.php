<?php
    include("koneksi.php");

    $nidn       = $_POST['nidn'];
    $nama       = $_POST['nama'];
    $rumpun     = $_POST['rumpun'];
    $tempat     = $_POST['tempat'];
    $tanggal    = $_POST['tanggal'];
    $email      = $_POST['email'];

    $simpan = "INSERT INTO dosen(nidn, nama_lengkap, rumpun, tempat_lahir, tanggal_lahir, email) VALUES ('$nidn','$nama','$rumpun','$tempat','$tanggal','$email')";

    mysqli_query($koneksi, $simpan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="card col-6 mt-5 m-auto col-7 row">
            <div class="card-header">
                <h3>Form Dosen</h3>
            </div>
            <div class="card_body mt-2 mb-2">
                <table class="table">
                    <tr>
                        <th scope="row">NIDN</th>
                        <td>:</td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Lengkap</th>
                        <td>:</td>
                    </tr>
                    <tr>
                        <th scope="row">Rumpun</th>
                        <td>:</td>
                    </tr>
                    <tr>
                        <th scope="row">Tempat Lahir</th>
                        <td>:</td>
                    </tr>
                    <tr>
                        <th scope="row">Tanggal Lahir</th>
                        <td>:</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>  
                        <td>:</td>
                    </tr>
                </table>
                <a href="index.php" class="btn btn-warning">Kembali</a>
            </div>
        </div>
</body>
</html>