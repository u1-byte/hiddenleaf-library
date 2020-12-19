<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>

<?php
  session_start();
  include "koneksi.php";

  if ($_SESSION['login'] == False){
    header("Location: logreg.php");
    exit;
  }

  if($_SESSION['level'] != 1){
    header("Location: index.php");
    exit;
  }

  if(!empty($_GET['id'])){
    $req_id = $_GET['id'];
    $query = "UPDATE request_book SET status = 1 WHERE id='$req_id'";
    if(mysqli_query($con, $query)){
        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Accepted!',
            text: 'Request sudah disetujui!'
        }).then(function() {
            window.location='requestAccept.php';
        });
        </script>";
        exit;
    }

    else{
        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Request gagal disetujui!'
        }).then(function() {
            window.location='requestAccept.php';
        });
        </script>";
        exit;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requested Books - Hidden Leaf Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
      include "navbar.php";
    ?>

    <div class="row mt-5 mx-3">
    <?php
        include "adminBar.php";

        $query = "SELECT u.card_id, b.nama, b.penulis, b.penerbit, b.kategori, s.nama, r.status, r.id FROM request_book r 
            INNER JOIN book b ON r.book_id = b.id 
            INNER JOIN status_request_book s ON r.status = s.id 
            INNER JOIN user u ON r.user_id = u.id
            ORDER BY u.card_id ASC";
        $res = mysqli_query($con, $query);
        $num = 1;
        
        if (mysqli_num_rows($res) >= 1) {
            echo '
            <div class="col-md mx-auto p-2">
            <div class="table-responsive-md"> 
            <table class="table table-bordered table-light">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Requested By</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>';

            while($data = mysqli_fetch_row($res)){
                echo '<tr>
                <th scope="row">' . $num++ . '</th>
                <td>' . $data[0] . '</td>
                <td>' . $data[1] . '</td>
                <td>' . $data[2] . '</td>
                <td>' . $data[3] . '</td>
                <td>' . $data[4] . '</td>
                <td>' . $data[5] . '</td>';

                if ($data[6] == 2) {
                    echo '<td>
                    <a class="btn btn-success" name="accept" href="requestAccept.php?id=' . $data[7] . '">Accept</a>
                    <a class="btn btn-danger" name="reject" href="requestReject.php?id=' . $data[7] . '">Reject</a>
                    <td>';
                }
                else {
                    echo '<td> None </td>';
                }
                '</tr>';
            }

            echo '
            </tbody>
            </table>
            </div>
            </div>';
        }

        else{
            echo '<h2> You dont have any request yet. </h2>';
        }
            
    ?>
    </div>

    <?php 
      include "footer.php";
    ?>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>