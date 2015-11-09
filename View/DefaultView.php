<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:57
 */
class DefaultView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        $this->model = $model;
    }
    public function DoctypeView()
    {
        return "<!DOCTYPE html>" .
        "<html>" .
        "<head>" .
        "<link rel='stylesheet' href='css/bootstrap.css' />" .
        "<link rel='stylesheet' href='css/styles.css' />" .
        "<link rel='stylesheet' href='css/default.css' />" .
        "<link rel='stylesheet' href='css/animate.css' />" .
        "<script src='js/jquery-min.js'></script>" .
        "<title>Woden S</title>" .
        "</head>" .
        "<body>";
    }
    public function headerView()
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
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img alt="Brand" src="images/default.png">
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="phones-all.php">Phones <span class="sr-only">(current)</span></a></li>
                            <li><a href="notebooks.html">Notebooks</a></li>
                            <li><a href="devices.html">Devices</a></li>
                            <li><a href="tv.html">TV</a></li>
                            <li><a href="support.html">Support</a></li>
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart <span class="caret"></span></a>
                        <ul class="dropdown-menu">';

                                if(isset($_SESSION['login_user'])){
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
                                if(isset($_SESSION['login_user'])) {
                                    echo '<li><a href="cart.php">Cart: ' . $this->model->getAPrice() . '$';
                                    echo '<li><a href="#">' . $this->model->getAItems() . ' items</a>';
                                } else {
                                    echo ' <li><a href="#">Login to see your cart</a></li>';
                                }
                                echo    '
                        </ul>
                    </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>';
    }
    public function getItemsNames()
    {
        echo '<div class="items-row pointer">
                  <div class="col-md-3"></div>
                       <div class="col-md-6 items-align">
                            <ul class="text-align">
                                <a class="categories-list" style="text-decoration: none" href="Phones.php">All</a>';
        foreach ($this->model->distinct_categories as $value => $key) {
            echo "<a style='text-decoration: none;' class='categories-list' href='{$this->model->distinct_categories[$value]}.php'>" . $this->model->distinct_categories[$value] . "</a>";
        }
        echo '               </ul>
                        </div>
                   </div>
                   <div class="col-md-3"></div>
              </div>';
    }
    public function getFilterMenu( $item )
    {
        $i = 0;
        $n = 0;
        /*echo '<div class="row">
                  <div class="col-md-3">
                      <form action="apple.php" method="post">
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
            echo '<em> ' . $this->model->getDistinctProductNames($k) . '</em><br />';
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
    public function getItems() {
        $i = 0;
        echo '<div class="col-md-9">';
        while ( $i < count($this->model->id)) {
            echo '<div class="row">
                    <div class="col-md-3 wow fadeInUp">
                        <img src="' . $this->model->getPhoto($i) . '" />
                    </div>
                    <div class="col-md-5 wow fadeInUp">
                        <p class="spacer"></p>
                        <h id="header-items" style="font-size: 20px;">' . $this->model->getProductName($i) . '</h>
                        <span><br />by ' . $this->model->getCategory($i) . '</span>
                        <p id="price">' . $this->model->getPrice($i) . '$' . ' ' . '<span id="prev-price"><strike>' . $this->model->getPriviousPrice($i) . '$' . '</strike> (' . $this->model->getShipping($i) . ' ' . 'days shipping)</span></p>
                        <p id="prev-price"> In stock on ' . $this->model->getTimeOfAdding($i) . '</p>
                        <p>Average price for this product: ' . $this->model->getAverage($i) . '$' . '</p>
                        <p style="text-align: left"><em>Short description: </em>' . $this->model->getDescription($i) . '</p>
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
    public function actionGetFooter() {
        echo   '<footer>
                    <div class="container">
                         <div class="row">
                             <div class="col-sm-1"></div>
                                 <div class="col-sm-12">
                                 <ul class="nav nav-list">
                                     <li class="divider"></li>
                                 </ul>
                             </div>
                         </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2 wow fadeInLeft">
                                <ul>
                                    <li class="footer-menu"><b>Shop</b></li>
                                    <li><a class="items" href="/">Home</a></li>
                                    <li><a class="items" href="phones-all.php">Phones</a></li>
                                    <li><a class="items" href="notebooks.php">Notebooks</a></li>
                                    <li><a class="items" href="devices.php">Devices</a></li>
                                    <li><a class="items" href="tv.php">TV</a></li>
                                    <li><a class="items" href="support.php">Support</a></li>
                                    <li><a class="items" href="cart.php">Cart</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-2 wow fadeInLeft">
                                <ul>
                                    <li class="footer-menu"><b>Store</b></li>
                                    <li><a class="items" href="/store">Find our store</a></li>
                                    <li><a class="items" href="/financing">Financing</a></li>
                                    <li><a class="items" href="/order">Order Status</a></li>
                                    <li><a class="items" href="/shop">Shopping help</a></li>
                                    <li><a class="items" href="/info">Info</a></li>
                                    <li><a class="items" href="/offices">Offices</a></li>
                                    <li><a class="items" href="/cell">Cell</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-2 wow fadeInUp">
                                <ul>
                                    <li class="footer-menu"><b>Account</b></li>
                                    <li><a class="items" href="/shop-id">Find your Id</a></li>
                                    <li><a class="items" href="/store">Store account</a></li>
                                </ul>
                                <ul>
                                    <li class="footer-menu"><b>Most valuable</b></li>
                                    <li><a class="items" href="/responsibility">Responsibility</a></li>
                                    <li><a class="items" href="/privacy">Privacy</a></li>
                                    <li><a class="items" href="/setting">Setting</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-2 wow fadeInRight">
                                <ul>
                                    <li class="footer-menu"><b>About Us</b></li>
                                    <li><a class="items" href="/our-company">Our company</a></li>
                                    <li><a class="items" href="/people">In-touch People</a></li>
                                    <li><a class="items" href="/managers">Our managers</a></li>
                                    <li><a class="items" href="/offices">Offices</a></li>
                                    <li><a class="items" href="/comments">Comments</a></li>
                                    <li><a class="items" href="/business">Business</a></li>
                                    <li><a class="items" href="/director">Director</a></li>
                                    <li><a class="items" href="/job">Job</a></li>
                                    <li><a class="items" href="/contact-us">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-2 wow fadeInRight">
                                <ul>
                                    <li class="footer-menu"><b>For education</b></li>
                                    <li><a class="items" href="/notebooks">Notebooks</a></li>
                                    <li><a class="items" href="/devices">Phones</a></li>
                                </ul>
                                <ul>
                                    <li class="footer-menu"><b>Business</b></li>
                                    <li><a class="items" href="/shop-id">Using notebooks in business</a></li>
                                    <li><a class="items" href="/store">Using phones in day-to-day life</a></li>
                                    <li><a class="items" href="/shop-id">Using watches in business</a></li>
                                </ul>
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
                                    <li><a class="items" href="/privacy">Privacy</a></li>
                                    <li><a class="items" href="/refunds">Refunds</a></li>
                                    <li><a class="items" href="/sales">Sales</a></li>
                                    <li><a class="items" href="site-map">Site map</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                </footer>
                <script src="js/jquery-min.js"></script>
                <script src="js/bootstrap.min.js"></script>
            </body>';
    }
}