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
    final public function DoctypeView($page)
    {
        echo '<!DOCTYPE html>
                <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US" prefix="og: http://ogp.me/ns#">
                <head>';
        if ($page == 'subdescription') {
            if ($this->model->getCurrentLanguage() !== 'us') {
                echo '<title>Woden Sims (' . strtoupper($this->model->getCurrentLanguage()) . ') : ' . $this->model->getOriginalName(0) . '</title>';
            } else {
                echo '<title>Woden Sims : ' . $this->model->getOriginalName(0) . '</title>';
            }
        } else if ($page == 'Index') {
            if ($this->model->getCurrentLanguage() !== 'us') {
                echo '<title>Woden Sims (' . $this->model->getCurrentCountry() . ')</title>';
            } else {
                echo '<title>Woden Sims</title>';
            }
        } else {
            if ($this->model->getCurrentLanguage() !== 'us') {
                echo '<title>' . $this->model->Translate($page) . ' - Woden Sims (' . strtoupper($this->model->getCurrentLanguage()) . ')</title>';
            } else {
                echo '<title>' . $this->model->Translate($page) . ' - Woden Sims </title>';
            }
        }
        echo '<!-- HTML 5 markup and encoding utf-8 -->
                    <meta charset="utf-8" />
                    <!-- For Internet Explorer -->
                    <meta http-equiv="X-UA-Compatible" content="IE=EDge">
                    <!-- Bootstrap framework -->
                    <!-- Latest compiled and minified CSS -->
                    <meta name="viewport">';

        echo '<link rel="stylesheet" href="/css/bootstrap.css">
                    <link rel="shortcut icon" href="/images/favicon-default.png" />
                    <script src="/js/jquery-min.js"></script>
                    <!-- bxSlider Javascript file -->
                    <script src="/js/bootstrap.min.js"></script>
                    <link href="/css/styles.css" rel="stylesheet" type="text/css">
                    <!-- Optional theme -->
                    <link rel="stylesheet" href="/css/bootstrap-theme.css">
                    <!-- Files of Styles -->
                    ';

        echo '<script src="/js/SrcChanger.js"></script>';

        if ($page == 'Devices') {
            echo '<link href="/css/devices.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Index') {
            echo '<link href="/css/jquery.bxslider.css" rel="stylesheet">
                  <script src="/js/jquery.bxslider.min.js"></script>';
        } else if ($page == 'Laptops') {
            echo '<link href="/css/notebooks.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Phones') {
            echo '<link href="/css/phones.css" rel="stylesheet" type="text/css">' .
                '<link rel="stylesheet" href="/css/default.css">' .
                '<link rel="stylesheet" href="/css/animate.css">';
        } else if ($page == 'Support') {
            echo '<link href="/css/support.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'TV') {
            echo '<link href="/css/tv.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Login' || $page == 'Admin' || $page == 'Thanks - Support' || $page == 'Registration' || $page == 'Registration Completed') {
            echo '<link href="/css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'subdescription') {
            echo '<link href="/css/jquery.bxslider.css" rel="stylesheet">
                   <script src="/js/jquery-min.js"></script>
                   <!-- bxSlider Javascript file -->
                   <script src="/js/bootstrap.min.js"></script>
                   <!-- bxSlider Javascript file -->
                  <script src="/js/jquery.bxslider.min.js"></script>
                  <link href="/css/subdescription.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Frequently Asked Questions') {
            echo '<link href="/css/login.css" rel="stylesheet" type="text/css">
                  <link href="/css/subdescription.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Store') {
            echo '<link href="/css/store.css" rel="stylesheet" type="text/css">
                  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
                  <link href="/css/jquery.bxslider.css" rel="stylesheet">
                  <script src="/js/jquery-min.js"></script>
                  <!-- bxSlider Javascript file -->
                  <script src="/js/bootstrap.min.js"></script>
                  <!-- bxSlider Javascript file -->
                  <script src="/js/jquery.bxslider.min.js"></script>';
        } else if ($page == 'Woden Sims Order Status') {
            echo '<link href="/css/checkorder.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Order - Status') {
            echo '<link href="/css/status-order.css" rel="stylesheet" type="text/css">
                  <link href="/css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Single Order Lookup'){
            echo '<link href="/css/checkorder.css" rel="stylesheet" type="text/css">';

            echo '<link href="/css/status-order.css" rel="stylesheet" type="text/css">
                  <link href="/css/login.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Cart - Account') {
            echo '<link href="/css/profile.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Orders - Account' || $page == 'Account' || $page == 'Billing - Account') {
            if ($page == 'Account') {
                echo '<link href="/css/account.css" rel="stylesheet" type="text/css">';
            }
            if ($page == 'Billing - Account') {
                echo '<link href="/css/account-billing.css" rel="stylesheet" type="text/css">';
            }
            echo '<link href="/css/account-order.css" rel="stylesheet" type="text/css">
                  <link href="/css/profile.css" rel="stylesheet" type="text/css">
                  <script src="/js/jquery-min.js"></script>';
        } else if ($page == 'Financing') {
            echo '<link href="/css/financing.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Laptops - Education') {
            echo '<link href="/css/education-laptops.css" rel="stylesheet" type="text/css">
                  <link href="/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/css/financing.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Phones - Education') {
            echo '<link href="/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/css/financing.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Laptops - Business') {
            echo '<link href="/css/business-laptops.css" rel="stylesheet" type="text/css">
                  <link href="/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/css/financing.css" rel="stylesheet" type="text/css">
                  <link href="/css/business-phones.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Phones - Business') {
            echo '<link href="/css/business-phones.css" rel="stylesheet" type="text/css">
                  <link href="/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/css/financing.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Devices - Business') {
            echo '<link href="/css/business-devices.css" rel="stylesheet" type="text/css">
                  <link href="/css/business-phones.css" rel="stylesheet" type="text/css">
                  <link href="/css/business-laptops.css" rel="stylesheet" type="text/css">
                  <link href="/css/education-phones.css" rel="stylesheet" type="text/css">
                  <link href="/css/financing.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Contact Us') {
            echo '<link href="/css/contact-us.css" rel="stylesheet" type="text/css">
                  <link href="/css/education-phones.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Education') {
            echo '<link href="/css/education.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Business') {
            echo '<link href="/css/business.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Page Not Found') {
            echo '<link href="/css/NotFoundPage.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Terms of Use' || $page == 'Privacy Policy') {
            echo '<link href="/css/Terms.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Jobs') {
            echo '<link href="/css/jobs.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Our Company') {
            echo '<link href="/css/our-company.css" rel="stylesheet" type="text/css">';
        } else if ($page == 'Recover your Woden Sims Account') {
            echo '<link href="/css/forgot.css" rel="stylesheet" type="text/css">';
        } else {
            echo '<link rel="stylesheet" href="/css/default.css" />' .
                '<link rel="stylesheet" href="/css/animate.css" />';
        }

        echo '</head>
            <body onload="preload_page()" style="overflow-y: visible;">';
        if ($page !== 'Index') {
            echo '<div style="margin-top: 70px;"></div>';
        }


    }

    protected function endHTML()
    {

        echo '</body>
           </html>';
    }

    /*
     * Main navbar Menu for all
     * pages
     */
    final public function headerView($page)
    {

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        echo '<div id="divider"></div>';

        echo '<nav class="navbar navbar-inverse" id="navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!--<div class="container">-->
                    <div class="navbar-header">
                        <button type="button" id="overflow-xl-collapsed-cl" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" onclick="changeCss();">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>';
        echo '<a class="navbar-brand" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo '">
                            <img alt="Brand" src="/images/main-favicon.png" width="35" height="35" id="main-image">';

        /*
         * Mid
         */
        echo '<a class="nav-brand text-center" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'account/cart"><img style="margin-top: 3px;" src="/images/cart_icon.png" width="25" height="30"></a>';
        /*
         * End
         */
        echo '</a>
                 </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="non-visible-for-small"><a id="no-margin-for-md" class="navbar-brand" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo '">
                            <img alt="Brand" src="/images/main-favicon.png" width="35" height="35" id="main-image">';
        echo '</a></li>
                            <li><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'phones/" class="white-link division-main">';

        echo $this->model->Translate('Phones');

        echo '</a></li>
                            <li><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'laptops/" class="white-link division-main">';

        echo $this->model->Translate('Laptops');

        echo '</a></li>
                            <li><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'devices/" class="white-link division-main">';

        echo $this->model->Translate('Devices');

        echo '</a></li>
                            <li><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'tv/" class="white-link division-main">';

        echo $this->model->Translate('TV');

        echo '</a></li>
                            <li><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'support/" class="white-link division-main">';

        echo $this->model->Translate('Support');

        echo '</a></li>
                            <li class="non-visible-for-small"><h class="paddings-for-nav"><a style="cursor: pointer;">';

        echo '<img style="margin-top: 9px;" src="/images/search-icon.png" width="30" height="30" alt="search" onclick="getSearchBox();">';

        echo              '</a></li>
                           <li class="non-visible-for-small"><h class="paddings-for-nav"><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'account/cart">';

        echo '<img style="margin-top: 9px;" src="/images/cart_icon.png" width="25" height="30">';

        echo '              </a></li>
                            <li class="spacer-for-small-nav"></li>
                            <li class="search-nav"><a class="white-link" style="width: 80%; padding-right: 0 !important;">

                                    <div class="input-group" style="margin-top: 7px;">
                                        <span class="input-group-btn">
                                            <img src="/images/search-icon.png" width="30" height="30" style="float: left;" />
                                        </span>
                                        <input type="text" class="form-control" id="search" placeholder="' . $this->model->Translate('Search') . ' woden-sims.hol.es">
                                    </div>';

        echo '</a></li>
              <li class="divider-li-small" style="background-color: white !important; margin-top: 7px !important;"></li>

              <li id="popular" class="non-for-large"><a class="white-link requests" style="display: none;">Most popular requests</a></li>
              <li class="non-for-large"><a href="/phones/buy-phone/apple" class="white-link element-divider" style="color: white; display: none;">Apple</a></li>

              <li class="non-for-large"><a href="/account/" class="white-link element-divider" style="display: none;">Account</a></li>

              <li class="non-for-large"><a href="/store/" class="white-link element-divider" style="display: none;">Find a Store</a></li>

              <li class="non-for-large"><a href="/financing/" class="white-link element-divider" style="display: none;">Financing</a></li>

              <li class="non-for-large"><a href="/business/" class="white-link element-divider" style="display: none;">Business</a></li>

              <li class="non-for-large"><a class="white-link element-divider" style="display: none; height: 40px;"></a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>';

        echo '<script>
                  $("#search").focus(function(){
                      /*$(".element-divider, .requests").css("visibility", "visible");*/
                      /*$(".element-divider, .requests").css("display", "block")*/
                      $(".element-divider, .requests").fadeIn("slow");
                  })
                  .blur(function() {
                      /*$(".element-divider, .requests").css("visibility", "hidden");*/
                      /*$(".element-divider, .requests").css("display", "none");*/
                      $(".element-divider, .requests").fadeOut("slow");
                  })
              </script>';
        echo '<script src="/js/search.js"></script>';

        echo '<div id="invisible">
                  <div class="search-form">
                      <div class="form-group">
                          <input type="text" class="form-control" id="search-xs" placeholder="' . $this->model->Translate('Search') . ' woden-sims@hol.es">
                          <div class="most-popular">
                              <div class="marger">
                                  <h class="popular-matches">';

        echo $this->model->Translate('Most popular requests');

        echo                     '</h>

                                  <ul class="nav-popular">
                                      <a href="/phones/buy-phone/apple">
                                          <li>';

        echo $this->model->Translate('Apple');

        echo                             '</li>
                                      </a>
                                      <a href="/account/">
                                          <li>';

        echo $this->model->Translate('Account');

        echo                             '</li>
                                      </a>
                                      <a href="/store/">
                                          <li>';

        echo $this->model->Translate('Find a Store');

        echo                             '</li>
                                      </a>
                                      <a href="/financing/">
                                          <li>';

        echo $this->model->Translate('Financing');

        echo                             '</li>
                                      </a>
                                      <a href="/business/">
                                          <li>';

        echo $this->model->Translate('Business');

        echo                              '</li>

                                      </a>
                                  </ul>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>';

    }

    public function getUI($category, $category_table)
    {
        $this->getItemsNames($category);
        $this->getFilterMenu();
        $this->getItems($category_table);
        $this->actionGetFooter($category);
    }

    /*
     * Getting distinct items names
     */
    private function getItemsNames($category)
    {
        echo "
                  <div class='items-row pointer' style='margin-top: -20px;'>
                       <div class='col-md-12 items-align' style='padding-left: 0; padding-right: 0; background-color: #f1f1f1; padding-bottom: 20px;'>
                            <div class='text-center'>
                                <h1 class='nav-category'>";

        if($category !== 'tv'){
            echo ucfirst($category) . 's';
        } else {
            echo strtoupper($category);
        }

        echo                    "</h1>
                            </div>
                            <ul class='text-align'>";


        echo "<a class='categories-list' href='/";

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo $category;

        if($category !== 'tv') {
            echo 's';
        }

        echo '/buy-' . $category;

        echo "'>All</a>";

        foreach ($this->model->distinct_categories as $value => $key) {
            echo "<a class='categories-list' href='{$this->model->distinct_categories[$value]}'>" . $this->model->distinct_categories[$value] . "</a>";
        }
        echo '               </ul>
                        </div>
                   </div>
              </div>';
    }

    /*
     * Filter menu
     * of product pages
     */
    private function getFilterMenu()
    {
        #$i = 0;
        #$n = 0;
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
                       <div class="col-md-3 search-box">
                            <form action="" method="post" oninput="minValue.value=min.value; maxValue.value=max.value">
                            <div class="row">
                                <div class="col-md-12 bg-item top-margin" style="margin-top: 0px;">
                                    <h class="search-item">';

        echo $this->model->Translate('Store');

        echo                       '<br/></h>
                                 </div>
                            </div>
                            <div class="spacer-for-small">';

        $k = 0;
        while ($k < count($this->model->distinct_product_names)) {
            echo '<input style="margin-right: 6px;" type="checkbox" name="array' . $k . '" id="array' . $k . '" value="' . $this->model->getDistinctProductNames($k) . '"';
            if (isset($_POST['array' . $k])) echo "checked='checked'";
            echo "/>";
            echo $this->model->getDistinctProductNames($k);
            if ($this->model->getQuantityOfItems($k) == 0) {
                echo '<br />';
            } else {
                echo '(' . $this->model->getQuantityOfItems($k) . ')<br />';
            }
            $k++;
        }
        echo '            </div>
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">';

        echo $this->model->Translate('Price:');

        echo                    '</h>
                             </div>
                       </div>
                       <p class="min-and-max">';

        echo $this->model->Translate('Min:');

        echo '<output name="minValue" for="min" id="minValue">';

        if(isset($_POST['min'])){
            echo $_POST['min'];
        } else {
            echo '0';
        }

        echo          '</output><span id="symb-for-output-xs">$</span></p>
                       <input type="range" id="min" name="min" min="0" max="5000" value="';

        if(isset($_POST['min'])){
            echo $_POST['min'];
        } else {
            echo '0';
        }
        echo           '">

                       <p class="min-and-max">';

        echo $this->model->Translate('Max:');

        echo '<output name="maxValue" for="max" id="maxValue">';

        if(isset($_POST['max'])){
            echo $_POST['max'];
        } else {
            echo '5000';
        }

        echo          '</output><span id="symb-for-output-xs">$</span></p>
                       <input type="range" id="max" name="max" min="0" max="5000" value="';

        if(isset($_POST['max'])){
            echo $_POST['max'];
        } else {
            echo '5000';
        }
        echo            '">
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">';

        echo $this->model->Translate('Sort by price:');

        echo                    '</h>
                             </div>
                       </div>
                       <div class="spacer-for-small">
                            <input type="radio" name="sort_by_price" value="price " />';

        echo $this->model->Translate('By highest');

        echo '<br />
                            <input type="radio" name="sort_by_price" value="price DESC" />';

        echo $this->model->Translate('By lowest');

        echo '<br />
                       </div>
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">';

        echo $this->model->Translate('Sort by time of adding:');

        echo                    '</h>
                             </div>
                       </div>
                       <div class="spacer-for-small">
                             <input type="radio" name="sort_by_time" value="time" />';

        echo $this->model->Translate('By latest');

        echo '<br />
                             <input type="radio" name="sort_by_time" value="time DESC" />';

        echo $this->model->Translate('By oldest');

        echo '<br />
                       </div>
                       <div class="row">
                            <div class="col-md-12 bg-item top-margin">
                                <h class="search-item">';

        echo $this->model->Translate('Shipping:');

        echo                    '</h>
                             </div>
                       </div>
                       <div class="spacer-for-small">
                                    <input type="radio" name="sort_by_shipping" value="shipping" />';

        echo $this->model->Translate('By fastest');

        echo '<br />
                                    <input type="radio" name="sort_by_shipping" value="shipping DESC" />';

        echo $this->model->Translate('By slowest');

        echo '<br />
                                    <input class="btn btn-primary" id="submit" type="submit" style="margin-bottom: 20px;" value="' . $this->model->Translate('Get items!') . '">
                       </div>
                           </form>
                        </div>';/* col-md-3 END */
    }

    /*
     * Getting items to
     * the product page
     */
    private function getItems($page)
    {
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
        echo '<div class="col-md-9" id="total" style="margin-top: 40px;">';

        while ($i < count($this->model->id)) {
            echo '<div class="row" style="margin-left: 5px;';

            if($i < count($this->model->id) - 1){
                echo 'border-bottom: 1px solid #e4e4e4;';
            }

            echo 'padding-bottom: 20px; margin-right: 5px;">
                    <div class="col-md-3"';
            if ($page === 'notebooks' || $page === 'television') {
                echo 'style="margin-top: 30px"';
            }
            echo ' style="padding-left: 0 !important;">
                        <img src="/' . $this->model->getPhoto($i) . '" style="margin-top: 21px;" class="img-shop" />
                    </div>
                    <div class="col-md-5">
                            <p class="spacer"></p>
                            <a class="subdescription" href="/';

            if($_SESSION['language'] !== 'us'){
                echo $_SESSION['language'] . '/';
            }

            echo 'shop/subdescription?name=' . $this->model->getOriginalName($i) . '&category=' . $page . '&product_price=' . $this->model->getPrice($i) . '&id=' . $this->model->getId($i) . '&product_name=' . $this->model->getProductName($i) . '">' . $this->model->getOriginalName($i) . '</a>

                            <span><br />' . $this->model->Translate('by') . ' ';

            if($this->model->getCategory($i) == 'IMac' || $this->model->getCategory($i) == 'AppleTV' ) {
                echo 'Apple';
            } else if($this->model->getCategory($i) == 'ShowTop'){
                echo 'Amazon';
            } else {
                echo $this->model->getCategory($i);
            }

            echo           '</span>
                            <p id="price">' . $this->model->getPrice($i) . '$' . ' ' . '<span id="prev-price"><strike>' . $this->model->getPriviousPrice($i) . '$' . '</strike></span> (' . $this->model->getShipping($i) . ' ' . '';

            echo $this->model->Translate('days shipping') . ')</p>
                            <p id="on-stock">';

            echo $this->model->Translate('In stock on') . ' ';

            echo $this->model->getTimeOfAdding($i) . '</p>
                            <p id="average">';

            echo $this->model->Translate('Average price for this product:');

            echo '<span id="prev-price">' . $this->model->getAverage($i) . '$' . '</span></p>
                            <p style="text-align: left;"><b style="font-size: 16px;">';

            echo $this->model->Translate('Short description:');

            echo ' </b>' . $this->model->getDescription($i) . '</p>
                            <!--
                            <input type="hidden" name="original_name" value="' . $this->model->getOriginalName($i) . '"/>
                            <input type="hidden" name="table" value="phones" />
                            <input type="hidden" name="id_num" value="' . $this->model->getPrice($i) . '"/>
                            <input type="hidden" name="id" value="' . $this->model->getId($i) . '"/>
                            <input type="hidden" name="product_name" value="' . $this->model->getProductName($i) . '"/>
                        </form>-->
                    </div>
                    <div class="col-md-4">
                        <p class="spacer"></p>
                        <p class="align-left">';

            echo $this->model->Translate('Free shipping on orders greater than');

            echo ' <span id="prev-price">$35</span></p>
                        <p class="align-left"><b style="font-size: 16px;">';

            echo $this->model->Translate('Product features:');

            echo '</b></p>
                        <p class="align-left">' . $this->model->getFeatures($i) . '</p>
                        <form action="/shop/add-item" method="post">
                            <button class="btn btn-default">';

            echo $this->model->Translate('Add to cart');

            echo           '</button>
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

            /*if ($i < count($this->model->id) - 1) {
                echo '<div class="divider-items wow fadeInUp"></div>';
            }*/

            $i++;
        }
        echo ' </div>
                </div>';
    }

    /*
     * Footer, bottom part
     */
    public function actionGetFooter($page)
    {
        //session_start();

        echo '</div>
                <footer>';
        if ($page !== 'financing' && $page !== 'Index' && $page !== 'Phones' && $page !== 'Devices' && $page !== 'Page Not Found' && $page !== 'Our Company' && $page !== 'Login' && $page !== 'Registration' && $page !== 'Phones - Business') {
            echo '<div class="container">
                         <!--<div class="divider"></div>-->
                  </div>
                  <div class="footer-spacer"></div>';
        } else if ($page == 'Index') {
        } else if ($page == 'Phones') {
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
        if ($page == 'Thank You') {
            echo '<div class="footer footer-bottom">';
        } else {
            echo '<div class="footer">';
        }
        echo '<div class="divider-white-for-classes"></div>
                     <div class="container full-container">
                          <div class="row">
                              <div class="col-sm-1 no-width-for-sm"></div>
                              <div class="col-sm-6 margin-for-small-devices">';
        if ($page !== 'Page Not Found') {
            $i = 0;
            while ($i < $this->model->countBreadcrumbs()) {
                if ($this->model->getBreadcrumbs($i) == 'shop') {
                    if ($i < 1) {
                        echo '<a href="/';
                        if ($_SESSION['language'] !== 'us') {
                            echo $_SESSION['language'] . '/';
                        }
                        echo '"><img style="margin-left: 4px; margin-right: 4px;" src="/images/favicon-default.png" width="20" height="20"/></a>';
                    } else {
                        echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '">';
                        echo $this->model->Translate('Shop');
                        echo '</a>';
                    }
                } else if ($this->model->getBreadcrumbs($i) == 'Woden Sims'){
                    echo '<a href="/';
                    if ($_SESSION['language'] !== 'us') {
                        echo $_SESSION['language'] . '/';
                    }
                    echo '"><img style="margin-left: 4px; margin-right: 4px;" src="/images/favicon-default.png" width="20" height="20"/></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'index') {
                    echo '<h id="breadcrumbs">';
                    echo $this->model->Translate('Home');
                    echo '</h>';
                } else if (substr($this->model->getBreadcrumbs($i), 0, 14) == 'Subdescription') {
                    echo '<h id="breadcrumbs">' . $this->model->getOriginalName(0) . '</h>';
                } else if ($this->model->getBreadcrumbs($i) == 'privacy-policy') {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Privacy Policy') . '</h></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'order-status') {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Order Status') . '</h></a>';
                } else if (substr($this->model->getBreadcrumbs($i), 0, 5) == 'login') {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Login') . '</h></a>';
                } else if (substr($this->model->getBreadcrumbs($i), 0, 8) == 'register') {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Register') . '</h></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'registration-completed') {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Registration Completed') . '</h></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'Forgot-password') {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Recover your Woden Sims Account') . '</h></a>';
                } else if (isset($_GET['session_auth']) && !isset($_GET['email']) && !isset($_GET['day_of_birth']) && !isset($_GET['sc-a-1']) && !isset($_GET['sc-a-2']) && !isset($_GET['sc-a-3'])) {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Step 1') . '</h></a>';
                } else if (isset($_GET['session_auth']) && isset($_GET['email']) && !isset($_GET['day_of_birth']) && !isset($_GET['sc-a-1']) && !isset($_GET['sc-a-2']) && !isset($_GET['sc-a-3'])) {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Step 2') . '</h></a>';
                } else if (isset($_GET['session_auth']) && isset($_GET['email']) && isset($_GET['day_of_birth']) && !isset($_GET['sc-a-1']) && !isset($_GET['sc-a-2']) && !isset($_GET['sc-a-3'])) {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Step 3') . '</h></a>';
                } else if (isset($_GET['session_auth']) && isset($_GET['email']) && isset($_GET['day_of_birth']) && isset($_GET['sc-a-1']) && isset($_GET['sc-a-2']) && isset($_GET['sc-a-3'])) {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Last step') . '</h></a>';
                } else if (isset($_GET['success'])) {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Success') . '</h></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'Buy-phone'){
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Buy') . '</h></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'Buy-tv'){
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Buy') . '</h></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'Buy-device'){
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Buy') . '</h></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'Buy-laptop'){
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Buy') . '</h></a>';
                } else if ($this->model->getBreadcrumbs($i) == 'Privacy-policy'){
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '"><h id="breadcrumbs">' . $this->model->Translate('Privacy Policy') . '</h></a>';
                }
                else {
                    echo '<a id="breadcrumbs" href="' . $this->model->getBreadcrumbsLink($i) . '">' . ucfirst($this->model->Translate($this->model->getBreadcrumbs($i))) . "</a>";
                }
                if ($i < $this->model->countBreadcrumbs() - 1) {
                    echo '<img style="margin-left: 4px; margin-right: 4px;" src="/images/breadcrumbs-next.png" />';
                }
                $i++;
            }
        } else {
            echo '<a href="/';
            if ($_SESSION['language'] !== 'us') {
                echo $_SESSION['language'] . '/';
            }
            echo '"><img style="margin-left: 4px; margin-right: 4px;" src="/images/favicon-default.png" width="20" height="20"/></a>
                  <img style="margin-left: 4px; margin-right: 4px;" src="/images/breadcrumbs-next.png" />
                  <h id="breadcrumbs">';
            echo $this->model->Translate('Page Not Found');
            echo '</h>';
        }
        if ($this->model->countBreadcrumbs() == 1) {
            echo '<img style="margin-left: 4px; margin-right: 4px;" src="/images/breadcrumbs-next.png" />';
            echo '<h id="breadcrumbs">';
            echo $this->model->Translate('Home');
            echo '</h>';
        }
        echo '</div>
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
        echo '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter" href="javascript:toggle();"><img alt="arrow" src="/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                </div>
                                <div id="toggleTextFooter">
                                    <ul>
                                        <li class="footer-menu"><b>';
        echo $this->model->Translate('Shop');
        echo '</b></li>

                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'phones/">';
        echo $this->model->Translate('Phones');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'laptops/">';
        echo $this->model->Translate('Laptops');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'devices/">';
        echo $this->model->Translate('Devices');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'tv/">';
        echo $this->model->Translate('TV');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'support/">';
        echo $this->model->Translate('Support');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'cart">';
        echo $this->model->Translate('Cart');
        echo '</a></li>';
        echo '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 wow fadeInLeft full-row-for-small">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter1" href="javascript:toggle1();">';
        echo $this->model->Translate('Store');
        echo '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter1" href="javascript:toggle1();"><img alt="arrow1" src="/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <form action="/support/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo '" method="post">
                                    <div id="toggleTextFooter1">
                                        <ul>
                                            <li class="footer-menu"><b>';
        echo $this->model->Translate('Store');
        echo '</b></li>
                                            <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'store/">';
        echo $this->model->Translate('Find our store');
        echo '</a></li>
                                            <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'financing/">';
        echo $this->model->Translate('Financing');
        echo '</a></li>
                                            <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'order-status/">';
        echo $this->model->Translate('Order Status');
        echo '</a></li>
                                            <li><button id="link_as_button" class="items">';
        echo $this->model->Translate('Shopping help');
        echo '</button></li>
                                            <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'FAQ/">FAQ</a></li>
                                            <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'education/">';
        echo $this->model->Translate('Education');
        echo '</a></li>
                                            <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'business/">';
        echo $this->model->Translate('Business');
        echo '</a></li>';
        echo '</ul>
                                    </div>
                            <input type="hidden" value="1" name="shopping_help" />
                            </form>
                            </div>
                            <div class="col-sm-2 full-row-for-small">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter2" href="javascript:toggle2();">';
        echo $this->model->Translate('Account');
        echo '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter2" href="javascript:toggle2();"><img alt="arrow2" src="/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter2">
                                    <ul>
                                        <li class="footer-menu"><b>';
        echo $this->model->Translate('Account');
        echo '</b></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'account/">';
        echo $this->model->Translate('Store Account');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'account/cart">';
        echo $this->model->Translate('My Items');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'account/orders">';
        echo $this->model->Translate('My Orders');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'account/billing">';
        echo $this->model->Translate('Billing Info');
        echo '</a></li>';
        echo '</ul>
                                   <ul>
                                        <li class="footer-menu"><b>';
        echo $this->model->Translate('Manage your ID');
        echo '</b></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'register">';
        echo $this->model->Translate('Register');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        if (isset($_SESSION['login_user'])) {
            echo 'logout">';
            echo $this->model->Translate('Logout');
        } else {
            echo 'login">';
            echo $this->model->Translate('Login');
        }
        echo '</a></li>';
        echo '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 full-row-for-small">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter3" href="javascript:toggle3();">';
        echo $this->model->Translate('About Us and Values');
        echo '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter3" href="javascript:toggle3();"><img alt="arrow3" src="/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter3">
                                    <ul>
                                        <li class="footer-menu"><b>';
        echo $this->model->Translate('About Us');
        echo '</b></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'about/">';
        echo $this->model->Translate('Our Company');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'jobs/">';
        echo $this->model->Translate('Job possibilities');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'contact/">';
        echo $this->model->Translate('Contact Us');
        echo '</a></li>
                                    </ul>
                                    <ul>
                                        <li class="footer-menu"><b>';
        echo $this->model->Translate('Most Valuable');
        echo '</b></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'terms/">';
        echo $this->model->Translate('Site Terms');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'privacy-policy/">';
        echo $this->model->Translate('Privacy Policy');
        echo '</a></li>';
        echo '</ul>
                                </div>
                            </div>
                            <div class="col-sm-2 edu-for-small full-row-for-small-minus-width">
                                <div class="small-devices-decoration">
                                    <h class="float-right"><a class="items default-hidden" id="displayTextFooter4" href="javascript:toggle4();">';
        echo $this->model->Translate('For education & Business');
        echo '</a></h>
                                    <div class="pull-right default-hidden margin-for-footer">
                                        <a id="displayTextFooter4" href="javascript:toggle4();"><img alt="arrow4" src="/images/arrow-down.png" width="20" height="20" /></a>
                                    </div>
                                    <div class="divider-for-small-devices"></div>
                                </div>
                                <div id="toggleTextFooter4">
                                    <ul>
                                        <li class="footer-menu margin-for-small"><b>';
        echo $this->model->Translate('For Education');
        echo '</b></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'education/phones/">';
        echo $this->model->Translate('Phones and Education');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'education/laptops/">';
        echo $this->model->Translate('Laptops and Education');
        echo '</a></li>';
        echo '</ul>
                                    <ul>
                                        <li class="footer-menu"><b>';
        echo $this->model->Translate('For Business');
        echo '</b></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'business/laptops/">';
        echo $this->model->Translate('Laptops in Business');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'business/phones/">';
        echo $this->model->Translate('Phones in Business');
        echo '</a></li>
                                        <li><a class="items" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'business/devices/">';
        echo $this->model->Translate('Devices in Business');
        echo '</a></li>';
        echo '</ul>
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
        echo '<a class="contact-us" href="/';
        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'contact/">';
        echo $this->model->Translate('Contact Us');
        echo '</a>';
        echo '</p>
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
        echo $this->model->Translate('Copyright &copy; Woden Sims Inc. All rights reserved.');
        echo '</div>
                            <div class="col-sm-5 half-width-for-sm-md language" style="margin-top: -5px;">
                                <div class="dropup dropup-menu-for-sm dropup-for-small">
                                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" style="text-decoration: none;">';
        echo '<img src="/images/' . $this->model->getCurrentLanguage() . '-flag.png" height="16" width="16" /><h class="lang">' . $this->model->getCurrentCountry() . '</h>
                                    </a>
                                    <ul class="dropdown-menu">';
        $i = 0;
        while ($i < $this->model->countNameOfLanguages()) {
            echo '<a class="language-link" href="/';
            if ($this->model->getNameOfLanguages($i) !== 'us') {
                echo $this->model->getNameOfLanguages($i) . '/';
            }
            echo '"><li id="marger-for-small-devices-xs"><img id="margin-for-small" style="margin-left: 7px;" src="/images/' . $this->model->getNameOfLanguages($i) . '-flag.png"
                  height="16" width="16" /><h class="lang">' . $this->model->getNameOfCountries($i) . '</h></li></a>';
            if ($i < ($this->model->countNameOfLanguages() - 1)) {
                echo '<div class="divider" style="margin-left: 8px; padding-right: 4px; width: 90%;"></div>';
            }
            $i++;
        }
        echo '</ul>
                                </div><!-- End of dropup -->';
        echo '</div>
                            </div>
                            <div class="col-sm-1 no-width-for-sm"></div>
                        </div>
                        <div class="container-fluid non-for-large">
                        <div class="row">
                        <div class="col-md-12" style="padding-bottom: 20px; margin-top: -15px;">
                            <div class="small-devices-decoration">
                                    <h class="float-right"><a style="text-decoration: none" class="items default-hidden" id="displayTextFooter5" href="javascript:toggle5();">';
        echo '<img src="/images/' . $this->model->getCurrentLanguage() . '-flag.png" height="16" width="16" /><h class="lang">' . $this->model->getCurrentCountry() . '</h>';
        echo '</a></h>
                                </div>
                                <div id="toggleTextFooter5">
                                    <ul style="padding-top: 20px;">';
        $i = 0;
        while ($i < $this->model->countNameOfLanguages()) {
            echo '<a class="language-link" href="/';
            if ($this->model->getNameOfLanguages($i) !== 'us') {
                echo $this->model->getNameOfLanguages($i) . '/';
            }
            echo '"><li id="marger-for-small-devices-xs"><img id="margin-for-small" style="margin-left: 7px;" src="/images/' . $this->model->getNameOfLanguages($i) . '-flag.png"
                  height="16" width="16" /><h class="lang">' . $this->model->getNameOfCountries($i) . '</h></li></a>';
            if ($i < ($this->model->countNameOfLanguages() - 1)) {
                echo '<div class="divider" style="margin-left: 8px; padding-right: 4px; width: 90%; height: 1px;"></div>';
            }
            $i++;
        }
        echo '</ul>
                                    <div id="scroll-handler"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>';
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
                      disableOverflow();
                  });
              </script>';
    }

    public function getHeader( $text ) {

        echo '<div class="bg-divider">
                  <div class="text-center">
                       <h1 style="padding-top: 20px; color: white;">' . $this->model->Translate($text) . '</h1>
                  </div>
              </div>';
    }

    public function getFooter() {
        echo '<div class="bottom-spacer" style="position: absolute; bottom: 0; width: 100%;">
               <div class="text-center">
                        <!--<ul class="hor_nav">
                            <li><a class="items" href="/privacy-policy">Privacy</a></li>
                            <li><a class="items" href="/refunds">Refunds</a></li>
                            <li><a class="items" href="/sales">Sales</a></li>
                            <li><a class="items" href="site-map">Site map</a></li>
                        </ul>-->
                            <p id="copyright"> &copy; Woden Sims Inc . ' . $this->model->Translate("All rights reserved.") . '</p>
                   </div>
              </div>
              <script src="js/jquery-min.js"></script>
              <script src="js/bootstrap.min.js"></script>';
    }
}