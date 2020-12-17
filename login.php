<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php 
    if(isset($_POST['login'])){
        include "koneksi.php";

        $card = $_POST['card_id'];
        $pass = $_POST['password'];
        
        $res = mysqli_query($con, "SELECT * FROM user WHERE card_id='$card'");
       
        if(mysqli_num_rows($res) === 1){
            $data = mysqli_fetch_array($res);
            if(password_verify($pass, $data['password'])){

                if($data['level'] == 1 && $data['status'] == 1){
                    $_SESSION['login'] = True;
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['card_id'] = $data['card_id'];
                    $_SESSION['fname'] = $data['fullname'];
                    $_SESSION['level'] = $data['level'];
                    echo "<div></div>
                    <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil login!',
                        text: 'Halo admin!'
                    }).then(function() {
                        window.location='admin.php';
                    });
                    </script>";
                    exit;
                }
    
                else if($data['level'] == 2 && $data['status'] == 1) {
                    $_SESSION['login'] = True;
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['card_id'] = $data['card_id'];
                    $_SESSION['fname'] = $data['fullname'];
                    $_SESSION['level'] = $data['level'];
                    $name = $data['fullname'];
                    echo "<div></div>
                    <script>
                    var name = '$name';
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil login!',
                        text: 'Halo, ' + name + '!'
                    }).then(function() {
                        window.location='index.php';
                    });
                    </script>";
                    exit;
                }

                else {
                    echo "<div></div>
                    <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal Login!',
                        text: 'Akun Anda belum diverifikasi oleh admin!'
                    }).then(function() {
                        window.location='logreg.php';
                    });
                    </script>";
                    exit;
                }
            } 
        }

        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal Login!',
            text: 'ID Card atau password yang Anda masukkan salah!'
        });
        </script>";

    }
?>
