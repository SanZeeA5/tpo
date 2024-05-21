<?php include("conn.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Tamu</h1>
        <br>

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Asal</th>
                    <th>Pekerjaan</th>
                    <th>Keperluan</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM tamu";
                $query = mysqli_query($conn, $sql);

                while ($tamu = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $tamu['id'] . "</td>";
                    echo "<td>" . $tamu['nama'] . "</td>";
                    echo "<td>" . $tamu['nomor_tamu'] . "</td>";
                    echo "<td>" . $tamu['asal'] . "</td>";
                    echo "<td>" . $tamu['pekerjaan'] . "</td>";
                    echo "<td>" . $tamu['keperluan'] . "</td>";

                    echo "<td>";
                    echo "<a href='edit.php?id=" . $kamar['id_kamar'] . "'>Edit</a> | ";
                    echo "<a href='hapus.php?id=" . $kamar['id_kamar'] . "'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>

            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </div>
</body>

</html>