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
    $user_id = $_GET['id'];
    $query = "UPDATE user SET status = 3 WHERE id='$user_id'";
    if(mysqli_query($con, $query)){
        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: 'User berhasil dinonaktifkan!'
        }).then(function() {
            window.location='userInactive.php';
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
            text: 'Gagal dinonaktifkan!'
        }).then(function() {
            window.location='userInactive.php';
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
    <title>Inactive User - Hidden Leaf Library</title>
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

        $query = "SELECT * FROM user WHERE level = 2 AND status = 3";
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
                    <th scope="col">Card ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>';

            while($data = mysqli_fetch_row($res)){
                echo '
                <tr>
                    <th scope="row">' . $num++ . '</th>
                    <td>' . $data[1] . '</td>
                    <td>' . $data[3] . '</td>
                    <td>' . $data[4] . '</td>
                    <td>' . $data[5] . '</td>
                    <td>
                    <a class="btn btn-success" name="activate" href="userActive.php?id=' . $data[0] . '">Activate</a>
                    <a class="btn btn-warning" name="edit" href="userEdit.php?id=' . $data[0] . '">Edit</a>
                    <td>
                </tr>';
            }

            echo '
            </tbody>
            </table>
            </div>
            </div>';
        }

        else{
            echo '<h2 style="text-center"> No inactive user yet. </h2>';
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