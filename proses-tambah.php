<?php 
include 'conn.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $nomor_telp = $_POST['nomor_kamar'];
    $fasilitas = $_POST['fasilitas'];

    $sql = "insert into kamar(nama_kamar,nomor_kamar,fasilitas) values('$nama_kamar', '$nomor_kamar', '$fasilitas')";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

}
?>