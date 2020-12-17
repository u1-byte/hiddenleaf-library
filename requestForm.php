<?php
    session_start();
    if ($_SESSION['login'] == False){
        header("Location: logreg.php");
        exit;
    }
    include "addRequest.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Purchase - Hidden Leaf Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
      include "navbar.php";
    ?>
    
    <div class="container mt-5">  
        <div class="row-md-5 justify-content-center">
            <h3>Your Request</h3>
            <?php 
                include "readRequest.php"; 
            ?>
        </div>

        <div class="row-md-5 mt-5 justify-content-center">
            <div class="card border-dark">
                <div class="card-header">
                    <h3 class="mb-0 my-2" style="text-align: center;">Request Purchase</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="POST" action="">
                        <div class="form-group">
                            <label for="b_title">Judul Buku</label>
                            <input type="text" name="b_title" class="form-control" id="b_title" placeholder="Input title" required="">
                        </div>
                        <div class="form-group">
                            <label for="b_author">Nama Penulis</label>
                            <input type="text" name="b_author" class="form-control" id="b_author" placeholder="Input author's name" required="">
                        </div>
                        <div class="form-group">
                            <label for="b_publish">Nama Penerbit</label>
                            <input type="text" name="b_publish" class="form-control" id="b_publish" placeholder="Input publisher's name" required="">
                        </div>
                        <div class="form-group">
                            <label for="b_date">Tahun Terbit</label>
                            <input type="date" name="b_date" class="form-control" id="b_date" required="">
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select name="category" class="form-control" id="category" required="">
                                <option value="Gaya hidup">Gaya Hidup</option>
                                <option value="Romantis">Romantis</option>
                                <option value="Sains">Sains</option>
                                <option value="Pendidikan">Pendidikan</option>
                                <option value="Sosial & Humaniora">Sosial & Humaniora</option>
                                <option value="Bisnis & Ekonomi">Bisnis & Ekonomi</option>
                                <option value="Agama & Psikologi">Agama & Psikologi</option>
                                <option value="Seni & Desain">Seni & Desain</option>
                                <option value="Fiksi & Sastra">Fiksi & Sastra</option>
                                <option value="Pengembangan Diri">Pengembangan Diri</option>
                                <option value="Komik">Komik</option>
                                <option value="Komputer & Teknologi">Komputer & Teknologi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="req" type="submit" class="btn btn-success btn-md float-right" value="Request"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <?php 
      include "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>