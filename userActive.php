<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>

<?php
  session_start();
  include "koneksi.php";
  include "register.php";

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
    $query = "UPDATE user SET status = 1 WHERE id='$user_id'";
    if(mysqli_query($con, $query)){
        echo "<div></div>
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: 'User berhasil diverifikasi!'
        }).then(function() {
            window.location='userActive.php';
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
            text: 'Gagal diverifikasi'
        }).then(function() {
            window.location='userActive.php';
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
    <title>Verified User - Hidden Leaf Library</title>
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
        ?>

        <div class="col-md mx-auto p-2">
            <button id="add" name="add" class="btn btn-md btn-success mx-2 mb-3" role="button" onclick="showInsert()">Add User</button>
            <div class="row-md mx-auto mb-3 justify-content-center">
                <div id="add-form" class="card border-dark">
                    <div class="card-header">
                        <h3 class="mb-0 my-2">Add User Form</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="POST" action="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Input your email (email@mail.com)" required="">
                            </div>
                            <div class="form-group">
                                <label for="username">Card ID</label>
                                <input type="text" name="card_id" class="form-control" id="card_id" placeholder="Input your library card ID" required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Input your password" required="">
                            </div>
                            <div class="form-group">
                                <label for="nama">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Input your fullname" required="">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Input your address" required="">
                            </div>
                            <div class="form-group">
                                <input name="register" type="submit" class="btn btn-dark btn-md" value="Insert">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
                $query = "SELECT * FROM user WHERE level = 2 AND status = 1";
                $res = mysqli_query($con, $query);
                $num = 1;
                
                if (mysqli_num_rows($res) >= 1) {
                    echo '
                    <div class="row-md mx-auto mb-3">
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
                            <a class="btn btn-warning" name="edit" href="userEdit.php?id=' . $data[0] . '">Edit</a>
                            <a class="btn btn-danger" name="remove" href="userInactive.php?id=' . $data[0] . '">Remove</a>
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
                    echo '<h2 style="text-center"> No verified user yet. </h2>';
                }  
            ?>
            
        </div>
    </div>

    <?php 
      include "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        var x = document.getElementById("add-form");
        x.style.display = "none";

        function showInsert() {
            var z = x;
            if(z.style.display === "none"){
                z.style.display = "block";
            } else {
                z.style.display = "none";
            }    
        }
    </script>
    
</body>
</html>