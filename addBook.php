<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>

<?php
    session_start();
    include "koneksi.php";
    $_SESSION['edit'] = False;

    if ($_SESSION['login'] == False){
        header("Location: logreg.php");
        exit;
    }

    if($_SESSION['level'] != 1){
        header("Location: index.php");
        exit;
    }

    if(!empty($_GET['edit'])){
        $_SESSION['edit'] = True;
        $book_id = $_GET['edit'];
        $query = "SELECT * FROM book WHERE id='$book_id'";
        $res = mysqli_query($con,$query);
        $data = mysqli_fetch_row($res);
        $titleVal = $data[1];
        $authorVal = $data[2];
        $pubVal = $data[3];
        $dateVal = $data[4];
        $catVal = $data[5];
        $descVal = $data[6];
    }

    if(isset($_POST['save'])){
        $_SESSION['edit'] = False;
        $title = $_POST['b_title'];
        $author = $_POST['b_author'];
        $pub = $_POST['b_publish'];
        $date = $_POST['b_date'];
        $cat = $_POST['category'];
        $desc = $_POST['desc'];

        $query = "UPDATE book SET nama = '$title',
            penulis = '$author',
            penerbit = '$pub',
            tahun_terbit = $date,
            kategori = $cat,
            deskripsi = $desc
            WHERE id = '$book_id'";

        if (mysqli_query($con, $query)){
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Update Sukses!',
                text: 'Berhasil mengupdate data buku!'
            });
            </script>";
            exit;
        }

        else {
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Update Gagal!',
                text: 'Silakan coba lagi!'
            });
            </script>";
        }
    }

    if(isset($_POST['add'])){
        $title = $_POST['b_title'];
        $author = $_POST['b_author'];
        $pub = $_POST['b_publish'];
        $date = $_POST['b_date'];
        $cat = $_POST['category'];
        $desc = $_POST['desc'];
        $book_status = 1;

        $query_add = "INSERT INTO book (nama, penulis, penerbit, tahun_terbit, kategori, deskripsi, status) VALUES (
            '$title',
            '$author',
            '$pub',
            '$date',
            '$cat',
            '$desc',
            '$book_status')";
        
        if (mysqli_query($con, $query_add)){
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Tambah Buku Sukses!',
                text: 'Sukses menambah buku!'
            });
            </script>";
        }

        else {
            echo "<div></div>
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Tambah Buku Gagal!',
                text: 'Silakan coba lagi!'
            });
            </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book - Hidden Leaf Library</title>
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
        <div class="col">
            <div class="card border-dark">
                <div class="card-header">
                    <h3 class="mb-0 my-2" style="text-align: center;">
                    <?php 
                        if (isset($_SESSION['edit']) && $_SESSION['edit'] == True){
                            echo 'Edit Book Form';
                        }
                        else {
                            echo 'Add Book Form';
                        }
                    ?>
                    </h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off" method="POST" action="">
                        <div class="form-group">
                            <label for="b_title">Judul Buku</label>
                            <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == True) : ?>
                                <input type="text" name="b_title" class="form-control" id="b_title" placeholder="Input title" required="" <?php echo 'value="' . $titleVal . '"'; ?>>
                            <?php else : ?>
                                <input type="text" name="b_title" class="form-control" id="b_title" placeholder="Input title" required="">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="b_author">Nama Penulis</label>
                            <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == True) : ?>
                                <input type="text" name="b_author" class="form-control" id="b_author" placeholder="Input author's name" required="" <?php echo 'value="' . $authorVal . '"'; ?>>
                            <?php else : ?>
                                <input type="text" name="b_author" class="form-control" id="b_author" placeholder="Input author's name" required="">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="b_publish">Nama Penerbit</label>
                            <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == True) : ?>
                                <input type="text" name="b_publish" class="form-control" id="b_publish" placeholder="Input publisher's name" required="" <?php echo 'value="' . $pubVal . '"'; ?>>
                            <?php else : ?>
                                <input type="text" name="b_publish" class="form-control" id="b_publish" placeholder="Input publisher's name" required="">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="b_date">Tahun Terbit</label>
                            <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == True) : ?>
                                <input type="date" name="b_date" class="form-control" id="b_date" required="" <?php echo 'value="' . $dateVal . '"'; ?>>
                            <?php else : ?>
                                <input type="date" name="b_date" class="form-control" id="b_date" required="">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select name="category" class="form-control" id="category" required="">
                            <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == True) : ?>
                                <option selected <?php echo 'value="' . $catVal . '"'; ?>><?php echo $catVal; ?></option>
                            <?php endif; ?>
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
                            <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == True) : ?>
                                <textarea class="form-control" name="desc" id="desc" rows="3"><?php echo '"' . $descVal . '"'; ?></textarea>
                            <?php else: ?>
                                <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <?php
                            if (isset($_SESSION['edit']) && $_SESSION['edit'] == True){
                                echo '<input name="save" type="submit" class="btn btn-warning btn-md float-right" value="Save"/>';
                            }
                            else {
                                echo '<input name="reset" type="reset" class="btn btn-danger btn-md float-right mx-1" value="Reset"/>';
                                echo '<input name="add" type="submit" class="btn btn-success btn-md float-right mx-1" value="Add"/>';
                            }
                            ?>
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