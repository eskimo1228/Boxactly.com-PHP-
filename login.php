<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: dashboard.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $username_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: dashboard.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $username_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146833685-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146833685-1');
</script>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login to access your storage solutions.">
    <!-- ========== Page Title ========== -->
    <title>Welcome back to Boxactly. Please login to continue to your storage solution.</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <script src="https://widget.prefinery.com/widget/v2/20ydlte3.js" async defer></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav button theme">
                    <ul>
                        <li>
                            <a href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" class="logo logo-display" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">

                        <li>
                            <a class="smooth-menu" href="https://www.boxactly.com/book.html">Book</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="https://www.boxactly.com/host.html">Host a Space</a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area text-small shadow dark text-light bg-fixed" style="background-image: url(assets/img/2440x1578.png);">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="info col-md-3">
                        </div>
                        <div class="form col-md-6 shadow-light" style="background-color:white;">
                            <div class="form-info">
                                <h2><strong>Welcome back. Please login to continue.</strong></h2>
                                <?php if(isset($_GET['flag'])){ ?>
                                <span class="alert-success" style="font-size:20px;">
                                Your account was created successfully.
                                </span>
                                <?php }?>
                                <?php if(isset($_GET['new_pass'])){ ?>
                                <span class="alert-success" style="font-size:20px;">
                                You have changed password successfully.
                                </span>
                                <?php }?>
                                <?php if(isset($_GET['email'])){ ?>
                                <h5 style="color:#000">We have sent you message to 
                                <strong style="color:red;"><?php echo $_GET['email'] ?></strong> to reset your password.&nbsp;Please check your email.
                                </h5>
                                <?php }?>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input name="email" class="form-control" placeholder="Email*" type="text">
                                                <span class="alert-danger"><?php echo $username_err; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input name="password" class="form-control" placeholder="Password*" type="password">
                                                <span class="alert-danger"><?php echo $password_err; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="forgetpassword.php" style="float: right;color: blue;">Forgot your password?</a>
                                    <div class="col-md-12" style="padding-top:16px;">
                                        <div class="row" style="text-align:center;">
                                            <button type="submit">
                                                Find a Safe Place for your Things >>
                                            </button>
                                        </div>
                                    </div>
                                    <a href="register.php" style="float: right;color: blue;">Sign up</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wavesshape">
                    <img src="assets/img/waves-shape.svg" alt="Shape">
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->







    <!-- Start Footer
    ============================================= -->

    <footer>
      <!---
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item about">
                            <img src="assets/img/logo.png" alt="Logo">
                            <p>
                                Boxactly is exactly what you need to make space work for you.
                            </p>


                            <h5>Follow Us</h5>
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Discover</h4>
                            <ul>
                                <li>
                                    <a href="#">Explore Spaces</a>
                                </li>
                                <li>
                                    <a href="#">Safety and Trust</a>
                                </li>
                                <li>
                                    <a href="#">Payments made easy</a>
                                </li>
                                <li>
                                    <a href="#">Our History</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    --->
                    <!---
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>About</h4>
                            <ul>

                                <li>
                                    <a href="#">News</a>
                                </li>

                                <li>
                                    <a href="#">Careers</a>
                                </li>
                                <li>
                                    <a href="#">Policies</a>
                                </li>
                                <li>
                                    <a href="#">Privacy and Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    --->
<!---
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <p>
                                 Please contact us.  We love to hear from you.
                            </p>
                            <div class="address">
                                <ul>

                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>jenn@boxactly.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>1-888-BOX-BUZZ</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                          <img src="assets/img/logo.png" alt="Logo">
                          <p>
                              <i>Make space work for you.</i>
                          </p>

                        </div>
                        <div class="col-md-6 text-right link">
                            <ul>
                                <li>
                                     <a href="mailto:jenn@boxactly.com">Contact</a>
                                </li>
                                <li>
                                  <a href="">Terms</a>
                                </li>
                                <li>
                                  <a href="">Privacy</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center">
                    <p>&copy; Copyright 2018, Boxactly, Inc. All Rights Reserved.</p>
                  </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
