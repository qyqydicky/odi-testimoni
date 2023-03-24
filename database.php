<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <h3>menampilkan data dari table</h3>
    <form action="" method="POST">
        <table border=1>
            <tr>
                <td>no</td>
                <td>id buku</td>
                <td>nama buku</td>
                <td>tanggal terbit</td>
                <td>alamat buku</td>
                <td>aksi</td>
            </tr>
            <?php
                include"koneksi.php";

                $no=1; //menambahkan no otomastis

                $sql = "SELECT * FROM tb_buku";
                //menampilkan semua isi table buku

                $hasil = mysqli_query ($conn, $sql); //megirimkan perintah query ke database

                while($data = mysqli_fetch_array($hasil)){//proses pengambilan data
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_buku']?></td>
                            <td><?php echo $data['nama_buku']?></td>
                            <td><?php echo $data['tgl_terbit']?></td>
                            <td><?php echo $data['alamat']?></td>
                            <td>
                        <tr>
                            <td><?php echo $no++;?></td>
                            <td><?php echo $data['id_user']?></td>
                            <td><?php echo $data['username']?></td>
                            <td><?php echo $data['password']?></td>
                            <td><?php echo $data['nama']?></td>
                            <td>
                                <a href="ubah.php?id_buku"<?php echo $data ['id_buku']; ?>>ubah</a>
                                <a href="hapus.php?id_buku"<?php echo $data ['id_buku'] ?>>hapus</a>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    </form>
</body>
</html>