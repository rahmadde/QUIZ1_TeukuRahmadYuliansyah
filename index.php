<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <form action="proses.php" method="post">
        <div class="card col-6 mt-5 m-auto col-7 row">
            <div class="card-header">
                <h3>Form Dosen</h3>
            </div>
            <div class="card_body">
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">NIDN</label>
                    <input type="text" name="nidn" id="" class="form-control">
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="" class="form-control">
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Rumpun</label>
                    <select name="rumpun" id="" class="form-control">
                        <option value="">Klik Untuk Pilih Rumpun Anda</option>
                        <option value="Komputer">Komputer</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Perpajakan">Perpajakan</option>
                        <option value="Bisnis">Bisnis</option>
                    </select>
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat" id="" class="form-control">
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal" id="" class="form-control">
                </div>
                <div class="mb-2 mt-2">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="mb-2 mt-2">
                   <button type="submit" class="btn btn-primary">Kirim</button>
                   <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>