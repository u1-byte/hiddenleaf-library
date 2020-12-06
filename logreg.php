<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Page - Hidden Leaf Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
        include "navbar.php";
    ?>

    <div class="col-md-6 mx-auto my-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="login-tab" href="#login" data-toggle="tab" role="tab">LOGIN</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="register-tab" href="#register" data-toggle="tab" role="tab">REGISTER</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel">
                <div class="card border-dark">
                    <div class="card-header">
                        <h3 class="mb-0 my-2">Login Form</h3>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" method="POST" action="login.php">
                            <div class="form-group">
                                <label for="username">Card ID</label>
                                <input type="text" name="card_id" class="form-control" id="card_id" placeholder="Input your library card ID" required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Input your password" required="">
                            </div>
                            <div class="form-group">
                                <input name="login" type="submit" class="btn btn-dark btn-md float-right" value="Login"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel">
                <div class="card border-dark">
                    <div class="card-header">
                        <h3 class="mb-0 my-2">Register Form</h3>
                    </div>
                    <div class="card-body">
                        
                        <form class="form" role="form" autocomplete="off" method="POST" action="register.php">
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
                                <input name="register" type="submit" class="btn btn-dark btn-md float-right" value="Register">
                            </div>
                        </form>
                    </div>
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