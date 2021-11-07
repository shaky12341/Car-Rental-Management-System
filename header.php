<header class="header header--organic" data-sticky="true">
        <div class="header__top">
            <div class="container">
                <div class="header__left">
                    <a class="ps-logo" style="display: block;" href="index.php"><img src="img/logo.svg" alt="" width="250px"></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="products.php" method="get" name="search">
                        <div class="form-group--icon"><i class="icon-chevron-down"></i>
                            <select class="form-control" name="type">
                                <option value="1">All</option>
                                <option value="car">Cars</option>
                                <option value="bike">Bikes</option>
                                <option value="cycle">Cycles</option>
                            </select>
                        </div>
                        <input class="form-control" type="text" placeholder="Your City..."  name="city">
                        <button type="submit">Search</button>
                    </form>
                </div>
                <div class="header__right" style="display: block;">
                    <div class="header__actions">
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            <div class="ps-block__right"><a href="admin/index.php" style="top: 8px;">
                            <?php
                            if($ucheck==1){
                                echo $_SESSION['user_name'];
                            }else{
                                echo "Login / Register";
                            }
                            ?>
                            </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="container">
                <div class="navigation__right">
                    <ul class="menu menu--organic">
                        <li class=""><a href="index.php">Home</a>
                        </li>
                        <li class=""><a href="products.php?type=car">Cars</a>
                        </li>
                        <li class=""><a href="products.php?type=bike">Bikes</a>
                        </li>
                        <li class=""><a href="products.php?type=cycle">Cycles</a>
                        </li>
                    </ul>
                    <div class="ps-block--header-hotline inline">
                        <p><a href="admin/index.php"><u><i class="icon-car" style="font-size: 30px;"></i><strong></strong>Rent here</strong></u></a></p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <header class="header header--mobile organic" data-sticky="true">
        <div class="navigation--mobile">
            <div class="navigation__left"><a class="ps-logo" href="index.html"><img src="img/logo.svg" alt="" width="200px"></a></div>
            <div class="ps-block--user-header">
                <div class="ps-block__left"><i class="icon-user"></i></div>
                <div class="ps-block__right">
                    <a href="my-account.html" style="top: 8px;">
                            <?php
                            if($ucheck==1){
                                echo $_SESSION['user_name'];
                            }else{
                                echo "Login / Register";
                            }
                            ?></a>
                    </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Your City...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>