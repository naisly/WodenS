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
                    <meta charset="utf-8" />
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
            echo '<link href="/shop/css/jquery.bxslider.css" rel="stylesheet">
                  <script src="/shop/js/jquery.bxslider.min.js"></script>';
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
            echo '<link href="/shop/css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'subdescription'){
            echo '<link href="/shop/css/jquery.bxslider.css" rel="stylesheet">
                   <script src="/shop/js/jquery-min.js"></script>
                   <!-- bxSlider Javascript file -->
                   <script src="/shop/js/bootstrap.min.js"></script>
                   <!-- bxSlider Javascript file -->
                  <script src="/shop/js/jquery.bxslider.min.js"></script>
                  <link href="/shop/css/subdescription.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Search'){
            echo '<link href="/shop/css/login.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/subdescription.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Store'){
            echo '<link href="/shop/css/store.css" rel="stylesheet" type="text/css">
                  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
                  <link href="/shop/css/jquery.bxslider.css" rel="stylesheet">
                  <script src="/shop/js/jquery-min.js"></script>
                  <!-- bxSlider Javascript file -->
                  <script src="/shop/js/bootstrap.min.js"></script>
                  <!-- bxSlider Javascript file -->
                  <script src="/shop/js/jquery.bxslider.min.js"></script>';
        }  else if ($page == 'Orders'){
            echo '<link href="/shop/css/checkorder.css" rel="stylesheet" type="text/css">';
        }  else if ($page == 'Order - Status'){
            echo '<link href="/shop/css/status-order.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Account - Cart'){
            echo '<link href="/shop/css/profile.css" rel="stylesheet" type="text/css">';
        }  else if ($page == 'Account - Orders' || $page == 'Account' || $page == 'Account - Billing') {
            if($page == 'Account'){
                echo '<link href="/shop/css/account.css" rel="stylesheet" type="text/css">';
            }
            if ($page == 'Account - Billing'){
                echo '<link href="/shop/css/account-billing.css" rel="stylesheet" type="text/css">';
            }
            echo '<link href="/shop/css/account-order.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/profile.css" rel="stylesheet" type="text/css">
                  <script src="/shop/js/jquery-min.js"></script>';
        } else if($page == 'Financing'){
            echo '<link href="/shop/css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Laptops - Education'){
            echo '<link href="/shop/css/education-laptops.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Phones - Education'){
            echo '<link href="/shop/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Laptops - Business'){
            echo '<link href="/shop/css/business-laptops.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/financing.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/business-phones.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Phones - Business'){
            echo '<link href="/shop/css/business-phones.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Devices - Business'){
            echo '<link href="/shop/css/business-devices.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/business-phones.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/business-laptops.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/financing.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Contact Us'){
            echo '<link href="/shop/css/contact-us.css" rel="stylesheet" type="text/css">
                  <link href="/shop/css/education-phones.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Education'){
            echo '<link href="/shop/css/education.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Business'){
            echo '<link href="/shop/css/business.css" rel="stylesheet" type="text/css">';
        } else if($page == 'Page Not Found'){
            echo '<link href="/shop/css/NotFoundPage.css" rel="stylesheet" type="text/css">';
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

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

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
        echo       '<a class="navbar-brand" href="/shop/';

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo       '">
                            <img alt="Brand" src="/shop/images/main-favicon.png" width="35" height="35" id="main-image">';
        echo '</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/shop/';

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo                'phones/" class="white-link">';

        echo $this->model->Translate('Phones');

        echo                   '<span class="sr-only">(current)</span></a></li>
                            <li class="divider-li-small"></li>
                            <li><a href="/shop/';

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo               'laptops/" class="white-link">';

        echo $this->model->Translate('Laptops');

        echo                   '</a></li>
                            <li class="divider-li-small"></li>
                            <li><a href="/shop/';

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo                'devices/" class="white-link">';

        echo $this->model->Translate('Devices');

        echo                    '</a></li>
                            <li class="divider-li-small"></li>
                            <li><a href="/shop/';

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo                 'tv/" class="white-link">';

        echo $this->model->Translate('TV');

        echo                    '</a></li>
                            <li class="divider-li-small"></li>
                            <li><a href="/shop/';

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo                'support/" class="white-link">';

        echo $this->model->Translate('Support');

        echo                    '</a></li>
                            <li class="divider-li-small"></li>
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle white-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';

        echo $this->model->Translate('Cart');

        echo               '<span class="caret"></span></a>
                        <ul class="dropdown-menu">';
        if (isset($_SESSION['login_user'])) {
            echo '<li><a href="/shop/';

            if($_SESSION['language'] !== 'us'){
                echo $_SESSION['language'] . '/';
            }

            echo    'logout" class="color-gl-for-small">';

            echo $this->model->Translate('Logout');

            echo '(' . $_SESSION['login_user'] . ')</a></li>';
            session_write_close();
        } else {
            echo '<li><a href="/shop/';

            if($_SESSION['language'] !== 'us'){
                echo $_SESSION['language'] . '/';
            }

            echo    'register" class="color-gl-for-small">';

            echo $this->model->Translate('Register');

            echo '</a></li>';
            echo '<li><a href="/shop/';

            if($_SESSION['language'] !== 'us'){
                echo $_SESSION['language'] . '/';
            }

            echo    'login" class="color-gl-for-small">';

            echo $this->model->Translate('Login');

            echo '</a></li>';
            session_write_close();
        }
        echo '<li role="separator" class="divider divider-session"></li>
              <li class="dropdown-header">';

        echo $this->model->Translate('Products');

        echo '</li>';
        if (isset($_SESSION['login_user'])) {
            echo '<li><a href="/shop/';

            if($_SESSION['language'] !== 'us'){
                echo $_SESSION['language'] . '/';
            }

            echo    'cart" class="color-gl-for-small">';

            echo $this->model->Translate('Cart');

            echo ':' . $this->model->getAPrice() . "$";
            echo '<li><a href="#" class="color-gl-for-small">' . $this->model->getAItems() . ' ';

            echo $this->model->Translate('items');

            echo '</a></li>';
        } else {
            echo ' <li><a href="#" class="color-gl-for-small">';

            echo $this->model->Translate('Login to see your cart');

            echo '</a></li>';
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
                        <form action="/shop/shop/subdescription" method="get">
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
        if($page !== 'financing' && $page !== 'Index' && $page !== 'Phones' && $page !== 'Devices' && $page !== 'Page Not Found') {
            echo '<div class="container">
                         <!--<div class="divider"></div>-->
                  </div>
                  <div class="footer-spacer"></div>';
        } else if($page == 'Index'){

        } else if($page == 'Phones'){
            echo '<div class="container">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <div class="divider-white"></div>
                          </div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>';
        }

        echo        '<div class="footer">
                     <div class="container full-container">
                          <div class="row">
                              <div class="col-sm-1 no-width-for-sm"></div>
                              <div class="col-sm-6 margin-for-small-devices">';

        if($page !== 'Page Not Found') {
            $i = 0;
            while ($i < $this->model->countBreadcrumbs()) {
                if ($this->model->getBreadcrumbs($i) == 'shop') {
                    if ($i < 1) {
                        echo '<a href="/shop/';

                        if($_SESSION['language'] !== 'us'){
                            echo $_SESSION['language'] . '/';
                        }

                        echo '"><img style="margin-left: 4px; margin-right: 4px;" src="/shop/images/favicon-default.png" width="20" height="20"/></a>';
                    } else {
                        echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '">';

                        echo $this->model->Translate('Shop');

                        echo '</a>';
                    }
                } else if ($this->model->getBreadcrumbs($i) == 'index') {
                    echo '<h id="breadcrumbs">';

                    echo $this->model->Translate('Home');

                    echo '</h>';
                } else if (substr($this->model->getBreadcrumbs($i), 0, 14) == 'subdescription') {
                    echo '<h id="breadcrumbs">' . $this->model->getOriginalName(0) . '</h>';
                } else {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '">' . ucfirst($this->model->getBreadcrumbs($i)) . "</a>";
                }
                if ($i < $this->model->countBreadcrumbs() - 1) {
                    echo '<img style="margin-left: 4px; margin-right: 4px;" src="/shop/images/breadcrumbs-next.png" />';
                }
                $i++;
            }
        } else {
            echo '<a href="/shop/"><img style="margin-left: 4px; margin-right: 4px;" src="/shop/images/favicon-default.png" width="20" height="20"/></a>
                  <img style="margin-left: 4px; margin-right: 4px;" src="/shop/images/breadcrumbs-next.png" />
                  <h id="breadcrumbs">';

            echo $this->model->Translate('Page Not Found');

            echo '</h>';
        }
        if($this->model->countBreadcrumbs() == 1){
            echo '<img style="margin-left: 4px; margin-right: 4px;" src="/shop/images/breadcrumbs-next.png" />';
            echo '<h id="breadcrumbs">';

            echo $this->model->Translate('Home');

            echo '</h>';
        }
        echo                  '</div>
                              <div class="col-md-5"></div>
                          </div>
                     </div>
                     <div class="container full-container" style="margin-top: 20px;">
                        <div class="row">
                            <div class="col-sm-1 no-width-for-sm"></div>
                            <div class="col-sm-2 wow fadeInLeft full-row-for-small">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter" href="javascript:toggle();">';

        echo $this->model->Translate('Shop');

        echo                       '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter" href="javascript:toggle();"><img alt="arrow" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                </div>
                                <div id="toggleTextFooter">
                                    <ul>
                                        <li class="footer-menu"><b>';

        echo $this->model->Translate('Shop');

        echo                           '</b></li>
                                        <li><a class="items" href="/shop/">';

        echo $this->model->Translate('Home');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/phones/">';

        echo $this->model->Translate('Phones');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/laptops/">';

        echo $this->model->Translate('Laptops');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/devices/">';

        echo $this->model->Translate('Devices');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/tv/">';

        echo $this->model->Translate('TV');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/support/">';

        echo $this->model->Translate('Support');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/cart">';

        echo $this->model->Translate('Cart');

        echo                           '</a></li>';


        echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInLeft full-row-for-small">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter1" href="javascript:toggle1();">';

        echo $this->model->Translate('Store');

        echo                       '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter1" href="javascript:toggle1();"><img alt="arrow1" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <form action="support.php" method="post">
                                    <div id="toggleTextFooter1">
                                        <ul>
                                            <li class="footer-menu"><b>';

        echo $this->model->Translate('Store');

        echo                               '</b></li>
                                            <li><a class="items" href="/shop/store">';

        echo $this->model->Translate('Find our store');

        echo                               '</a></li>
                                            <li><a class="items" href="/shop/financing">';

        echo $this->model->Translate('Financing');

        echo                               '</a></li>
                                            <li><a class="items" href="/shop/order">';

        echo $this->model->Translate('Order Status');

        echo                               '</a></li>
                                            <li><button id="link_as_button" class="items">';

        echo $this->model->Translate('Shopping help');

        echo                               '</button></li>
                                            <li><a class="items" href="/shop/search-answers">FAQ</a></li>
                                            <li><a class="items" href="/shop/education/">';

        echo $this->model->Translate('Education');

        echo                               '</a></li>
                                            <li><a class="items" href="/shop/business/">';

        echo $this->model->Translate('Business');

        echo                               '</a></li>';


        echo                           '</ul>
                                    </div>
                            <input type="hidden" value="1" name="shopping_help" />
                            </form>
                            </div>
                            <div class="col-sm-2 wow fadeInUp full-row-for-small">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter2" href="javascript:toggle2();">';

        echo $this->model->Translate('Account');

        echo                       '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter2" href="javascript:toggle2();"><img alt="arrow2" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter2">
                                    <ul>
                                        <li class="footer-menu"><b>';

        echo $this->model->Translate('Account');

        echo                           '</b></li>
                                        <li><a class="items" href="/shop/account">';

        echo $this->model->Translate('Store Account');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/cart">';

        echo $this->model->Translate('My Items');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/order">';

        echo $this->model->Translate('My Orders');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/account-billing">';

        echo $this->model->Translate('Billing Info');

        echo                           '</a></li>';


        echo                      '</ul>
                                    <ul>
                                        <li class="footer-menu"><b>';

        echo $this->model->Translate('Most Valuable');

        echo                           '</b></li>
                                        <li><a class="items" href="/shop/site-terms">';

        echo $this->model->Translate('Site Terms');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/privacy">';

        echo $this->model->Translate('Privacy');

        echo                           '</a></li>';


        echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInRight full-row-for-small">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter3" href="javascript:toggle3();">';

        echo $this->model->Translate('About Us');

        echo                       '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter3" href="javascript:toggle3();"><img alt="arrow3" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>

                                <div id="toggleTextFooter3">
                                    <ul>
                                        <li class="footer-menu"><b>';

        echo $this->model->Translate('About Us');

        echo                           '</b></li>
                                        <li><a class="items" href="/shop/our-company">';

        echo $this->model->Translate('Our Company');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/people">';

        echo $this->model->Translate('In-touch People');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/managers">';

        echo $this->model->Translate('Our managers');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/director">';

        echo $this->model->Translate('Director');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/job">';

        echo $this->model->Translate('Job');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/contact/">';

        echo $this->model->Translate('Contact Us');

        echo                           '</a></li>';


        echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInRight edu-for-small full-row-for-small-minus-width">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter4" href="javascript:toggle4();">';

        echo $this->model->Translate('For education & Business');

        echo                       '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter4" href="javascript:toggle4();"><img alt="arrow4" src="/shop/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter4">
                                    <ul>
                                        <li class="footer-menu margin-for-small"><b>';

        echo $this->model->Translate('For Education');

        echo                           '</b></li>
                                        <li><a class="items" href="/shop/education/phones">';

        echo $this->model->Translate('Phones and Education');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/education/laptops">';

        echo $this->model->Translate('Laptops and Education');

        echo                           '</a></li>';


        echo                      '</ul>
                                    <ul>
                                        <li class="footer-menu"><b>';

        echo $this->model->Translate('For Business');

        echo                           '</b></li>
                                        <li><a class="items" href="/shop/business/laptops/">';

        echo $this->model->Translate('Laptops in Business');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/business/phones/">';

        echo $this->model->Translate('Phones in Business');

        echo                           '</a></li>
                                        <li><a class="items" href="/shop/business/devices/">';

        echo $this->model->Translate('Devices in Business');

        echo                           '</a></li>';

        echo                       '</ul>
                                </div>
                            </div>
                            <div class="col-sm-1 no-width-for-sm"></div>
                        </div>
                    </div>
                    <div class="container full-container">
                        <div class="row">
                            <div class="col-sm-1 no-width-for-sm"></div>
                            <div class="col-sm-10 full-width-for-md" style="margin-top: 60px">
                                <p class="more-info pull-left margin-more">';

        echo $this->model->Translate('For more info about return items and shopping & delivery') . " ";

        echo                   '<a class="contact-us" href="/shop/Contact/">';

        echo $this->model->Translate('Contact Us');

        echo                   '</a>';

        echo                   '</p>
                            </div>
                            <div class="col-sm-1 no-width-for-sm"></div>
                        </div>
                    </div>
                    <div class="container full-container">
                        <div class="row">
                            <div class="col-sm-1 no-width-for-sm"></div>
                            <div class="col-sm-10 full-width-for-md margin-more">
                                <div class="footer-divider"></div>
                            </div>
                            <div class="col-sm-1 no-width-for-sm"></div>
                        </div>
                    </div>
                    <div class="container full-container">
                        <div class="row">
                            <div class="col-sm-1 no-width-for-sm"></div>
                            <div class="col-sm-5 width-80-for-md margin-copy">
                                <p class="more-info pull-left">';

        echo $this->model->Translate('Copyright &copy; Woden S Inc. All rights reserved.');

        echo               '</div>
                            <div class="col-sm-5 half-width-for-sm-md language" style="margin-top: -5px;">
                                <div class="dropup dropup-menu-for-sm dropup-for-small">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" style="text-decoration: none;">';


        echo                          '<img src="/shop/images/' . $this->model->getCurrentLanguage() . '-flag.png" height="16" width="16" /><h class="lang">' . $this->model->getCurrentCountry() . '</h>
                                    </a>
                                    <ul class="dropdown-menu">';
        $i = 0;
        while ($i < $this->model->countNameOfLanguages()){
            echo '<form action="/shop/change-language" method="post" id="form-' . $i . '">
                     <input type="hidden" value="' . $this->model->getNameOfLanguages( $i ) . '" name="checked-language" id="checked-language" />
                     <li id="marger-for-small-devices-xs"><img id="margin-for-small" src="/shop/images/' . $this->model->getNameOfLanguages( $i ) . '-flag.png" height="16" width="16" /><button id="link_as_button" style="font-size: 13px; margin-left: 7px; text-decoration: none;">' . $this->model->getNameOfCountries( $i ) . '</span></button></li>
                  </form>';

            if($i < ($this->model->countNameOfLanguages() -1)){
                echo '<div class="divider" style="margin-left: 8px; padding-right: 4px; width: 90%;"></div>';
            }

            $i++;
        }

        echo                       '</ul>
                                </div><!-- End of dropup -->';

        echo                   '</div>
                            </div>
                            <div class="col-sm-1 no-width-for-sm"></div>
                        </div>
                        <div class="container-fluid non-for-large">
                        <div class="row">
                        <div class="col-md-12" style="padding-bottom: 20px; margin-top: -15px;">
                            <div class="small-devices-decoration">
                                    <h class="float-right"><a style="text-decoration: none" class="items default-hidden" id="displayTextFooter5" href="javascript:toggle5();">';

        echo '<img src="/shop/images/' . $this->model->getCurrentLanguage() . '-flag.png" height="16" width="16" /><h class="lang">' . $this->model->getCurrentCountry() . '</h>';

        echo                       '</a></h>
                                </div>
                                <div id="toggleTextFooter5">
                                    <ul>';

        $i = 0;
        while ($i < $this->model->countNameOfLanguages()) {
            echo '<form action="/shop/change-language" method="post" id="form-' . $i . '">
                     <input type="hidden" value="' . $this->model->getNameOfLanguages( $i ) . '" name="checked-language" id="checked-language" />
                     <li id="marger-for-small-devices-xs" style="margin-top: 5px"><img id="margin-for-small" src="/shop/images/' . $this->model->getNameOfLanguages( $i ) . '-flag.png" height="16" width="16" /><button id="link_as_button" style="font-size: 13px; margin-left: 7px; text-decoration: none;">' . $this->model->getNameOfCountries( $i ) . '</span></button></li>
                  </form>';

            $i++;
        }


        echo                       '</ul>
                                    <div id="scroll-handler"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>';

        /*echo   '<div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter5" href="javascript:toggle5();">';

        echo '<img src="/shop/images/' . $language . '-flag.png" height="16" width="16" /><h class="lang">' . $name_of_country . '</h>';

        echo                       '</a></h>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter5">
                                    <ul>';

        $i = 0;
        while ($i < $k) {
            echo '<form action="/shop/change-language" method="post" id="form-' . $i . '">
                     <input type="hidden" value="' . $language_array[$i] . '" name="checked-language" id="checked-language" />
                     <li id="marger-for-small-devices-xs"><img id="margin-for-small" src="/shop/images/' . $language_array[$i] . '-flag.png" height="16" width="16" /><button id="link_as_button" style="font-size: 13px; margin-left: 7px; text-decoration: none;">' . $name_of_country_array[$i] . '</span></button></li>
                  </form>';

            $i++;
        }


        echo                       '</ul>
                                </div>
                        </div>
                    </div>
                </div>
                </footer>';*/

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
              </script>
              <script>
                  $("#overflow-xl-collapsed-cl").click(function(){

                      var x = $("body").css("overflowY");
                      if(x == "visible"){
                          $("body")
                              .css("overflow-y", "hidden");
                          $("html")
                              .css("overflow-y", "hidden");
                      } else {
                          $("body")
                              .css("overflow-y", "visible");
                          $("html")
                              .css("overflow-y", "visible");
                      }
                  });
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