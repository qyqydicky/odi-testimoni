<?php
    session_start (); //untuk mengakses sebuah session pada server kemudian menyimpan pada browser
        if(isset($_POST['btnlogin'])){
            include "koneksi.php"; //menghubungkan file koneksi

            $username   = $_POST['username'];
            $password   = $_POST['password'];

            $sql =  "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' ";

            $hasil = mysqli_query ($conn, $sql); // mengirimkan perintah query ke databases

            $row   = mysqli_fetch_array ($hasil); // proses pengambilan data

            $baris = mysqli_num_rows ($hasil); //untuk mengetahui berapa banyak data yang di ambil di database

            if($baris > 0){//jika data ada

                $_SESSION ['nama_siswa']        =$row ['nama_siswa'];
                $_SESSION ['username']          =$row ['username'];//eksekusi yang pertama
                $_SESSION ['login']             =$row ['true'];//jika bernilai benar maka akan mendapatkan nilai yang ada di varibale session ['nama_siswa']

                header("location:dashboard.php"); //halaman yang di tuju ketika benar
            }else{
                echo"anda gagal login";
            }

        }
?>





