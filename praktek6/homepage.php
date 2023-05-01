<!DOCTYPE html>
<html>
    <head>
        <title>CRUD DATA PEGAWAI</title>
    </head>
    <body>
        <center>
            <h1>DATA PEGAWAI</h1>
            <br>
            <table border="1">
                <tr style="background-color: yellow;">
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No.Telp</th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM data_pegawai");
                while($d = mysqli_fetch_array($data)){
                ?>
                    <tr>
                        <td><? php echo $no++; ?></td>
                        <td width="300" align="center"><?php echo $d['nama']; ?></td>
                        <td width="300" align="center"><?php echo $d['email']; ?></td>
                        <td width="300" align="center"><?php echo $d['alamat']; ?></td>
                        <td width="300" align="center"><?php echo $d['no_Telp']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <br><br><br>
            <a href="">Tambah</a>
            <a href="">Edit</a>
            <a href="">Hapus</a>
        </center>
    </body>
</html>