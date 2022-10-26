<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Pramuka</title>
</head>
<body>
    <h1>ANGGOTA PRAMUKA</h1>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Sangga</th>
        <th>Ambalan</th>
    </tr>

    <?php
        include "koneksi.php";
        $no = 1;
        $sql = mysqli_query ($koneksi, "SELECT * FROM anggota");
        if(mysqli_num_rows($sql)){
            while ($tampil = mysqli_fetch_array($sql)){
            echo "
            <tr>
                <td>$no</td>
                <td>$tampil[nama]</td>
                <td>$tampil[kelas]</td>
                <td>$tampil[sangga]</td>
                <td>$tampil[ambalan]</td>
            </tr>";

            $no++;
            }
        }
    ?>
    </table>
</body>
</html>