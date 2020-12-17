<?php
    include "koneksi.php";
    $user_id = $_SESSION['id'];
    $user_level = $_SESSION['level'];

    if($user_level == 2){
        $query = "SELECT b.nama, b.penulis, b.kategori, s.nama FROM request_book r INNER JOIN book b ON r.book_id = b.id INNER JOIN status_request_book s ON r.status = s.id WHERE r.user_id = $user_id";
        $res = mysqli_query($con, $query);
        $num = 1;
        
        if (mysqli_num_rows($res) >= 1) {
            echo '<div></div>
            <div class="table-responsive-md"> 
            <table class="table table-bordered table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status</th>
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
                </tr>';
            }

            echo '
            </tbody>
            </table>
            </div>';
        }

        else{
            echo '<p> You not requested anything yet. </p>';
        }
        
    }
    
?>