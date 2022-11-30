
<header class="sticky-top">
  <nav class="navbar sticky-top navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" id="l-title"href="#">P-discuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 n-ul">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
            </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
              <a class="nav-link" href="parts/contactus.php">Contact Us</a>
            </li>
      </ul>
      <form class="d-flex ss-box" role="search">
        <input class="form-control me-2 s-box" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary me-2  s-button" type="submit">Search</button>
      </form>

      <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-outline-success mx-2  l-button" data-bs-toggle="modal" data-bs-target="#loginModal" type="button">Login</button>
  <button class="btn btn-outline-success l-button" data-bs-toggle="modal" data-bs-target="#signupModal" type="button">Signup</button>
</div>
    </div>
  </div>
</nav>

<!-- alerts -->
<?php
if(isset($_GET['signupsucess']) && $_GET['signupsucess']=="true"){
  
  echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
    <strong>Success!</strong> You have successfully signed up.You can login now.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
   }
?>
<!-- ********* -->
<?php
if(isset($_GET['signupsucess']) && $_GET['signupsucess']=="false"){
  
  echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <strong>Error!</strong> Email already in use.Use different email.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
   }
?>
<!-- ********* -->
<?php
if(isset($_GET['signupsucess']) && $_GET['signupsucess']=="pfalse"){
  
  echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  <strong>Error!</strong> Passwords do not match.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
   }
?>


  </header>
  <?php
   include 'parts/login.php';
   include 'parts/signup.php';
 
  
   ?>
<!-- <?php
   include 'parts/signuphandler.php';
   ?> -->