<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php
include "index.php"; 
if(isset($_POST['register'])){
    include 'koneksi.php';

    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $level = 2;

    $query = "INSERT INTO mahasiswa (username, password, nim, nama, alamat, level) VALUES (
        '$uname',
        '$pass',
        '$nim',
        '$nama',
        '$alamat',
        '$level')";

    if (mysqli_query($koneksi, $query)){
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registrasi Sukses!',
                    text: 'Silakan login untuk melanjutkan!'
                }).then(function() {
                    window.location='index.php';
                });
                </script>";
    }
    else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Gagal regis, silakan coba lagi!'
        }).then(function() {
            window.location='index.php';
        });
        </script>";
    };
}

?>
