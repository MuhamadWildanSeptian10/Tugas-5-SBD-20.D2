<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tugas Basis Data 5</title>
</head>
<body>
    <div class="container">
        <h1><center>Sistem Klinik</center></h1>
        <?php
        include("Koneksi.php");
        // query untuk menampilkan data
        $no = 1;
        $sql = 'SELECT * FROM pasien';
        $result = mysqli_query($conn, $sql);
        ?>
        <h3>Tabel Pasien</h3>
        <table style="width: 400px;" border="1">
         <tr>
            <th>No</td>
            <th>ID Pasien</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
         </tr>
        <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><center><?= $no++; ?><center></td>
                    <td><center><?= $row ['id_pasien']; ?><center></td>
                    <td><center><?= $row ['nama_pasien']; ?><center></td>
                    <td><center><?= $row ['jenis_kelamin']; ?><center></td>
                    <td><center><?= $row ['umur']; ?><center></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        <?php
        include("Koneksi.php");
        // query untuk menampilkan data
        $no = 1;
        $sql2 = 'SELECT * FROM obat';
        $result = mysqli_query($conn, $sql2);
        ?>
        <h3>Tabel Obat</h3>
        <table style="width: 250px;" border="1">
         <tr>
            <th>No</th>
            <th>ID Obat</th>
            <th>Nama Obat</th>
         </tr>
        <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><center><?= $no++; ?><center></td>
                    <td><center><?= $row ['id_obat']; ?><center></td>
                    <td><center><?= $row ['nama_obat']; ?><center></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        <?php
        include("Koneksi.php");
        // query untuk menampilkan data
        $no = 1;
        $sql3 = 'SELECT * FROM dokter';
        $result = mysqli_query($conn, $sql3);
        ?>
        <h3>Tabel Dokter</h3>
        <table style="width: 250px;" border="1">
         <tr>
            <th>No</th>
            <th>ID Dokter</th>
            <th>Nama Dokter</th>
         </tr>
        <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><center><?= $no++ ?><center></td>
                    <td><center><?= $row ['id_dokter']; ?><center></td>
                    <td><center><?= $row ['nama_dokter']; ?><center></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
            <?php
        include("Koneksi.php");
        // query untuk menampilkan data
        $no = 1;
        $sql4 = 'SELECT * FROM berobat';
        $result = mysqli_query($conn, $sql4);
        ?>
        <h3>Tabel berobat</h3>
        <table style="width: 850px;" border="1">
         <tr>
            <th>No</th>
            <th>ID Berobat</th>
            <th>ID Pasien</th>
            <th>ID Dokter</th>
            <th>Tanggal Berobat</th>
            <th>Keluhan Pasien</th>
            <th>Hasil Diagnosa</th>
            <th>Penatalaksanaan</th>
         </tr>
        <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><center><?= $no++; ?><center></td>
                    <td><center><?= $row ['id_berobat']; ?><center></td>
                    <td><center><?= $row ['id_pasien']; ?><center></td>
                    <td><center><?= $row ['id_dokter']; ?><center></td>
                    <td><center><?= $row ['tgl_berobat']; ?><center></td>
                    <td><center><?= $row ['keluhan_pasien']; ?><center></td>
                    <td><center><?= $row ['hasil_diagnosa']; ?><center></td>
                    <td><center><?= $row ['penatalakasanaan']; ?><center></td>
            </tr>
            <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>        
    </div>            
</body>            
</html>
