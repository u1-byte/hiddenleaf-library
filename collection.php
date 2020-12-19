<?php
    session_start();
    include "koneksi.php";
    if ($_SESSION['login'] == False){
        header("Location: logreg.php");
        exit;
    }

    if(!empty($_GET['condition'])){
        $_SESSION['undisplay'] = True;
    }
    
    else {
        $_SESSION['undisplay'] = False;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collection - Hidden Leaf Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
      include "navbar.php";
    ?>
    
    <div class="row mt-3 mx-3">
        <div id="filter_block" class="col-2">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Berdasarkan Kategori
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Berdasarkan Tahun Terbit
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col mx-2">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <div class="form-inline justify-content-start">
                    <?php
                        if($_SESSION['level'] == 2){
                            echo '<button id="filter_btn" class="btn btn-dark mr-sm-2" role="button" onclick="showFilter()">Filter</button>';
                        }
                    ?>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

                <?php
                    if ($_SESSION['level'] == 2){

                        $user_id = $_SESSION['id'];

                        if (isset($_POST['col_mode'])){
                            $query = mysqli_query($con, "SELECT MAX(id) FROM borrow_book");
                            $borrow_id = mysqli_fetch_row($query);
                            mysqli_query($con, "DELETE FROM borrow_book WHERE id='$borrow_id[0]' AND user_id='$user_id'");
                            $_SESSION['borrow'] = NULL;
                        }

                        if (isset($_POST['bor_mode'])){
                            mysqli_query($con, "INSERT INTO borrow_book (user_id) VALUES ('$user_id')");
                            $_SESSION['borrow'] = True;
                        }

                        if(isset($_SESSION['borrow'])){
                            echo '
                            <div class="form-inline justify-content-end">
                                <button id="cart_btn" class="btn btn-primary mr-sm-2" role="button" onclick="showCart()">Check Cart</button>
                                <form class="form-inline" method="POST" action="">
                                    <input class="btn btn-danger form-control mr-sm-2" type="submit" name="col_mode" value="Cancel">
                                </form>
                            </div>';
                        }

                        else{
                            echo '
                            <div class="form-inline justify-content-end">
                                <form class="form-inline" method="POST" action="">
                                    <input class="btn btn-success form-control mr-sm-2" type="submit" name="bor_mode" value="Pinjam Buku">
                                </form>
                                <form class="form-inline" method="POST" action="historyCollection.php">
                                    <input class="btn btn-info form-control mr-sm-2" type="submit" name="history" value="Riwayat Peminjaman">
                                </form>
                            </div>';
                        }
                    }
                ?>
                
            </nav>

            <div class="row mt-3">
                <?php
                    if ($_SESSION['level'] == 1){
                        include "adminBar.php";
                    }
                    
                    include "readCollection.php";
                ?>
            </div>
        </div>

        <div id="cart_block" class="col-2">
           <?php
                include "cart.php";
           ?>
        </div>

    </div>

    
    <!-- Footer -->
    <?php 
      include "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        var x = document.getElementById("cart_block");
        var y = document.getElementById("filter_block");
        x.style.display = "none";
        y.style.display = "none";

        function showCart() {
            var z = x;
            if(z.style.display === "none"){
                z.style.display = "block";
            } else {
                z.style.display = "none";
            }    
        }

        function showFilter() {
            var z = y;
            if(z.style.display === "none"){
                z.style.display = "block";
            } else {
                z.style.display = "none";
            }  
        }
    </script>

</body>
</html>
