<?php require_once('../include/Sessions.php') ?>
<?php require_once('../include/functions.php') ?>
<?php ConfirmLogin(); ?>
<?php
$del = 0;
$query = "SELECT * FROM cart WHERE user_id='$_SESSION[user_id]'";
$exec = Query($query);
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
    <title>RentalRides - My Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="plugins/apexcharts-bundle/dist/apexcharts.css">
    <link rel="stylesheet" href="css/style.css">
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
                <li><a href="index.php"><i class="icon-car2"></i>My Vehicles</a></li>
                <li><a href="cart.php" class="active"><i class="icon-history"></i>Cart</a></li>
                <li><a href="logout.php"><i class="icon-exit"></i>Logout</a></li>
            </ul>
        </div>
    </aside>
    <div class="ps-site-overlay"></div>
    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">

                        <div class="ps-block__right">
                            <p>Hello,<a href="#"><?php echo $_SESSION["user_name"] ?></a></p>
                        </div>

                    </div>
                    <div class="ps-block--earning-count"><small>Vehicles Earning</small>
                        <h3>₹12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li><a href="index.php"><i class="icon-car2"></i>My Vehicles</a></li>
                            <li><a href="cart.php" class="active"><i class="icon-history"></i>Cart</a></li>
                            <li><a href="logout.php"><i class="icon-exit"></i>Logout</a></li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="../img/logo.svg" alt="">
                            <p>&copy;2021 RentalRides. <br /> All rights reversed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none;" id="userid"><?php echo $_SESSION['user_id']; ?></div>

        <div class="ps-main__wrapper">
            <header class="header--dashboard">
                <div class="header__left">
                </div>
                <div class="header__center">
                    <div class="header__left">
                        <h3 style="display: inline;">My Cart</h3>
                    </div>
                </div>
                <div class="header__right"><a class="header__site-link" href="../"><i class="icon-home"></i>&nbsp;<span style="margin-top: 8px;font-size: 15px;">Home</span></a></div>
            </header>
            <section class="ps-items-listing">
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>V_Name</th>
                                    <th>Type</th>
                                    <th>Price/Day</th>
                                    <th>Days</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                <?php
                                $sno = 0;
                                while ($item = mysqli_fetch_assoc($exec)) {
                                    $quer = "SELECT * FROM vehicles WHERE vid='$item[item_id]'";
                                    $exe = Query($quer);
                                    $veh = mysqli_fetch_assoc($exe);
                                    $sno++;
                                    $vname = $veh['vname'];
                                    $vtype = $veh['vtype'];
                                    $vrate = $veh['vrate'];
                                    $quant = $item['quant'];
                                    $total = $vrate * $quant;
                                ?>
                                    <tr>
                                        <td><?php echo $sno ?></td>
                                        <td><?php echo $vname ?></td>
                                        <td><?php echo $vtype ?></td>
                                        <td><?php echo $vrate ?></td>
                                        <td><?php echo $quant ?></td>
                                        <td><?php echo $total ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <div class="ps-section__actions"><button class="ps-btn success" id="checkout">Checkout</button></div>

                    </div>
                </div>
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
    <!-- custom code-->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <?php
    if ($del == 1) {
        echo "<script>Swal.fire({
				icon: 'success',
				title: 'Hurray',
				text: 'Item has be deleted.',
			});</script>";
    }
    ?>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script>
        $(document).ready(function() {
            // Get value on button click and show alert
            $("#checkout").click(function() {
                var action = 'check';
                var userid = $('#userid').text();
                $.ajax({
                    url: "checkout.php",
                    method: "POST",
                    data: {
                        action: action,
                        user: userid,
                    },
                    success: function(output) {
                        $('#table').html(" ");
                        Swal.fire({
                            icon: 'success',
                            title: 'hurray',
                            text: 'Order has been placed',
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>