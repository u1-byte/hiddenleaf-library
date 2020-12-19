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
    $query = "UPDATE request_book SET status = 3 WHERE id='$req_id'";
    if(mysqli_query($con, $query)){
        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Rejected!',
            text: 'Request sudah ditolak!'
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
            text: 'Request gagal ditolak!'
        }).then(function() {
            window.location='requestAccept.php';
        });
        </script>";
        exit;
    }
  }

?>