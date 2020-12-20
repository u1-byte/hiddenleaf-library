<?php
    session_start();
    include "koneksi.php";
    if (!isset($_POST['history'])){
        header("Location: collection.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow History - Hidden Leaf Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
        include "navbar.php";

        $user_id = $_SESSION['id'];
        $query_date = "SELECT id, borrow_date FROM borrow_book WHERE user_id = '$user_id'";
        $res_date = mysqli_query($con, $query_date);

        echo '<div class="col-md-5 mx-auto my-3">';
        if (mysqli_num_rows($res_date) >= 1) {
            while($data = mysqli_fetch_row($res_date)){
                $num = 1;
                echo'
                <div class="card my-3">
                <div class="card-header">
                    Tanggal ' . $data[1] . ' 
                </div>
                <div class="card-body">';
                $query_book = "SELECT b.nama, b.penulis, b.kategori, sb.nama 
                    FROM detail_borrow db INNER JOIN book b ON db.book_id=b.id 
                    INNER JOIN status_borrow sb ON db.status=sb.id 
                    INNER JOIN borrow_book bb ON db.borrow_id=bb.id
                    WHERE bb.user_id = '$user_id' AND bb.borrow_date = '$data[1]'";
                $res_book = mysqli_query($con, $query_book);
                
                if (mysqli_num_rows($res_book) >= 1) {
                    echo '
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Status Pinjam</th>
                            </tr>
                        </thead>
                        <tbody>';
                        while($dt_book = mysqli_fetch_row($res_book)){
                            echo '
                            <tr>
                                <th scope="row">' . $num++ . '</th>
                                <td>' . $dt_book[0] . '</td>
                                <td>' . $dt_book[1] . '</td>
                                <td>' . $dt_book[2] . '</td>
                                <td>' . $dt_book[3] . '</td>
                            </tr>';
                        }
                    echo '
                    </tbody>
                    </table>';
                }

                echo '
                </div>
                </div>';
            }
        }

        else {
            echo '<h3>You dont have any borrow history yet.</h3>';
        }
        echo '</div>';   

        include "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
