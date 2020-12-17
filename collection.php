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
      session_start();
      include "navbar.php";
    ?>
    
    <div class="row mt-3 mx-3">
        <div id="filter_block" class="col-2">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                Cras justo odio
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Collapsible Group Item #2
                        </button>
                    </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Collapsible Group Item #3
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col mx-2">
            <nav class="navbar navbar-light bg-light justify-content-between">
                <div class="form-inline justify-content-start">
                    <button id="filter_btn" class="btn btn-dark mr-sm-2" role="button" onclick="showFilter()">Filter</button>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

                <?php
                    if (isset($_POST['col_mode'])){
                        //delete borrow record
                        
                    }

                    if (!isset($_POST['bor_mode']) || isset($_POST['col_mode'])){
                        echo '
                        <form class="form-inline" method="POST" action="">
                            <input class="btn btn-info form-control mr-sm-2" type="submit" name="bor_mode" value="I want to borrow some books">
                        </form>';
                    }

                    elseif(isset($_POST['bor_mode'])){
                        echo '
                        <div class="form-inline justify-content-end">
                            <button id="cart_btn" class="btn btn-primary mr-sm-2" role="button" onclick="showCart()">Check Cart</button>
                            <form class="form-inline" method="POST" action="">
                                <input class="btn btn-danger form-control mr-sm-2" type="submit" name="col_mode" value="Cancel">
                            </form>
                        </div>';
                    }

                ?>
                
            </nav>

            <div class="row">
                <div class="col-md-3">
                    <div class="card py-2 h-100">
                    <img src="img/5294.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rp299.000</h5>
                        <p class="card-text">Sony MDR-XB55AP Headphone In-Ear EXTRA BASS - Black</p>
                        <a href="#" class="btn btn-primary">Purchase</a>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div id="cart_block" class="col-2">
            <div class="col-sm">
                <div class="card" style="width: auto;">
                    <img src="img/5294.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rp2.999.000</h5>
                        <p class="card-text">Sony WF-1000XM3 Truly Wireless Handsfree Noise Cancelling Battery up to 24h - Black SONY TWS</p>
                        <a href="#" class="btn btn-primary">Purchase</a>
                    </div>
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
