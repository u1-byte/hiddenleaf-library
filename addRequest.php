<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php
    if(isset($_POST['req'])){
        include 'koneksi.php';
        $user_id = $_SESSION['id'];
        $title = $_POST['b_title'];
        $author = $_POST['b_author'];
        $pub = $_POST['b_publish'];
        $date = $_POST['b_date'];
        $cat = $_POST['category'];
        $desc = $_POST['desc'];
        $req_status = 2;
        $book_status = 2;

        $query_add = "INSERT INTO book (nama, penulis, penerbit, tahun_terbit, kategori, deskripsi, status) VALUES (
            '$title',
            '$author',
            '$pub',
            '$date',
            '$cat',
            '$desc',
            '$book_status')";

        $add_book = mysqli_query($con, $query_add);
        
        if ($add_book){
            $query_req = "INSERT INTO request_book (user_id, book_id, status) VALUES ('$user_id', LAST_INSERT_ID(), '$req_status')";
            if(mysqli_query($con, $query_req)){
                echo "<div></div>
                <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Request Sukses!',
                    text: 'Terimakasih atas sarannya! Silakan tunggu persetujuan admin!'
                });
                </script>";
                exit;
            }
        }

        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Request Gagal!',
            text: 'Silakan coba lagi!'
        });
        </script>";
    }
        

?>
