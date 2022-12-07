<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="./index.php">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu">
            <?php
              if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == 1)
              {
                echo '<li><a class="dropdown-item" href="../handling/logout.php">Odjava</a></li>';
                $_SESSION["currentURL"] = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              }
              else
              {
                echo '<li><a class="dropdown-item" href="./logIN.php">Prijavi se</a></li>';
                echo '<li><a class="dropdown-item" href="./signUP.php">Registruj se</a></li>';
              }
            ?>
          </ul>
          <?php 
            if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == 1)
            {
              echo '<li class="nav-item">
              <a class="nav-link" href="../tema.php">Napravi temu</a>
            </li>';
            }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>