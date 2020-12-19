<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php
    if(isset($_POST['register'])){
        include 'koneksi.php';

        $email = $_POST['email'];
        $card = $_POST['card_id'];
        $pass = $_POST['password'];
        $fname = $_POST['fullname'];
        $address = $_POST['address'];
        $level = 2;
        $status = 2;
        $hashed = password_hash($pass, PASSWORD_DEFAULT);

        $same_card = mysqli_query($con, "SELECT * FROM user WHERE card_id = $card");
        if (mysqli_num_rows($same_card) === 1){
            echo "<div></div>
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Gagal regis, ID card sudah digunakan!'
                });
                </script>";
        }

        else{
            $query_add = "INSERT INTO user (card_id, password, email, fullname, address, level, status) VALUES (
                '$card',
                '$hashed',
                '$email',
                '$fname',
                '$address',
                '$level',
                '$status')";
    
            if (mysqli_query($con, $query_add)){
                echo "<div></div>
                <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registrasi Sukses!',
                    text: 'Silakan kontak admin untuk verifikasi!'
                });
                </script>";
            }
            else {
                echo "<div></div>
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Gagal regis, silakan coba lagi!'
                });
                </script>";
            };
        }
        
    }

?>
