<?php require_once('../include/Sessions.php') ?>
<?php require_once('../include/functions.php') ?>
<?php ConfirmLogin(); ?>
<?php
$check=0;
if(isset($_POST['submit'])){
    $vname = $_POST['vname'];
    $vrate = $_POST['vrate'];
    $vtype = $_POST['vtype'];
    $vdisc = $_POST['vdisc'];
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    @$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152) {
       $errors[]='File size must be Less than 2 MB';
    }
    
    if(empty($errors)==true) {
        /* create new name file */
        $filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
        $extension  = pathinfo( $_FILES["image"]["name"], PATHINFO_EXTENSION ); // jpg
        $basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg

        $source       = $_FILES["image"]["tmp_name"];
        $destination  = "./images/{$basename}";
        
        /* move the file */
        move_uploaded_file( $source, $destination );
        date_default_timezone_set("Asia/Calcutta");
        $time = time();
        $dateTime = strftime('%Y-%m-%d %H:%M:%S ',$time);
        $status="free";
        $sql = "INSERT INTO vehicles (date, vname,vtype,vrate,image,vdisc,status,uid,uname,states,city) VALUES('$dateTime', '$vname','$vtype','$vrate','$basename','$vdisc','$status','$_SESSION[user_id]','$_SESSION[user_name]','$_POST[stt]','$_POST[city]')";
        $exec = Query($sql);
        if($exec){
            $check=1;
        }
        
    }else{
       $check=-1;
    }
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
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <title>RentalRides - New Vehicle</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="plugins/apexcharts-bundle/dist/apexcharts.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/cities.js"></script>
</head>

<body style="height: 100vh;">
    <header class="header--mobile">
        <div class="header__left">
            <button class="ps-drawer-toggle"><i class="icon icon-menu"></i></button><img src="" alt="">
        </div>
        <div class="header__center"><a class="ps-logo" href="#"><img src="../img/logo.svg" alt=""></a></div>
        <div class="header__right"><a class="header__site-link" href="../"><i class="icon-home"></i></a></div>
    </header>
    <aside class="ps-drawer--mobile">
        <div class="ps-drawer__header">
            <h4> Menu</h4>
            <button class="ps-drawer__close"><i class="icon icon-cross"></i></button>
        </div>
        <div class="ps-drawer__content">
            <ul class="menu">
                <li><a href="index.php" class="active"><i class="icon-car2"></i>My Vehicles</a></li>
                <li><a href="history.php"><i class="icon-history"></i>My Vehicles History</a></li>
                <li><a href="rides.html"><i class="icon-car"></i>My Rides</a></li>
                <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                <li><a href="logout.php"><i class="icon-exit"></i>Logout</a></li>
            </ul>
        </div>
    </aside>
    <div class="ps-site-overlay"></div>
    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-welcome">
                         
                        <div class="ps-block__right">
                            <p>Hello,<a href="#"><?php echo $_SESSION["user_name"]?></a></p>
                        </div>
                        
                    </div>
                    <div class="ps-block--earning-count"><small>Vehicles Earning</small>
                        <h3>₹12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                        <li><a href="index.php" class="active"><i class="icon-car2"></i>My Vehicles</a></li>
                        <li><a href="history.php"><i class="icon-history"></i>My Vehicles History</a></li>
                        <li><a href="rides.html"><i class="icon-car"></i>My Rides</a></li>
                        <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                        <li><a href="logout.php"><i class="icon-exit"></i>Logout</a></li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="../img/logo.svg" alt="">
                            <p>&copy;2021 RentalRides. <br/> All rights reversed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-main__wrapper">
            <header class="header--dashboard">
                <div class="header__left">
                </div>
                <div class="header__center">
                    <div class="header__left">
                        <h3 style="display: inline;">New Vehicles</h3>
                    </div>
                </div>
                <div class="header__right"><a class="header__site-link" href="../"><i class="icon-home"></i>&nbsp;<span style="margin-top: 8px;font-size: 15px;">Home</span></a></div>
            </header>
            <section class="ps-new-item">
                <form class="ps-form ps-form--new-product" action="add-vehicle.php" method="POST" enctype="multipart/form-data">
                    <div class="ps-form__content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <figure class="ps-block--form-box">
                                    <figcaption>General</figcaption>
                                    <div class="ps-block__content">
                                        <div class="form-group">
                                            <label>Vehicle Type<sup>*</sup>
                                            </label>
                                                <select class="ps-select" title="Type" name="vtype" required>
                                                    <option value="car">Car</option>
                                                    <option value="bike">Bike</option>
                                                    <option value="cycle">Cycle</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Name of Vehicle<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="text" placeholder="Enter product name..." name="vname" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Price per day<sup>*</sup>
                                            </label>
                                            <input class="form-control" type="number" placeholder="Enter Price per day" name="vrate" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Location<sup>*</sup>
                                            </label>
                                            <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control ps-select" required></select>
                                        </div>
                                        <div class="form-group">
                                            </label>
                                            <select id ="state" class="form-control ps-select" name="city" required></select>
                                        </div>
                                        <div class="form-group">
                                            <label>Product Summary<sup>*</sup>
                                            </label>
                                            <textarea class="form-control" rows="6" placeholder="Enter Vehicle description..." name="vdisc" required minlength="80"></textarea>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <figure class="ps-block--form-box">
                                    <figcaption>Product Images</figcaption>
                                    <div class="ps-block__content">
                                        <div class="form-group">
                                            <label>Product Thumbnail</label>
                                            <div class="form-group--nest">
                                                <input class="ps-btn ps-btn--sm" type="file" name="image" required>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__bottom"><a class="ps-btn ps-btn--black" href="products.html">Back</a>
                        <a href="#" class="ps-btn ps-btn--gray">Cancel</a>
                        <input class="ps-btn" type="submit" name="submit"></input>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/apexcharts-bundle/dist/apexcharts.min.js"></script>
    <script language="javascript">print_state("sts");</script>
    <!-- custom code-->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <?php
    if($check==1)
    {
			echo "<script>Swal.fire({
				icon: 'success',
				title: 'Hurray',
				text: 'Product has been added.',
			});</script>";
    }
    if($check==-1){
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'ops',
            text: '.$errors[0].',
        });</script>";
    }
    ?>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

</html>