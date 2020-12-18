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
    
    $query = "SELECT * FROM book WHERE status = 2";
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
                        echo '
                        <a class="btn btn-success btn-block" name="add_cart" href="readCollection.php?id=' . $data[0] . '">Add to Cart</a>';
                    }

                        echo 
                        '<a target="__blank" href="detailCollection.php?id=' . $data[0] . '" class="btn btn-warning btn-block">Detail</a>
                    </div>
                </div>
            </div>';
        }
    }

    else{
        echo '<p> There are no collection yet. Please contact admin for further information. </p>';
    }
    
?>

