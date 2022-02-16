<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Hotel SunRise</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contactUs.php">Contact Us</a>
                    </li>
                </ul>
                <?php if(isset($_SESSION['u_id'])): ?>
                <div class="btn-group">
                    <?php 
           echo '<button type="button" class="btn btn-outline-info rounded-pill dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">' . $_SESSION['u_email'] . '</button>';
                    ?>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="mybooking.php">My Booking</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-primary" href="includes/_logout.php">Logout</a></li>
                    </ul>
                </div>
                <?php else: ?>
                <div>
                    <button type="button" class="btn btn-outline-info rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                    <button type="button" class="btn btn-outline-info rounded-pill" data-bs-toggle="modal"
                        data-bs-target="#signupModal">Sign-up</button>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>

<?php include '_loginModal.php'; ?>
<?php include '_signupModal.php'; ?>

<?php
if (isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false")
{
  $showError = $_GET['error'];
  echo  '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  ' . $showError . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
{
  echo  '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <strong>Success!</strong> Your account is created now you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
else if (isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false")
{
  $showError = $_GET['error'];
  echo  '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
  ' . $showError . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>