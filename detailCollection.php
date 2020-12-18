<?php
    session_start();
    include "koneksi.php";

    if(empty($_GET['id'])){
        header("Location: collection.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection Detail - Hidden Leaf Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
        include "navbar.php";

        if (!empty($_GET['id'])){
            $book_id = $_GET['id'];
            $query = "SELECT * FROM book WHERE id = '$book_id'";
            $res = mysqli_query($con, $query);
            
            if(mysqli_num_rows($res) === 1){
                $data = mysqli_fetch_row($res);
                echo '
                <div class="col-md-5 mx-auto my-3">
                    <div class="card mt-5 p-4 cc">
                    <img src="img/5294.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title text-center">'. $data[1] .'</h3>
                        <p class="card-text">Penulis        : '. $data[2] .'</p>
                        <p class="card-text">Penerbit       : '. $data[3] .'</p>
                        <p class="card-text">Tahun Terbit   : '. $data[4] .'</p>
                        <p class="card-text">Kategori       : '. $data[5] .'</p>
                        <p class="card-text">Deskripsi      : </p> 
                        <p class="card-text">'. $data[6] .'</p>
                    </div>
                    </div>
                </div>';
            }
        }

        include "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
