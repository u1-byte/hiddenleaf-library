<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php
    include "koneksi.php";

    if(!empty($_GET['id'])){
        $book_id = $_GET['id'];
        $query = mysqli_query($con, "SELECT MAX(id) FROM borrow_book");
        $borrow_id = mysqli_fetch_row($query);
        $query = "DELETE FROM detail_borrow WHERE borrow_id='$borrow_id[0]' AND book_id='$book_id'";
        mysqli_query($con, $query);
        header("Location: collection.php");
        exit;
    }

    if(isset($_POST['bor_sch'])){
        $query = mysqli_query($con, "SELECT MAX(id) FROM borrow_book");
        $borrow_id = mysqli_fetch_row($query);
        $bor_date = $_POST['bor_date'];
        if(mysqli_query($con, "UPDATE borrow_book SET borrow_date='$bor_date' WHERE id='$borrow_id[0]'")){
            $_SESSION['borrow'] = NULL;
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: 'Penjadwalan peminjaman buku sukses! Silahkan diambil di hari yang sudah Anda tentukan.'
            }).then(function() {
                window.location='collection.php';
            });
            </script>";
            exit;
        }
    }

    $user_id = $_SESSION['id'];
    $query = mysqli_query($con, "SELECT MAX(id) FROM borrow_book WHERE user_id='$user_id'");
    $borrow_id = mysqli_fetch_row($query);
    $query = "SELECT b.id, b.nama, b.kategori FROM detail_borrow d INNER JOIN book b ON d.book_id=b.id WHERE d.borrow_id='$borrow_id[0]'";
    $res = mysqli_query($con, $query);

    if (mysqli_num_rows($res) >= 1) {
        echo '
        <div class="row-sm mb-4">
            <form class="form" role="form" autocomplete="off" method="POST" action="">
                <div class="form-group">
                    <label for="bor_date">Tanggal Pinjam</label>
                    <input type="date" name="bor_date" class="form-control" id="bor_date" required="">
                </div>
                <div class="form-group">
                    <input name="bor_sch" type="submit" class="btn btn-block btn-success" value="Make Schedule"/>
                </div>
            </form>
        </div>';

        while($data = mysqli_fetch_row($res)){
            echo '
            <div class="row-sm">
                <div class="card py-2 my-3">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title">' . $data[1] . '</h5>
                        <p class="card-text">Kategori ' . $data[2] . '</p>
                        <a class="btn btn-danger btn-sm" name="del_cart" href="cart.php?id=' . $data[0] . '">Delete</a>
                    </div>
                </div>
            </div>';
        }
    }

    else{
        echo '<p> Your cart is empty. </p>';
    }
?>


            
            