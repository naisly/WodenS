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
        } else if( $page == 'Index'){
            echo '<title>Woden S</title>';
        } else {
            echo "<title>" . $page . " - Woden S</title>";
        }
        echo       '<!-- HTML 5 markup and encoding utf-8 -->
                    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
                    <!-- For Internet Explorer -->
                    <meta http-equiv="X-UA-Compatible" content="IE=EDge">
                    <!-- Bootstrap framework -->
                    <!-- Latest compiled and minified CSS -->
                    <meta name="viewport" content="width=device-width, initial-scale=1">';

        echo       '<link rel="stylesheet" href="/shop/css/bootstrap.css">
                    <link rel="shortcut icon" href="/shop/images/favicon-default.png" />
                    <script src="/shop/js/jquery-min.js"></script>
                    <!-- bxSlider Javascript file -->
                    <script src="/shop/js/bootstrap.min.js"></script>
                    <link href="/shop/css/styles.css" rel="stylesheet" type="text/css">
                    <!-- Optional theme -->
                    <link rel="stylesheet" href="/shop/css/bootstrap-theme.css">
                    <!-- Files of Styles -->
                    ';

        echo       '<script src="/shop/js/SrcChanger.js"></script>';

        if($page == 'Devices'){
            echo '<link href="/shop/css/devices.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Index'){
            echo '<link href="css/jquery.bxslider.css" rel="stylesheet">
                  <script src="js/jquery.bxslider.min.js"></script>';
        } else if ($page == 'Laptops'){
            echo '<link href="/shop/css/notebooks.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Phones'){
            echo '<link href="/shop/css/phones.css" rel="stylesheet" type="text/css">' .
                '<link rel="stylesheet" href="shop/css/default.css">' .
                '<link rel="stylesheet" href="shop/css/animate.css">';
        } else if ($page == 'Support'){
            echo '<link href="/shop/css/support.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'TV'){
            echo '<link href="/shop/css/tv.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Login' || $page == 'Admin' || $page == 'Thanks - Support'){
            echo '<link href="css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'subdescription'){
            echo '<link href="css/jquery.bxslider.css" rel="stylesheet">
                   <script src="js/jquery-min.js"></script>
                   <!-- bxSlider Javascript file -->
                   <script src="js/bootstrap.min.js"></script>
                   <!-- bxSlider Javascript file -->
                  <script src="js/jquery.bxslider.min.js"></script>
                  <link href="css/subdescription.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Search'){
            echo '<link href="css/login.css" rel="stylesheet" type="text/css">
                  <link href="css/subdescription.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Store'){
            echo '<link href="css/store.css" rel="stylesheet" type="text/css">
                  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
                  <link href="css/jquery.bxslider.css" rel="stylesheet">
                  <script src="js/jquery-min.js"></script>
                  <!-- bxSlider Javascript file -->
                  <script src="js/bootstrap.min.js"></script>
                  <!-- bxSlider Javascript file -->
                  <script src="js/jquery.bxslider.min.js"></script>';
        }  else if ($page == 'Orders'){
            echo '<link href="css/checkorder.css" rel="stylesheet" type="text/css">';
        }  else if ($page == 'Order - Status'){
            echo '<link href="css/status-order.css" rel="stylesheet" type="text/css">
                  <link href="css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Account - Cart'){
            echo '<link href="css/profile.css" rel="stylesheet" type="text/css">';
        }  else if ($page == 'Account - Orders' || $page == 'Account' || $page == 'Account - Billing') {
            if($page == 'Account'){
                echo '<link href="css/account.css" rel="stylesheet" type="text/css">';
            }
            if ($page == 'Account - Billing'){
                echo '<link href="css/account-billing.css" rel="stylesheet" type="text/css">';
            }
            echo '<link href="css/account-order.css" rel="stylesheet" type="text/css">
                  <link href="css/profile.css" rel="stylesheet" type="text/css">
                  <script src="js/jquery-min.js"></script>';
        } else if($page == 'Financing'){
            echo '<link href="css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Laptops - Education'){
            echo '<link href="../../css/education-laptops.css" rel="stylesheet" type="text/css">
                  <link href="../../css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Phones - Education'){
            echo '<link href="../../css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Laptops - Business'){
            echo '<link href="../../css/business-laptops.css" rel="stylesheet" type="text/css">
                  <link href="../../css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/financing.css" rel="stylesheet" type="text/css">
                  <link href="../../css/business-phones.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Phones - Business'){
            echo '<link href="../../css/business-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Devices - Business'){
            echo '<link href="../../css/business-devices.css" rel="stylesheet" type="text/css">
                  <link href="../../css/business-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/business-laptops.css" rel="stylesheet" type="text/css">
                  <link href="../../css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="../../css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Contact Us'){
            echo '<link href="../css/contact-us.css" rel="stylesheet" type="text/css">
                  <link href="../css/education-phones.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Education'){
            echo '<link href="../css/education.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Business'){
            echo '<link href="../css/business.css" rel="stylesheet" type="text/css">';
        }
        else {
            echo '<link rel="stylesheet" href="/shop/css/default.css" />' .
                '<link rel="stylesheet" href="/shop/css/animate.css" />';
        }

        echo '</head>
            <body onload="preload_page()" style="overflow-y: visible;">';
        if($page !== 'Index'){
            echo '<div style="margin-top: 70px;"></div>';
        }
    }
    /*
     * Main navbar Menu for all
     * pages
     */
    final public function headerView( $page )
    {
        echo   '<nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" id="overflow-xl-collapsed-cl" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" onclick="changeCss();">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>';
        #if ($page == 'daughter'){
        echo       '<a class="navbar-brand" href="/shop/">
                            <img alt="Brand" src="/shop/images/main-favicon.png" width="35" height="35" id="main-image">';
        echo '</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/shop/phones/" class="white-link">Phones <span class="sr-only">(current)</span></a></li>
                            <li class="divider-li-small"></li>
                            <li><a href="/shop/laptops/" class="white-link">Laptops</a></li>
                            <li class="divider-li-small"></li>
                            <li><a href="/shop/devices/" class="white-link">Devices</a></li>
                            <li class="divider-li-small"></li>
                            <li><a href="/shop/tv/" class="white-link">TV</a></li>
                            <li class="divider-li-small"></li>
                            <li><a href="/shop/support/" class="white-link">Support</a></li>
                            <li class="divider-li-small"></li>
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle white-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart <span class="caret"></span></a>
                        <ul class="dropdown-menu">';
        if (isset($_SESSION['login_user'])) {
            echo '<li><a href="/shop/logout" class="color-gl-for-small">';
            echo 'Logout(' . $_SESSION['login_user'] . ')</a></li>';
            session_write_close();
        } else {
            echo '<li><a href="/shop/register" class="color-gl-for-small">Register</a></li>';
            echo '<li><a href="/shop/login" class="color-gl-for-small">';
            echo 'Login</a></li>';
            session_write_close();
        }
        echo '
                                                            <li role="separator" class="divider divider-session"></li>
                                                            <li class="dropdown-header">Products</li>';
        if (isset($_SESSION['login_user'])) {
            echo '<li><a href="/shop/cart" class="color-gl-for-small">Cart: ' . $this->model->getAPrice() . '$';
            echo '<li><a href="#" class="color-gl-for-small">' . $this->model->getAItems() . ' items</a></li>';
        } else {
            echo ' <li><a href="#" class="color-gl-for-small">Login to see your cart</a></li>';
        }
        echo '
                        </ul>
                    </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>';
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
                            <ul class='text-align'>";

                            if($category == 'notebooks'){
                                echo "<a style='font-size: 18px; margin-right: 15px; color: #e4e4e4; text-decoration: none;' class='categories-list' href='laptops.php'>All</a>";
                            } else {
                                echo "<a style='font-size: 18px; margin-right: 15px; color: #e4e4e4; text-decoration: none;' class='categories-list' href='$category'>All</a>";
                            }

        foreach ($this->model->distinct_categories as $value => $key) {
            echo "<a style='font-size: 18px; margin-right: 15px; color: #e4e4e4; text-decoration: none;' class='categories-list' href='{$this->model->distinct_categories[$value]}'>" . $this->model->distinct_categories[$value] . "</a>";
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
                        <img src="../../' . $this->model->getPhoto($i) . '" />
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
                </div>';

            if ($i < count($this->model->id) -1) {
                echo '<div class="divider-items wow fadeInUp"></div>';
            }

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
        if($page !== 'financing' && $page !== 'Index') {
            echo '<div class="container">
                         <!--<div class="divider"></div>-->
                  </div>
                  <div class="footer-spacer"></div>';
        } else if($page == 'Index'){

        }

        echo        '<div class="footer">
                     <div class="container">
                          <div class="row">
                              <div class="col-sm-1"></div>
                              <div class="col-sm-6 margin-for-small-devices">';
        $i = 0;
        while($i < $this->model->countBreadcrumbs()){
            if($this->model->getBreadcrumbs($i) == 'shop'){
                echo '<a href="/shop/index.php"><img style="margin-left: 4px; margin-right: 4px;" src="/shop/images/favicon-default.png" width="20" height="20"/></a>';
            } else if($this->model->getBreadcrumbs($i) == 'index'){
                echo '<h id="breadcrumbs">Home</h>';
            } else {
                echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '">' . ucfirst($this->model->getBreadcrumbs($i)) . "</a>";
            }
            if ($i < $this->model->countBreadcrumbs() - 1){
                echo '<img style="margin-left: 4px; margin-right: 4px;" src="/shop/images/breadcrumbs-next.png" />';
            }
            $i++;
        }
        if($this->model->countBreadcrumbs() == 1){
            echo '<img style="margin-left: 4px; margin-right: 4px;" src="/shop/images/breadcrumbs-next.png" />';
            echo '<h id="breadcrumbs">Home</h>';
        }
        echo                  '</div>
                              <div class="col-md-8"></div>
                          </div>
                     </div>
                     <div class="container" style="margin-top: 20px;">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2 wow fadeInLeft">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter" href="javascript:toggle();">Shop</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter" href="javascript:toggle();"><img alt="arrow" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                </div>
                                <div id="toggleTextFooter">
                                    <ul>
                                        <li class="footer-menu"><b>Shop</b></li>
                                        <li><a class="items" href="/shop/index.php">Home</a></li>
                                        <li><a class="items" href="/shop/phones-all.php">Phones</a></li>
                                        <li><a class="items" href="/shop/laptops/">Laptops</a></li>
                                        <li><a class="items" href="/shop/devices.php">Devices</a></li>
                                        <li><a class="items" href="/shop/tv.php">TV</a></li>
                                        <li><a class="items" href="/shop/support.php">Support</a></li>
                                        <li><a class="items" href="/shop/cart.php">Cart</a></li>';
        echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInLeft">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter1" href="javascript:toggle1();">Store</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter1" href="javascript:toggle1();"><img alt="arrow1" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <form action="support.php" method="post">
                                    <div id="toggleTextFooter1">
                                        <ul>
                                            <li class="footer-menu"><b>Store</b></li>
                                            <li><a class="items" href="/shop/store.php">Find our store</a></li>
                                            <li><a class="items" href="/shop/financing.php">Financing</a></li>
                                            <li><a class="items" href="/shop/order.php">Order Status</a></li>
                                            <li><button id="link_as_button" class="items">Shopping help</button></li>
                                            <li><a class="items" href="/shop/search-answers.php">FAQ</a></li>
                                            <li><a class="items" href="/shop/education/">Education</a></li>
                                            <li><a class="items" href="/shop/business/">Business</a></li>';
        echo                           '</ul>
                                    </div>
                            <input type="hidden" value="1" name="shopping_help" />
                            </form>
                            </div>
                            <div class="col-sm-2 wow fadeInUp">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter2" href="javascript:toggle2();">Account</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter2" href="javascript:toggle2();"><img alt="arrow2" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter2">
                                    <ul>
                                        <li class="footer-menu"><b>Account</b></li>
                                        <li><a class="items" href="/shop/account.php">Store account</a></li>
                                        <li><a class="items" href="/shop/cart.php">My Items</a></li>
                                        <li><a class="items" href="/shop/order.php">My Orders</a></li>
                                        <li><a class="items" href="/shop/account-billing.php">Billing Info</a></li>';
        echo                      '</ul>
                                    <ul>
                                        <li class="footer-menu"><b>Most valuable</b></li>
                                        <li><a class="items" href="/shop/site-terms.php">Site Terms</a></li>
                                        <li><a class="items" href="/shop/privacy.php">Privacy</a></li>';
        echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInRight">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter3" href="javascript:toggle3();">Abous Us</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter3" href="javascript:toggle3();"><img alt="arrow3" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>

                                <div id="toggleTextFooter3">
                                    <ul>
                                        <li class="footer-menu"><b>About Us</b></li>
                                        <li><a class="items" href="/shop/our-company.php">Our company</a></li>
                                        <li><a class="items" href="/shop/people.php">In-touch People</a></li>
                                        <li><a class="items" href="/shop/managers.php">Our managers</a></li>
                                        <li><a class="items" href="/shop/director.php">Director</a></li>
                                        <li><a class="items" href="/shop/job.php">Job</a></li>
                                        <li><a class="items" href="/shop/contact/">Contact Us</a></li>';
        echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInRight edu-for-small">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter4" href="javascript:toggle4();">For education & Business</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter4" href="javascript:toggle4();"><img alt="arrow4" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter4">
                                    <ul>
                                        <li class="footer-menu margin-for-small"><b>For Education</b></li>
                                        <li><a class="items" href="/shop/education/phones">Phones and Education</a></li>
                                        <li><a class="items" href="/shop/education/laptops">Laptops and Education</a></li>';
        echo                      '</ul>
                                    <ul>
                                        <li class="footer-menu"><b>For Business</b></li>
                                        <li><a class="items" href="/shop/business/laptops/">Laptops in business</a></li>
                                        <li><a class="items" href="/shop/business/phones/">Phones in business</a></li>
                                        <li><a class="items" href="/shop/business/devices/">Devices in business</a></li>';
        echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10" style="margin-top: 40px">
                                <p class="more-info pull-left margin-more">For more info about return items and shopping & delivery call +(380) 95 094 82 68.</p>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10 margin-more">
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
                            <div class="col-sm-5 margin-copy">
                                <p class="more-info pull-left">Copyright &copy; Woden S Inc. All rights reserved.
                            </div>
                            <div class="col-sm-5">
                                <ul class="hor_nav">
                                    <li><a class="hor-items small-devices-hor-nav" href="/privacy">Privacy</a></li>
                                    <li><a class="hor-items small-devices-hor-nav" href="/refunds">Refunds</a></li>
                                    <li><a class="hor-items small-devices-hor-nav" href="/sales">Sales</a></li>
                                    <li><a class="hor-items small-devices-hor-nav" href="site-map">Site map</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                </div>
                </footer>';

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