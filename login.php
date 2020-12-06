<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php 
    include "logreg.php";
    if(isset($_POST['login'])){
        include "koneksi.php";

        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE username='$uname' AND password='$pass'");
        $res = mysqli_fetch_array($data);

        $res_id = $res['id'];
        $res_nim = $res['nim'];
        $res_nama = $res['nama'];
        $res_level = $res['level'];
        
        if($res_level == 1){
            session_start();
            $_SESSION['nim'] = $res_nim;
            $_SESSION['nama'] = $res_nama;
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: 'Halo admin!'
            }).then(function() {
                window.location='admin.php';
            });
            </script>";
        }

        else if($res_level == 2) {
            session_start();
            $_SESSION['nim'] = $res_nim;
            $_SESSION['nama'] = $res_nama;
            echo "<script>
            var nim = '$res_nim';
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: 'Halo ' + nim + '!'
            }).then(function() {
                window.location='guest.php';
            });
            </script>";
        }

        else{
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Card ID atau password yang Anda masukkan salah!'
            }).then(function() {
                window.location='index.php';
            });
            </script>";
        }
    }
?>
