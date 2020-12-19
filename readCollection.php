<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
<?php
    include "koneksi.php";

    if(!empty($_GET['id'])){
        $book_id = $_GET['id'];
        $query = mysqli_query($con, "SELECT MAX(id) FROM borrow_book");
        $borrow_id = mysqli_fetch_row($query);
        $query = "INSERT INTO detail_borrow (borrow_id, book_id, status) VALUES ('$borrow_id[0]', '$book_id', 1)";
        mysqli_query($con, $query);
        header("Location: collection.php");
        exit;
    }

    if(!empty($_GET['display'])){
        $book_id = $_GET['display'];
        $query = "UPDATE book SET status = 1 WHERE id='$book_id'";
        if(mysqli_query($con, $query)){
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: 'Buku berhasil ditampilkan!'
            }).then(function() {
                window.location='collection.php';
            });
            </script>";
            exit;
        }
    }

    if(!empty($_GET['remove'])){
        $book_id = $_GET['remove'];
        $query = "UPDATE book SET status = 2 WHERE id='$book_id'";
        if(mysqli_query($con, $query)){
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: 'Buku berhasil dinonaktifkan!'
            }).then(function() {
                window.location='collection.php';
            });
            </script>";
            exit;
        }
    }

    if($_SESSION['undisplay'] == True){
        $query = "SELECT * FROM book WHERE status = 2";
    }

    else {
        $query = "SELECT * FROM book WHERE status = 1";
    }

    $res = mysqli_query($con, $query);

    if (mysqli_num_rows($res) >= 1) {
        while($data = mysqli_fetch_row($res)){
            echo '
            <div class="col-md-3 my-3">
                <div class="card p-2 h-100">
                    <img src="img/5294.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'. $data[1] .'</h5>
                        <p class="card-text">Ditulis oleh '. $data[2] .'</p>
                        <p class="card-text">Diterbitkan tanggal '. $data[4] .'</p>
                        <p class="card-text">Kategori '. $data[5] .'</p>';

                    if(isset($_SESSION['borrow'])){
                        echo '<a class="btn btn-success btn-block" name="add_cart" href="readCollection.php?id=' . $data[0] . '">Add to Cart</a>';
                    }

                    if($_SESSION['level'] == 1 && $_SESSION['undisplay'] == True){
                        echo '<a class="btn btn-success btn-block" name="display" href="readCollection.php?display=' . $data[0] . '">Display</a>';
                    }

                    elseif ($_SESSION['level'] == 1 && $_SESSION['undisplay'] == False){
                        echo '<a class="btn btn-danger btn-block" name="remove" href="readCollection.php?remove=' . $data[0] . '">Remove</a>';
                    }

                        echo '<a target="__blank" href="detailCollection.php?id=' . $data[0] . '" class="btn btn-warning btn-block">Detail</a>';

            echo '</div>
                </div>
            </div>';
        }
    }

    else{
        echo '<p> There are no collection yet. Please contact admin for further information. </p>';
    }
    
?>

