<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden Leaf Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Header & Navigation -->
    <header>
        <ul class="nav justify-content-end first-navbar">
          <li class="nav-item">
            <a class="nav-link nav-level1" href="logreg.php">Login/Register</a>
          </li>
        </ul>
        
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.html">
              <h1>Hidden Leaf Library</h1>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            
          <div class="collapse navbar-collapse justify-content-end mt-1" id="navbarSupportedContent">
            <form class="form-inline mt-2">
              <ul class="nav justify-content-center">

                <li class="nav-item">
                  <a class="nav-link nav-level1" href="#">Collection</a>
                </li>

                <li class="nav-item">
                  <div class="btn-group dropdown">
                    <button type="button" class="btn dropdown-toggle nav-level1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Services
                    </button>
                  <div class="dropdown-menu" style="background-color: black">
                      <!-- Dropdown menu links -->
                      <a class="dropdown-item nav-level1" href="#">Request Purchase</a>
                      <a class="dropdown-item nav-level1" href="#">Research & Homework Help</a>
                      <a class="dropdown-item nav-level1" href="#">Book Discussion</a>
                    </div>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link nav-level1" href="#">About Us</a>
                </li>
              </ul>
            </form>
          </div>
        </nav>
    </header>
    
    <!-- Content-->
    <div class="container mt-3">

      <!-- Jumbotron -->
      <div class="banner container-md row justify-content-center">
        <div class="col">
            <!-- Jumbotron Carousel -->
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/carousel.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bx">
                      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus odit laborum voluptatibus cum? Totam adipisci tempora fugit cupiditate, eum reiciendis eaque ipsam. Veniam eligendi officia dignissimos! Iste, culpa quibusdam?</h5>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt eos, vero aperiam odit voluptatum veniam ducimus nobis enim. Harum at unde vero quas quae iure officia, illum quod maxime doloribus.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/carousel.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bx">
                      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus odit laborum voluptatibus cum? Totam adipisci tempora fugit cupiditate, eum reiciendis eaque ipsam. Veniam eligendi officia dignissimos! Iste, culpa quibusdam?</h5>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt eos, vero aperiam odit voluptatum veniam ducimus nobis enim. Harum at unde vero quas quae iure officia, illum quod maxime doloribus.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/carousel.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bx">
                      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus odit laborum voluptatibus cum? Totam adipisci tempora fugit cupiditate, eum reiciendis eaque ipsam. Veniam eligendi officia dignissimos! Iste, culpa quibusdam?</h5>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt eos, vero aperiam odit voluptatum veniam ducimus nobis enim. Harum at unde vero quas quae iure officia, illum quod maxime doloribus.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/carousel.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block bx">
                      <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. In repellendus odit laborum voluptatibus cum? Totam adipisci tempora fugit cupiditate, eum reiciendis eaque ipsam. Veniam eligendi officia dignissimos! Iste, culpa quibusdam?</h5>
                      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt eos, vero aperiam odit voluptatum veniam ducimus nobis enim. Harum at unde vero quas quae iure officia, illum quod maxime doloribus.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
      </div>
            
      <!-- Purpose -->
      <div class="container-md row mt-5 justify-content-center">
        <h2>Our Purpose</h2>
          <div class="card text-center cc">

            <div class="card-body">
              <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia, modi ea. Laudantium placeat ut repellat laborum, iure, illo nesciunt adipisci nam consequatur a ipsa sed laboriosam repudiandae! Excepturi, quam eligendi!</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, earum nesciunt reiciendis ea necessitatibus laudantium molestiae, quia numquam repellat a qui quibusdam ex amet ab ipsa, soluta quisquam inventore nihil!</p>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id temporibus officia consectetur dicta vitae rerum maxime vero sapiente, facere numquam fuga, expedita a blanditiis incidunt quas. Ea in tenetur explicabo.</p>
              <a href="#" class="btn go">Choose Collection</a>
            </div>

          </div> 
      </div>

      <!-- Services -->
      <div class="container-md row mt-5 justify-content-center">    

        <h2>Our Services</h2>
          <div class="card-deck">
            
              <a class="card cc" href="#">
                <img src="img/5294.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, velit repellat vel sit distinctio corrupti quibusdam minus quisquam reiciendis quis sequi pariatur, debitis dolor quasi asperiores alias exercitationem voluptates dolores.</h5>
                </div>
              </a>
             
              <a class="card cc" href="#">
                <img src="img/5294.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, velit repellat vel sit distinctio corrupti quibusdam minus quisquam reiciendis quis sequi pariatur, debitis dolor quasi asperiores alias exercitationem voluptates dolores.</h5>
                </div>
              </a>
  
              <a class="card cc" href="#">
                <img src="img/5294.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, velit repellat vel sit distinctio corrupti quibusdam minus quisquam reiciendis quis sequi pariatur, debitis dolor quasi asperiores alias exercitationem voluptates dolores.</h5>
                </div>
              </a>

          </div>

      </div>

      <!-- About -->
      <div class="container-md row mt-5 justify-content-center">
        
        <h2>About Us</h2>

          <div class="card cc">
            <div class="card-body">
              <div class="row">

                <div class="col-sm">
                  <h5>
                    Contact
                  </h5>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos laboriosam aliquam deleniti? Inventore quam reiciendis sunt ea, neque vero eum in nam repellendus dolore suscipit aliquam eos dolorum! Consectetur, eaque.
                  </p>
                </div>
    
                <div class="col-sm">
                  <h5>
                    Location & Hours
                  </h5>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos laboriosam aliquam deleniti? Inventore quam reiciendis sunt ea, neque vero eum in nam repellendus dolore suscipit aliquam eos dolorum! Consectetur, eaque.
                  </p>
                </div>

              </div>             
            </div>
          </div>
        
      </div>

    </div>

    <!-- Footer -->
    <?php 
      include "footer.php"
    ?>

    <!-- Back To Top Button -->
    
    
    
    <script src="js/backtotop.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>