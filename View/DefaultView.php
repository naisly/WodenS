<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:57
 *
 * ==================
 * Doctype view, header view, getting items,
 * filter, footer
 * ==================
 */
class DefaultView
{
    /*
     * MVC constructor
     * with AdminModel
     *
     * @private $model
     */
    private $model;
    public function __construct(DefaultModel $model)
    {
        $this->model = $model;
    }
    /*
     * Doctype View includes Doctype, html, head,
     * body TAGS, specified for each page
     */
    final public function DoctypeView( $page )
    {
        echo '<!DOCTYPE html>
                <html>
                <head>';
        if ( $page == 'subdescription'){
            echo '<title>Woden S: ' . $this->model->getOriginalName(0) . '</title>';
        } else {
            echo '<title>Woden S</title>';
        }
        echo       '<!-- HTML 5 markup and encoding utf-8 -->
                    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
                    <!-- For Internet Explorer -->
                    <meta http-equiv="X-UA-Compatible" content="IE=EDge">
                    <!-- Bootstrap framework -->
                    <!-- Latest compiled and minified CSS -->
                    <meta name="viewport" content="width=device-width, initial-scale=1">';

        if( $page == '2nd level of input' ) {
            echo   '<link rel="stylesheet" href="../css/bootstrap.css">
                    <link rel="shortcut icon" href="../images/favicon.ico" />
                    <script src="../js/jquery-min.js"></script>
                    <!-- bxSlider Javascript file -->
                    <script src="../js/bootstrap.min.js"></script>
                    <link href="../css/styles.css" rel="stylesheet" type="text/css">
                    <!-- Optional theme -->
                    <link rel="stylesheet" href="../css/bootstrap-theme.css">
                    <!-- Files of Styles -->
                    ';
        } else if( $page == 'business-laptops' || $page == 'education-phones' || $page == 'education-laptops' ){
            echo   '<link rel="stylesheet" href="../../css/bootstrap.css">
                    <link rel="shortcut icon" href="../../images/favicon.ico" />
                    <script src="../../js/jquery-min.js"></script>
                    <!-- bxSlider Javascript file -->
                    <script src="../../js/bootstrap.min.js"></script>
                    <link href="../../css/styles.css" rel="stylesheet" type="text/css">
                    <!-- Optional theme -->
                    <link rel="stylesheet" href="../../css/bootstrap-theme.css">
                    <!-- Files of Styles -->
                    ';
        }
        else {
            echo   '<link rel="stylesheet" href="css/bootstrap.css">
                    <link rel="shortcut icon" href="images/favicon.ico" />
                    <link href="css/styles.css" rel="stylesheet" type="text/css">
                    <!-- Optional theme -->
                    <link rel="stylesheet" href="css/bootstrap-theme.css">
                    <!-- Files of Styles -->';
        }
        if($page == 'devices'){
            echo '<link href="css/devices.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'index'){
            echo '<link href="css/jquery.bxslider.css" rel="stylesheet">
                   <script src="js/jquery-min.js"></script>
                   <!-- bxSlider Javascript file -->
                   <script src="js/bootstrap.min.js"></script>
                   <!-- bxSlider Javascript file -->
                  <script src="js/jquery.bxslider.min.js"></script>';
        } else if ($page == 'notebooks'){
            echo '<link href="css/notebooks.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'phones'){
            echo '<link href="css/phones.css" rel="stylesheet" type="text/css">' .
                '<link rel="stylesheet" href="css/default.css">' .
                '<link rel="stylesheet" href="css/animate.css">';
        } else if ($page == 'support'){
            echo '<link href="css/support.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'TV'){
            echo '<link href="css/tv.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'login' || $page == 'admin' || $page == 'support-thanks'){
            echo '<link href="css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'subdescription'){
            echo '<link href="css/jquery.bxslider.css" rel="stylesheet">
                   <script src="js/jquery-min.js"></script>
                   <!-- bxSlider Javascript file -->
                   <script src="js/bootstrap.min.js"></script>
                   <!-- bxSlider Javascript file -->
                  <script src="js/jquery.bxslider.min.js"></script>
                  <link href="css/subdescription.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'search'){
            echo '<link href="css/login.css" rel="stylesheet" type="text/css">
                  <link href="css/subdescription.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'store'){
            echo '<link href="css/store.css" rel="stylesheet" type="text/css">
                  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
                  <link href="css/jquery.bxslider.css" rel="stylesheet">
                  <script src="js/jquery-min.js"></script>
                  <!-- bxSlider Javascript file -->
                  <script src="js/bootstrap.min.js"></script>
                  <!-- bxSlider Javascript file -->
                  <script src="js/jquery.bxslider.min.js"></script>';
        }  else if ($page == 'order'){
            echo '<link href="css/checkorder.css" rel="stylesheet" type="text/css">';
        }  else if ($page == 'status-order'){
            echo '<link href="css/status-order.css" rel="stylesheet" type="text/css">
                  <link href="css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'profile'){
            echo '<link href="css/profile.css" rel="stylesheet" type="text/css">';
        }  else if ($page == 'account-order' || $page == 'account' || $page == 'account-billing') {
            if($page == 'account'){
                echo '<link href="css/account.css" rel="stylesheet" type="text/css">';
            }
            if ($page == 'account-billing'){
                echo '<link href="css/account-billing.css" rel="stylesheet" type="text/css">';
            }
            echo '<link href="css/account-order.css" rel="stylesheet" type="text/css">
                  <link href="css/profile.css" rel="stylesheet" type="text/css">
                  <script src="js/jquery-min.js"></script>';
        } else if($page == 'financing'){
            echo '<link href="css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'education-laptops'){
            echo '<link href="../../css/education-laptops.css" rel="stylesheet" type="text/css">
                  <link href="../../css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'education-phones'){
            echo '<link href="../../css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'business-laptops'){
            echo '<link href="../../css/business-laptops.css" rel="stylesheet" type="text/css">
                  <link href="../../css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/financing.css" rel="stylesheet" type="text/css">';
        }
        else {
            echo '<link rel="stylesheet" href="css/default.css" />' .
                '<link rel="stylesheet" href="css/animate.css" />';
        }

        echo '</head>
            <body onload="preload_page()">';
    }
    /*
     * Main navbar Menu for all
     * pages
     */
    final public function headerView( $page )
    {
        echo   '<nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>';

        if ($page == '2-nd level input'){
            echo       '<a class="navbar-brand white-link" href="../index.php">
                            <img alt="Brand" src="../images/default.png">';
            echo '</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="../phones-all.php" class="white-link">Phones <span class="sr-only">(current)</span></a></li>
                            <li><a href="../laptops.php" class="white-link">Laptops</a></li>
                            <li><a href="../devices.php" class="white-link">Devices</a></li>
                            <li><a href="../tv.php" class="white-link">TV</a></li>
                            <li><a href="../support.php" class="white-link">Support</a></li>
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle white-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart <span class="caret"></span></a>
                        <ul class="dropdown-menu">';
            if (isset($_SESSION['login_user'])) {
                echo '<li><a href="../logout.php">';
                echo 'Logout(' . $_SESSION['login_user'] . ')</a></li>';
                session_write_close();
            } else {
                echo '<li><a href="../register.php">Register</a></li>';
                echo '<li><a href="../login.php">';
                echo 'Login</a></li>';
                session_write_close();
            }
            echo '
                                                            <li role="separator" class="divider"></li>
                                                            <li class="dropdown-header">Products</li>';
            if (isset($_SESSION['login_user'])) {
                echo '<li><a href="../cart.php">Cart: ' . $this->model->getAPrice() . '$';
                echo '<li><a href="#">' . $this->model->getAItems() . ' items</a>';
            } else {
                echo ' <li><a href="#">Login to see your cart</a></li>';
            }
            echo '
                        </ul>
                    </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>';
        } else if($page == 'business' || $page == 'education'){
            echo '<a class="navbar-brand white-link" href="index.php">
                            <img alt="Brand" src="../../images/default.png">';
            echo '</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="../../phones-all.php" class="white-link">Phones <span class="sr-only">(current)</span></a></li>
                            <li><a href="../../laptops.php" class="white-link">Laptops</a></li>
                            <li><a href="../../devices.php" class="white-link">Devices</a></li>
                            <li><a href="../../tv.php" class="white-link">TV</a></li>
                            <li><a href="../../support.php" class="white-link">Support</a></li>
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle white-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart <span class="caret"></span></a>
                        <ul class="dropdown-menu">';
            if (isset($_SESSION['login_user'])) {
                echo '<li><a href="../../logout.php">';
                echo 'Logout(' . $_SESSION['login_user'] . ')</a></li>';
                session_write_close();
            } else {
                echo '<li><a href="../../register.php">Register</a></li>';
                echo '<li><a href="../../login.php">';
                echo 'Login</a></li>';
                session_write_close();
            }
            echo '
                                                            <li role="separator" class="divider"></li>
                                                            <li class="dropdown-header">Products</li>';
            if (isset($_SESSION['login_user'])) {
                echo '<li><a href="../../cart.php">Cart: ' . $this->model->getAPrice() . '$';
                echo '<li><a href="#">' . $this->model->getAItems() . ' items</a>';
            } else {
                echo ' <li><a href="#">Login to see your cart</a></li>';
            }
            echo '
                        </ul>
                    </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>';
        } else {
            echo '<a class="navbar-brand white-link" href="index.php">
                            <img alt="Brand" src="images/default.png">';
            echo '</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="phones-all.php" class="white-link">Phones <span class="sr-only">(current)</span></a></li>
                            <li><a href="laptops.php" class="white-link">Laptops</a></li>
                            <li><a href="devices.php" class="white-link">Devices</a></li>
                            <li><a href="tv.php" class="white-link">TV</a></li>
                            <li><a href="support.php" class="white-link">Support</a></li>
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle white-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart <span class="caret"></span></a>
                        <ul class="dropdown-menu">';
            if (isset($_SESSION['login_user'])) {
                echo '<li><a href="logout.php">';
                echo 'Logout(' . $_SESSION['login_user'] . ')</a></li>';
                session_write_close();
            } else {
                echo '<li><a href="register.php">Register</a></li>';
                echo '<li><a href="login.php">';
                echo 'Login</a></li>';
                session_write_close();
            }
            echo '
                                                            <li role="separator" class="divider"></li>
                                                            <li class="dropdown-header">Products</li>';
            if (isset($_SESSION['login_user'])) {
                echo '<li><a href="cart.php">Cart: ' . $this->model->getAPrice() . '$';
                echo '<li><a href="#">' . $this->model->getAItems() . ' items</a>';
            } else {
                echo ' <li><a href="#">Login to see your cart</a></li>';
            }
            echo '
                        </ul>
                    </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>';
        }
    }
    public function getUI( $category, $category_table ){
        $this->getItemsNames( $category );
        $this->getFilterMenu( $category_table );
        $this->getItems( $category_table );
        $this->actionGetFooter( $category );
    }
    /*
     * Getting distinct items names
     */
    private function getItemsNames( $category )
    {
        echo "<div class='items-row pointer'>
                  <div class='col-md-3'></div>
                       <div class='col-md-6 items-align'>
                            <ul class='text-align'>
                                <a style='font-size: 18px; margin-right: 15px; color: #e4e4e4; text-decoration: none;' class='categories-list' href='$category.php'>All</a>";
        foreach ($this->model->distinct_categories as $value => $key) {
            echo "<a style='font-size: 18px; margin-right: 15px; color: #e4e4e4; text-decoration: none;' class='categories-list' href='{$this->model->distinct_categories[$value]}-{$category}.php'>" . $this->model->distinct_categories[$value] . "</a>";
        }
        echo '               </ul>
                        </div>
                   </div>
                   <div class="col-md-3"></div>
              </div>';
    }
    /*
     * Filter menu
     * of product pages
     */
    private function getFilterMenu( $item )
    {
        $i = 0;
        $n = 0;
        /*echo '<div class="row">
                  <div class="col-md-3">
                      <form action="apple-index.php" method="post">
                           <h class="search-item">Items: <br/></h>';
        $k = 0;
        while ($k < count($this->model->distinct_product_names)) {
            echo '<input type="checkbox" name="array' . $k . '" id="array' . $k . '" value="' . $this->model->getDistinctProductNames($k) . '"';
            if (isset($_POST['array' . $k])) echo "checked='checked'";
            echo "/>";
            echo '<em> ' . $this->model->getDistinctProductNames($k) . '</em><br />';
            $k++;
        }*/
        echo '<div class="container">
                  <div class="row">
                       <div class="col-md-3" style="border: 1px solid #e4e4e4; border-top: none;">
                            <form action="' . $item . '.php" method="post">
                            <div class="row">
                                <div class="col-md-12 bg-item top-margin" style="margin-top: 0px;">
                                    <h class="search-item">Items: <br/></h>
                                 </div>
                            </div>';
        $k = 0;
        while ($k < count($this->model->distinct_product_names)) {
            echo '<input type="checkbox" name="array' . $k . '" id="array' . $k . '" value="' . $this->model->getDistinctProductNames($k) . '"';
            if (isset($_POST['array' . $k])) echo "checked='checked'";
            echo "/>";
            echo "<em> " . $this->model->getDistinctProductNames($k);
            if($this->model->getQuantityOfItems($k) == 0){
                echo '</em><br />';
            } else {
                echo '(' . $this->model->getQuantityOfItems($k) . ')</em><br />';
            }
            $k++;
        }
        echo '
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">Price: </h>
                             </div>
                       </div>
                                <h class="search-item">Min: </h> <input style="margin-left: 4px;" type="text" name="min" value="';
        if (isset($_POST['min'])) echo $_POST['min'];
        echo '"><br />
                                <h class="search-item">Max:</h> <input type="text" name="max" value="';
        if (isset($_POST['max'])) echo $_POST['max'];
        echo '"><br />
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">Sort by price: </h>
                             </div>
                       </div>
                                    <input type="radio" name="sort_by_price" value="price " /> By highest <br />
                                    <input type="radio" name="sort_by_price" value="price DESC" /> By lowest <br />
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">Sort by time of adding: </h>
                             </div>
                       </div>
                                    <input type="radio" name="sort_by_time" value="time" /> By latest <br />
                                    <input type="radio" name="sort_by_time" value="time DESC" /> By oldest <br />
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">Shipping: </h>
                             </div>
                       </div>
                                    <input type="radio" name="sort_by_shipping" value="shipping" /> By fastest <br />
                                    <input type="radio" name="sort_by_shipping" value="shipping DESC" /> By slowest <br />
                                    <input class="btn btn-primary" id="submit" type="submit" style="margin-bottom: 20px;" value="Get items!">
                           </form>
                        </div>';/* col-md-3 END */
    }
    /*
     * Getting items to
     * the product page
     */
    private function getItems( $page ) {
        $i = 0;
        echo '<div id="floatingCirclesG">
                <div class="f_circleG" id="frotateG_01"></div>
                <div class="f_circleG" id="frotateG_02"></div>
                <div class="f_circleG" id="frotateG_03"></div>
                <div class="f_circleG" id="frotateG_04"></div>
                <div class="f_circleG" id="frotateG_05"></div>
                <div class="f_circleG" id="frotateG_06"></div>
                <div class="f_circleG" id="frotateG_07"></div>
                <div class="f_circleG" id="frotateG_08"></div>
            </div>';
        echo '<div class="col-md-9" id="total">';
        while ( $i < count($this->model->id)) {
            echo '<div class="row">
                    <div class="col-md-3 wow fadeInUp"';
            if($page === 'notebooks' || $page === 'television'){
                echo 'style="margin-top: 30px"';
            }
            echo    '>
                        <img src="' . $this->model->getPhoto($i) . '" />
                    </div>
                    <div class="col-md-5 wow fadeInUp">
                        <p class="spacer"></p>
                        <form action="subdescription.php" method="get">
                            <h id="header-items" style="font-size: 20px;"><button type="submit" class="subdescription" style="text-decoration: none;">' . $this->model->getOriginalName($i) . '</button></h>
                            <span><br />by ' . $this->model->getCategory($i) . '</span>
                            <p id="price">' . $this->model->getPrice($i) . '$' . ' ' . '<span id="prev-price"><strike>' . $this->model->getPriviousPrice($i) . '$' . '</strike> (' . $this->model->getShipping($i) . ' ' . 'days shipping)</span></p>
                            <p id="prev-price"> In stock on ' . $this->model->getTimeOfAdding($i) . '</p>
                            <p>Average price for this product: ' . $this->model->getAverage($i) . '$' . '</p>
                            <p style="text-align: left"><em>Short description: </em>' . $this->model->getDescription($i) . '</p>
                            <input type="hidden" name="original_name" value="' . $this->model->getOriginalName($i) . '"/>
                            <input type="hidden" name="table" value="phones" />
                            <input type="hidden" name="id_num" value="' . $this->model->getPrice($i) . '"/>
                            <input type="hidden" name="id" value="' . $this->model->getId($i) . '"/>
                            <input type="hidden" name="product_name" value="' . $this->model->getProductName($i) . '"/>
                        </form>
                    </div>
                    <div class="col-md-4 wow fadeInUp">
                        <p class="spacer"></p>
                        <p class="align-left">Free shipping on orders greater than $35 </p>
                        <p class="align-left"><b>Product features: </b></p>
                        <p class="align-left">' . $this->model->getFeatures($i) . '</p>
                        <form action="add-item.php" method="post">
                            <button class="btn btn-default">
                                Add to cart
                            </button>
                            <input type="hidden" name="id" value="' . $this->model->getId($i) . '"/>
                            <input type="hidden" name="product_name" value="' . $this->model->getProductName($i) . '"/>
                            <input type="hidden" name="category" value="' . $this->model->getCategory($i) . '"/>
                            <input type="hidden" name="photo" value="' . $this->model->getPhoto($i) . '"/>
                            <input type="hidden" name="price" value="' . $this->model->getPrice($i) . '"/>
                            <input type="hidden" name="table" value="' . $page . '"/>
                            <input type="hidden" name="original_name" value="' . $this->model->getOriginalName($i) . '"/>
                        </form>
                    </div>
                </div>
                <div class="divider-items wow fadeInUp"></div>';
            $i++;
        }
        echo ' </div>
                </div>
                    <script src="js/wow.js"></script>
                   <script>
                         new WOW().init();
                   </script>';
    }
    /*
     * Footer, bottom part
     */
    public function actionGetFooter( $page ) {
        echo   '</div>
                <footer>';
        if($page !== 'financing') {
            echo '<div class="container">
                         <!--<div class="divider"></div>-->
                    </div>';
        } else {
        }

        echo '<div class="footer-spacer"></div>';

        echo        '<div class="footer">
                     <div class="container" style="margin-top: 20px;">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2 wow fadeInLeft">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter" href="javascript:toggle();">Shop</a></h>

                                </div>
                                <div id="toggleTextFooter">
                                    <ul>
                                        <li class="footer-menu"><b>Shop</b></li>';
        if($page == 'daughter') {
            echo                       '<li><a class="items" href="../index.php">Home</a></li>
                                        <li><a class="items" href="../phones-all.php">Phones</a></li>
                                        <li><a class="items" href="../laptops.php">Laptops</a></li>
                                        <li><a class="items" href="../devices.php">Devices</a></li>
                                        <li><a class="items" href="../tv.php">TV</a></li>
                                        <li><a class="items" href="../support.php">Support</a></li>
                                        <li><a class="items" href="../cart.php">Cart</a></li>';
        } else if($page == 'sub-daughter') {
            echo                       '<li><a class="items" href="../../index.php">Home</a></li>
                                        <li><a class="items" href="../../phones-all.php">Phones</a></li>
                                        <li><a class="items" href="../../laptops.php">Laptops</a></li>
                                        <li><a class="items" href="../../devices.php">Devices</a></li>
                                        <li><a class="items" href="../../tv.php">TV</a></li>
                                        <li><a class="items" href="../../support.php">Support</a></li>
                                        <li><a class="items" href="../../cart.php">Cart</a></li>';
        } else {
            echo                       '<li><a class="items" href="index.php">Home</a></li>
                                        <li><a class="items" href="phones-all.php">Phones</a></li>
                                        <li><a class="items" href="laptops.php">Laptops</a></li>
                                        <li><a class="items" href="devices.php">Devices</a></li>
                                        <li><a class="items" href="tv.php">TV</a></li>
                                        <li><a class="items" href="support.php">Support</a></li>
                                        <li><a class="items" href="cart.php">Cart</a></li>';
        }
         echo                       '</ul>
                                </div>

                            </div>
                            <script>
                                 function toggle(){
                                     $("#toggleTextFooter").toggle("slow");
                                     var x = document.getElementById("displayTextFooter");

                                     if(x.style.fontWeight == "bold"){
                                        x.style.fontWeight = "normal";
                                     } else {
                                        x.style.fontWeight = "bold";
                                     }
                                 }
                                 function toggle1(){
                                     $("#toggleTextFooter1").toggle("slow");
                                     var y = document.getElementById("displayTextFooter1");

                                     if(y.style.fontWeight == "bold"){
                                        y.style.fontWeight = "normal";
                                     } else {
                                        y.style.fontWeight = "bold";
                                     }
                                 }
                                 function toggle2(){
                                     $("#toggleTextFooter2").toggle("slow");
                                     var z = document.getElementById("displayTextFooter2");

                                     if(z.style.fontWeight == "bold"){
                                        z.style.fontWeight = "normal";
                                     } else {
                                        z.style.fontWeight = "bold";
                                     }
                                 }
                                 function toggle3(){
                                     $("#toggleTextFooter3").toggle("slow");
                                     var q = document.getElementById("displayTextFooter3");

                                     if(q.style.fontWeight == "bold"){
                                        q.style.fontWeight = "normal";
                                     } else {
                                        q.style.fontWeight = "bold";
                                     }
                                 }
                                 function toggle4(){
                                     $("#toggleTextFooter4").toggle("slow");
                                     var g = document.getElementById("displayTextFooter4");

                                     if(g.style.fontWeight == "bold"){
                                        g.style.fontWeight = "normal";
                                     } else {
                                        g.style.fontWeight = "bold";
                                     }
                                 }
                             </script>
                            <div class="col-sm-2 wow fadeInLeft">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter1" href="javascript:toggle1();">Store</a></h>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <form action="support.php" method="post">
                                    <div id="toggleTextFooter1">
                                        <ul>
                                            <li class="footer-menu"><b>Store</b></li>';
         if($page == 'daughter') {
             echo                          '<li><a class="items" href="../store.php">Find our store</a></li>
                                            <li><a class="items" href="../financing.php">Financing</a></li>
                                            <li><a class="items" href="../order.php">Order Status</a></li>
                                            <li><button id="link_as_button" class="items">Shopping help</button></li>
                                            <li><a class="items" href="../search-answers.php">Questions & Answers</a></li>';
         } else if($page == 'sub-daughter'){
             echo                          '<li><a class="items" href="../../store.php">Find our store</a></li>
                                            <li><a class="items" href="../../financing.php">Financing</a></li>
                                            <li><a class="items" href="../../order.php">Order Status</a></li>
                                            <li><button id="link_as_button" class="items">Shopping help</button></li>
                                            <li><a class="items" href="../../search-answers.php">Questions & Answers</a></li>';
         }
         else {
             echo                          '<li><a class="items" href="store.php">Find our store</a></li>
                                            <li><a class="items" href="financing.php">Financing</a></li>
                                            <li><a class="items" href="order.php">Order Status</a></li>
                                            <li><button id="link_as_button" class="items">Shopping help</button></li>
                                            <li><a class="items" href="search-answers.php">Questions & Answers</a></li>';
         }
         echo                           '</ul>
                                    </div>
                            <input type="hidden" value="1" name="shopping_help" />
                            </form>
                            </div>
                            <div class="col-sm-2 wow fadeInUp">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter2" href="javascript:toggle2();">Account</a></h>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter2">
                                    <ul>
                                        <li class="footer-menu"><b>Account</b></li>';
        if($page == 'daughter') {
            echo                       '<li><a class="items" href="../account.php">Store account</a></li>
                                        <li><a class="items" href="../cart.php">My Items</a></li>
                                        <li><a class="items" href="../shop-id.php">My Orders</a></li>
                                        <li><a class="items" href="../account-billing.php">Billing Info</a></li>';
        } else if ($page == 'sub-daughter'){
            echo                       '<li><a class="items" href="../../account.php">Store account</a></li>
                                        <li><a class="items" href="../../cart.php">My Items</a></li>
                                        <li><a class="items" href="../../shop-id.php">My Orders</a></li>
                                        <li><a class="items" href="../../account-billing.php">Billing Info</a></li>';
        }
        else {
            echo                       '<li><a class="items" href="account.php">Store account</a></li>
                                        <li><a class="items" href="cart.php">My Items</a></li>
                                        <li><a class="items" href="shop-id.php">My Orders</a></li>
                                        <li><a class="items" href="account-billing.php">Billing Info</a></li>';
        }
         echo                      '</ul>
                                    <ul>
                                        <li class="footer-menu"><b>Most valuable</b></li>';
        if($page == 'daughter') {
            echo                       '<li><a class="items" href="../site-terms.php">Site Terms</a></li>
                                        <li><a class="items" href="../privacy.php">Privacy</a></li>';
        } else if($page == 'sub-daughter'){
            echo                       '<li><a class="items" href="../../site-terms.php">Site Terms</a></li>
                                        <li><a class="items" href="../../privacy.php">Privacy</a></li>';
        } else {
            echo                       '<li><a class="items" href="site-terms.php">Site Terms</a></li>
                                        <li><a class="items" href="privacy.php">Privacy</a></li>';
        }
         echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInRight">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter3" href="javascript:toggle3();">Abous Us</a></h>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter3">
                                    <ul>
                                        <li class="footer-menu"><b>About Us</b></li>';
         if($page == 'daughter') {
             echo                      '<li><a class="items" href="../our-company.php">Our company</a></li>
                                        <li><a class="items" href="../people.php">In-touch People</a></li>
                                        <li><a class="items" href="../managers.php">Our managers</a></li>
                                        <li><a class="items" href="../offices.php">Offices</a></li>
                                        <li><a class="items" href="../business.php">Business</a></li>
                                        <li><a class="items" href="../director.php">Director</a></li>
                                        <li><a class="items" href="../job.php">Job</a></li>
                                        <li><a class="items" href="../contact-us.php">Contact Us</a></li>';
         } else if($page == 'sub-daughter'){
             echo                      '<li><a class="items" href="../../our-company.php">Our company</a></li>
                                        <li><a class="items" href="../../people.php">In-touch People</a></li>
                                        <li><a class="items" href="../../managers.php">Our managers</a></li>
                                        <li><a class="items" href="../../offices.php">Offices</a></li>
                                        <li><a class="items" href="../../business.php">Business</a></li>
                                        <li><a class="items" href="../../director.php">Director</a></li>
                                        <li><a class="items" href="../../job.php">Job</a></li>
                                        <li><a class="items" href="../../contact-us.php">Contact Us</a></li>';
         } else {
             echo                      '<li><a class="items" href="our-company.php">Our company</a></li>
                                        <li><a class="items" href="people.php">In-touch People</a></li>
                                        <li><a class="items" href="managers.php">Our managers</a></li>
                                        <li><a class="items" href="offices.php">Offices</a></li>
                                        <li><a class="items" href="business.php">Business</a></li>
                                        <li><a class="items" href="director.php">Director</a></li>
                                        <li><a class="items" href="job.php">Job</a></li>
                                        <li><a class="items" href="contact-us.php">Contact Us</a></li>';
         }
         echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInRight">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter4" href="javascript:toggle4();">For education & Business</a></h>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter4">
                                    <ul>
                                        <li class="footer-menu education"><b>For education</b></li>';
         if( $page == 'daughter') {
             echo                      '<li><a class="items" href="../education/laptops/">Notebooks</a></li>
                                        <li><a class="items" href="../education/phones/">Phones</a></li>';
         } else if( $page == 'sub-daughter'){
             echo                      '<li><a class="items" href="../../education/laptops/">Notebooks</a></li>
                                        <li><a class="items" href="../../education/phones/">Phones</a></li>';
         } else {
             echo                      '<li><a class="items" href="education/laptops/">Notebooks</a></li>
                                        <li><a class="items" href="education/phones/">Phones</a></li>';
         }
         echo                      '</ul>
                                    <ul>
                                        <li class="footer-menu"><b>Business</b></li>';
         if( $page == 'daughter') {
             echo                      '<li><a class="items" href="../business/laptops/">Using notebooks in business</a></li>
                                        <li><a class="items" href="../business/phones/">Using phones in day-to-day life</a></li>
                                        <li><a class="items" href="../business/devices/">Using devices in business</a></li>';
         } else if( $page == 'sub-daughter'){
             echo                      '<li><a class="items" href="../../business/laptops/">Using notebooks in business</a></li>
                                        <li><a class="items" href="../../business/phones/">Using phones in day-to-day life</a></li>
                                        <li><a class="items" href="../../business/devices/">Using devices in business</a></li>';
         }
         else {
             echo                      '<li><a class="items" href="business/laptops/">Using notebooks in business</a></li>
                                        <li><a class="items" href="business/phones/">Using phones in day-to-day life</a></li>
                                        <li><a class="items" href="business/devices/">Using devices in business</a></li>';
         }
         echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <p class="more-info pull-left">For more info about return items and shopping & delivery call +(380) 95 094 82 68.</p>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <ul class="nav nav-list">
                                    <li class="divider"></li>
                                </ul>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-4">
                                <p class="more-info pull-left">Copyright &copy; Woden S Inc. All rights reserved.
                            </div>
                            <div class="col-sm-4">
                                <ul class="hor_nav">
                                    <li><a class="items small-devices-hor-nav" href="/privacy">Privacy</a></li>
                                    <li><a class="items small-devices-hor-nav" href="/refunds">Refunds</a></li>
                                    <li><a class="items small-devices-hor-nav" href="/sales">Sales</a></li>
                                    <li><a class="items small-devices-hor-nav" href="site-map">Site map</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                </div>
                </footer>';
        if($page !== 'Index'){
            echo '<script src="js/jquery-min.js"></script>
                      <script src="js/bootstrap.min.js"></script>';
        }
        echo '<script type="text/javascript">
                var check_preload;
                function preload_page() {
                  if(check_preload) {
                    document.getElementById("total").style.visibility = "visible";
                    document.getElementById("floatingCirclesG").style.visibility = "hidden";
                  }
                }
              </script>
              <script type="text/javascript">
                check_preload=1;
              </script>';
    }
    public function getFooter() {
        echo '<div class="bottom-spacer">
               <div class="text-center">
                        <ul class="hor_nav">
                            <li><a class="items" href="/privacy">Privacy</a></li>
                            <li><a class="items" href="/refunds">Refunds</a></li>
                            <li><a class="items" href="/sales">Sales</a></li>
                            <li><a class="items" href="site-map">Site map</a></li>
                        </ul>
                            <p id="copyright"> &copy; Woden S Inc. All rights reserved.</p>
                   </div>
              </div>
              <script src="js/jquery-min.js"></script>
              <script src="js/bootstrap.min.js"></script>';
    }
}