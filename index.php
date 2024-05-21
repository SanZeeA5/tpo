<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    <div class="container">
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<script>alert('Pendaftaran siswa baru berhasil!')</script>";
            } else {
                echo "<script>alert('Pendaftaran gagal!')</script>";
            }
        ?>
    </p>
<?php endif; ?>
        <h1>
            <center>Buku Tamu</center>
        </h1>
        <div>
            <div class="form">
                <form action="proses-tambah.php" method="post">
                    <p>
                        <label for="nama">Nama: </label>
                        <input type="text" name="nama" placeholder="Nama Lengkap" required>
                    </p>
                    <p>
                        <label for="nomor_telp">No Telepon: </label>
                        <input type="text" name="nomor_telp" placeholder="Nomor Telepon" required>
                    </p>
                    <p>
                        <label for="asal">Alamat: </label>
                        <input type="text" name="asal" placeholder="Alamat" required>
                    </p>
                    <p>
                        <label for="pekerjaan">Pekerjaan: </label>
                        <input type="text" name="pekerjaan" placeholder=" Pekerjaan" required>
                    </p>
                    <p>
                        <label for="keperluan">Keperluan: </label>
                        <input type="text" name="keperluan" placeholder="keperluan" required>
                    </p>
                    <p>
                        <input type="submit" value="tambah" name="tambah" />
                    </p>
                    <a  href="login-admin.php">Login Sebagai Admin</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>