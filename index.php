<?php require_once('include/Sessions.php') ?>
<?php require_once('include/functions.php') ?>
<?php
$ucheck=0;
if(isset($_SESSION['user_id'])){
 $ucheck=1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="this is vicky">
    <title>RentalRides - Rent Car, Bike, Cycle.</title>
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
        <div class="ps-home-banner">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                <div class="ps-banner--organic" data-background="img/banner1.jpg"><img src="img/banner1.jpg" alt="">
                    <div class="ps-banner__content">
                        <h3 style="color: #5fa30f;"><strong>Weekend Promotions</strong></h3>
                        <h3 style="color: white;">Happy Summer <br /> combo super discount <br /> up to<strong>40% Off</strong></h3><a class="ps-btn" href="products.php">Rent Now</a>
                    </div>
                </div>
                <div class="ps-banner--organic" data-background="img/banner1.jpg"><img src="img/banner1.jpg" alt="">
                    <div class="ps-banner__content">
                        <h3 style="color: #5fa30f;"><strong>Weekend Promotions</strong></h3>
                        <h3 style="color: white;">Happy Summer <br /> combo super discount <br /> up to<strong>40% Off</strong></h3><a class="ps-btn" href="products.php">Rent Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-site-features">
            <div class="container">
                <div class="ps-block--site-features ps-block--site-features-2">
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-rocket"></i></div>
                        <div class="ps-block__right">
                            <h4>Fast Checkout</h4>
                            <p>Pay and pick</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-sync"></i></div>
                        <div class="ps-block__right">
                            <h4>Easy Refunds</h4>
                            <p>No questions asked</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                        <div class="ps-block__right">
                            <h4>Secure Payment</h4>
                            <p>100% secure payment</p>
                        </div>
                    </div>
                    <div class="ps-block__item">
                        <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                        <div class="ps-block__right">
                            <h4>24/7 Support</h4>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-top-categories">
            <div class="container">
                <center><h2>Categories</h2></center>
                <div class="ps-home-promotion">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="products.php?type=car"><img src="img/catcar.jpg" alt=""></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="products.php?type=bike"><img src="img/catbike.jpg" alt=""></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="products.php?type=cycle"><img src="img/catcycle.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-deal-of-day">
            <div class="ps-container">
                <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>Most Popular</h3>
                        </div>
                    </div>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <?php
                            $query = "SELECT * FROM vehicles ORDER BY vrate DESC LIMIT 7";
                            $exec = Query($query);
                            while($vehicle = mysqli_fetch_assoc($exec)){
                                ?>
                                <div class="ps-product ps-product--inner">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="admin/images/<?php echo $vehicle['image']?>" alt="<?php echo $vehicle['vname']?>" style="width: 250px; height: 250px; object-fit: cover;"></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html"><?php echo $vehicle['vname']?></a>
                                            <div class="ps-product__vendor"><i class="icon-map-marker"></i><u><?php echo $vehicle['city']?>,
                                            <?php
                                            if (strlen($vehicle['states']) <=10) {
                                                echo $vehicle['states'];
                                              } else {
                                                echo substr($vehicle['states'], 0, 10) . '...';
                                              }
                                            ?>
                                            </u></div>
                                            <p class="ps-product__price sale">₹<?php echo $vehicle['vrate']?>/day</p>
                                            <center><a class="ps-btn" style="width: 100%; text-align: center;font-size: 13px;padding-left: 25px;padding-right: 25px;" href="product.php?id=<?php echo $vehicle['vid']?>">Rent Now</a></center>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
           <!---------------------------------------------> 
           <h3>&nbsp;   </h3>
           <div class="ps-deal-of-day">
            <div class="ps-container">
                <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>New Arrival</h3>
                        </div>
                    </div><a href="shop-default.html">View all</a>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                        <?php
                            $query = "SELECT * FROM vehicles ORDER BY date DESC LIMIT 7";
                            $exec = Query($query);
                            while($vehicle = mysqli_fetch_assoc($exec)){
                                ?>
                                <div class="ps-product ps-product--inner">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="admin/images/<?php echo $vehicle['image']?>" alt="<?php echo $vehicle['vname']?>" style="width: 250px; height: 250px; object-fit: cover;"></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html"><?php echo $vehicle['vname']?></a>
                                            <div class="ps-product__vendor"><i class="icon-map-marker"></i><u><?php echo $vehicle['city']?>,
                                            <?php
                                            if (strlen($vehicle['states']) <=10) {
                                                echo $vehicle['states'];
                                              } else {
                                                echo substr($vehicle['states'], 0, 10) . '...';
                                              }
                                            ?>
                                            </u></div>
                                            <p class="ps-product__price sale">₹<?php echo $vehicle['vrate']?>/day</p>
                                            <center><a class="ps-btn" style="width: 100%; text-align: center;font-size: 13px;padding-left: 25px;padding-right: 25px;" href="product.php?id=<?php echo $vehicle['vid']?>">Rent Now</a></center>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
           <!-------------------------------------------------->
           <h3>&nbsp;   </h3>
           <div class="ps-deal-of-day">
            <div class="ps-container">
                <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>Cars</h3>
                        </div>
                    </div><a href="shop-default.html">View all</a>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                    <?php
                            $query = "SELECT * FROM vehicles WHERE vtype='car' ORDER BY date DESC LIMIT 7";
                            $exec = Query($query);
                            while($vehicle = mysqli_fetch_assoc($exec)){
                                ?>
                                <div class="ps-product ps-product--inner">
                                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="admin/images/<?php echo $vehicle['image']?>" alt="<?php echo $vehicle['vname']?>" style="width: 250px; height: 250px; object-fit: cover;"></a>
                                    </div>
                                    <div class="ps-product__container">
                                        <div class="ps-product__content"><a class="ps-product__title" href="product-default.html"><?php echo $vehicle['vname']?></a>
                                            <div class="ps-product__vendor"><i class="icon-map-marker"></i><u><?php echo $vehicle['city']?>,
                                            <?php
                                            if (strlen($vehicle['states']) <=10) {
                                                echo $vehicle['states'];
                                              } else {
                                                echo substr($vehicle['states'], 0, 10) . '...';
                                              }
                                            ?>
                                            </u></div>
                                            <p class="ps-product__price sale">₹<?php echo $vehicle['vrate']?>/day</p>
                                            <center><a class="ps-btn" style="width: 100%; text-align: center;font-size: 13px;padding-left: 25px;padding-right: 25px;" href="product.php?id=<?php echo $vehicle['vid']?>">Rent Now</a></center>
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
           
        <!-------------------------------------------------->
        <!--<div class="ps-client-say bg--cover" data-background="img/banner1.jpg">
            <div class="container">
                <div class="ps-section__header">
                    <h3 style="color: white;">What client say</h3>
                    <div class="ps-section__nav"><a class="ps-carousel__prev" href=".ps-carousel--testimonials"><i class="icon-chevron-left" style="color: white;"></i></a><a class="ps-carousel__next" href=".ps-carousel--testimonials"><i class="icon-chevron-right" style="color: white;"></i></a></div>
                </div>
                <div class="ps-section__content">
                    <div class="ps-carousel--testimonials owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="2" data-owl-duration="1000" data-owl-mousedrag="on">
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="img/users/vicky.jpg" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>Vikash Chaudhary<span>Senior Developer</span></h4>
                                <p>Using this platform is so easy and smooth for any kind of rental Services. Response form customer care is soo good.</p>
                            </div>
                        </div>
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="img/users/teen.jpg" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>Teena Sharma<span>Market research expert</span></h4>
                                <p>I travel a lot and when i came to know that this website provide car rental it make my trips really easy.</p>
                            </div>
                        </div>
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="img/users/abhi.jpg" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>Abhinav<span>Head at webersconnect</span></h4>
                                <p>Renting car is soo easy and convenient on this website and the offer this website provide is incomparable</p>
                            </div>
                        </div>
                        <div class="ps-block--testimonial">
                            <div class="ps-block__header"><img src="img/users/sid.jpg" alt=""></div>
                            <div class="ps-block__content"><i class="icon-quote-close"></i>
                                <h4>Siddhant Choudhary<span>Lead at Gamefy</span></h4>
                                <p>I came to this website by mistake and now it is part of my life. I have rented approx 100+ car from this website till now. Services are dope.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <?php require("include/footer.php") ?>
    </div>
    <div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
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
</body>

</html>