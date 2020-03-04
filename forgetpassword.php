<?php include('app_logic.php'); ?>
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
    <title>Reset Password</title>
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
						<li>
                            <a href="register.php">Signup</a>
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
                                <h2><strong>Reset password</strong></h2>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
									<?php include('messages.php'); ?>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
												<label>Your email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email*" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="padding-top:16px;">
                                        <div class="row" style="text-align:center;">
                                            <button type="submit" name="reset-password" class="login-btn">
                                                Send Email >>
                                            </button>
                                        </div>
                                    </div>
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
