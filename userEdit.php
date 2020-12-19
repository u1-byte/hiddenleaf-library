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
    $query = "SELECT * FROM user WHERE id = '$user_id'";
    $res = mysqli_query($con, $query);
    $data = mysqli_fetch_array($res);
    $card_id = $data['card_id'];
    $email = $data['email'];
    $fullname = $data['fullname'];
    $address = $data['address'];
  }

  if(isset($_POST['save'])){
    $card_id = $_POST['card_id'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $query = "UPDATE user SET email = '$email', fullname = '$fullname', address = '$address' WHERE card_id = '$card_id'";
    $res = mysqli_query($con, $query);
    if($res){
        echo "<div></div>
        <script>
        var id = '$card_id'
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: 'Data ' + id + ' berhasil diupdate!'
        }).then(function() {
            window.location='admin.php';
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
            text: 'Data user gagal diupdate!'
        })
        </script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Form - Hidden Leaf Library</title>
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

        <div class="col-md-5 mx-auto">
            <div class="card border-dark">
                <div class="card-header">
                    <h3 class="mb-0 my-2" style="text-align: center;">Edit User Form</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="POST" action="">
                        <div class="form-group">
                            <label for="card_id">Card ID</label>
                            <input type="text" name="card_id" class="form-control" id="card_id" placeholder="Input card ID" readonly required="" value="<?php echo $card_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Input email" required="" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Input full name" required="" value="<?php echo $fullname; ?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Input address" required="" value="<?php echo $address; ?>">
                        </div>
                        <div class="form-group">
                            <input name="save" type="submit" class="btn btn-success btn-md float-right" value="Save"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php 
      include "footer.php";
    ?>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
</body>
</html>