<?php require_once('include/Sessions.php') ?>
<?php require_once('include/functions.php') ?>
<?php
$ucheck = 0;
if (isset($_SESSION['user_id'])) {
    $ucheck = 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>RentalRides - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/organic.css">
</head>

<body>
<?php require('include/header.php'); ?>
    <div id="homepage-9">
        <div class="ps-page--my-account">
            <div class="ps-breadcrumb">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </div>
            <div class="ps-my-account">
                <div class="container">
                    <form class="ps-form--account ps-tab-root" action="signup.php" method="POST">
                        <ul class="ps-tab-list">
                            <li class="active"><a href="#sign-in">Login</a></li>
                            <li><a href="#register">Register</a></li>
                        </ul>
                        <div class="ps-tabs">
                            <div class="ps-tab active" id="sign-in">
                                <div class="ps-form__content">
                                    <h5>Log In Your Account</h5>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="email address" name="mail">
                                    </div>
                                    <div class="form-group form-forgot">
                                        <input class="form-control" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group submit">
                                        <button class="ps-btn ps-btn--fullwidth" name="login">Login</button>
                                    </div>
                                    <div class="form-group submit">
                                       &nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tab" id="register">
                                <div class="ps-form__content">
                                    <h5>Register An Account</h5>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Full Name" name="uname">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email address" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" placeholder="Password" name="pass">
                                    </div>
                                    <div class="form-group submit">
                                        <button class="ps-btn ps-btn--fullwidth" name="save">Signup</button>
                                    </div>
                                    <div class="form-group submit">
                                       &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="ps-footer ps-footer--2">
            <div class="container">
                <div class="ps-footer__content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 ">
                            <aside class="widget widget_footer">
                                <h4 class="widget-title">Developers</h4>
                                <ul class="ps-list--link">
                                    <li><a href="#">Astha Kumari</a></li>
                                    
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xl-4 col-lg-4  col-md-4 col-sm-6 col-6 ">
                            <aside class="widget widget_footer">
                                <h4 class="widget-title">Company</h4>
                                <ul class="ps-list--link">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="rent.html">Rent here</a></li>
                                    <li><a href="shipping.html">FAQs</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                            <aside class="widget widget_newletters">
                                <h4 class="widget-title">Newsletter</h4>
                                <form class="ps-form--newletter" action="#" method="get">
                                    <div class="form-group--nest">
                                        <input class="form-control" type="text" placeholder="Email Address">
                                        <button class="ps-btn">Subscribe</button>
                                    </div>
                                    <ul class="ps-list--social">
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="ps-footer__copyright">
                    <p>© 2021 RentalRides. All Rights Reserved</p>
                    <p><span>We Using Safe Payment For:</span><a href="#" disabled><img src="img/pay.svg" alt=""></a></p>
                </div>
            </div>
        </footer>
    </div>
    <div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/nouislider/nouislider.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/imagesloaded.pkgd.min.js"></script>
    <script src="plugins/masonry.pkgd.min.js"></script>
    <script src="plugins/isotope.pkgd.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/sticky-sidebar/dist/sticky-sidebar.min.js"></script>
    <script src="plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <!-- custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <?php
	if ( isset($_GET['invalid'])) {
				echo "<script>Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Username/Password Is Invalid.',
					footer: 'New User? Try To Signup'
				});</script>"; 
			}
	if(isset($_GET['RError']))
    {
			echo "<script>Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Email id already exists.',
			});</script>";
    }else if(isset($_GET['logfail'])){
			echo "<script>Swal.fire('You Have To Login First.')</script>"; 
		}
        else if(isset($_GET['fail'])){
			echo "<script>Swal.fire('Something Went Wrong.Please Try After Sometime.')</script>"; 
		}else{

		}
	?>
</body>

</html>