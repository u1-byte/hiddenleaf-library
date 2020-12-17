    <!-- Header & Navigation -->
    <header>
      <?php
        if (isset($_SESSION['login'])){
          echo '
          <ul class="nav justify-content-end first-navbar">
            <li class="nav-item">
              <p class="nav-link nav-level1">' . $_SESSION["fname"] . '</p>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-level1" href="logout.php">Logout</a>
            </li>
          </ul>';
        }

        else {
          echo '
          <ul class="nav justify-content-end first-navbar">
            <li class="nav-item">
              <a class="nav-link nav-level1" href="logreg.php">Login/Register</a>
            </li>
          </ul>';
        }
        
      ?>
        
        
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="index.php">
              <h1>Hidden Leaf Library</h1>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            
          <div class="collapse navbar-collapse justify-content-end mt-1" id="navbarSupportedContent">
            <form class="form-inline mt-2">
              <ul class="nav justify-content-center">

                <li class="nav-item">
                  <a class="nav-link nav-level1" href="collection.php">Collection</a>
                </li>

                <li class="nav-item">
                  <div class="btn-group dropdown">
                    <button type="button" class="btn dropdown-toggle nav-level1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Services
                    </button>
                  <div class="dropdown-menu" style="background-color: black">
                      <!-- Dropdown menu links -->
                      <a class="dropdown-item nav-level1" href="requestForm.php">Request Purchase</a>
                      <a class="dropdown-item nav-level1" href="#">Research Help</a>
                      <a class="dropdown-item nav-level1" href="#">Book Workshop</a>
                    </div>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link nav-level1" href="about.php">About Us</a>
                </li>
              </ul>
            </form>
          </div>
        </nav>
    </header>