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
            return '<nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/index.html">
                            <img alt="Brand" src="images/default.png">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-custom" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="phones.html">Phones <span class="sr-only">(current)</span></a></li>
                            <li><a href="notebooks.html">Notebooks</a></li>
                            <li><a href="devices.html">Devices</a></li>
                            <li><a href="tv.html">TV</a></li>
                            <li><a href="support.html">Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cart <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>';
        }

        public function getItems()
        {
            $i = 0;
            $n = 0;
            echo '<div class="panel-default items-row pointer">
                <div class="col-xs-3"></div>
                        <div class="col-xs-6 items-align">
                            <ul class="text-align">
                                <a class="categories-list" style="text-decoration: none" href="Phones.php">All</a>';
            foreach ($this->model->distinct_categories as $value => $key) {
                echo "<a style='text-decoration: none;' class='categories-list' href='{$this->model->distinct_categories[$value]}.php'>" . $this->model->distinct_categories[$value] . "</a>";
            }
            echo '            </ul>
                            </div>
                        </div>
                  </div>';
            echo   '<div class="row">
                    <div class="col-sm-3"></div>
                        <div class="col-xs-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <form action="apple.php" method="post">
                                    <div class="col-md-2">
                                        <h class="search-item">Items: <br/></h>    <input type="checkbox" name="array1" id="array1" value="Iphone 4"'; if(isset($_POST['array1'])) echo "checked='checked'"; echo '/> <em>Iphone 4</em><br />
                                                                                   <input type="checkbox" name="array2" id="array2" value="Iphone 4S"'; if(isset($_POST['array2'])) echo "checked='checked'"; echo '/> <em>Iphone 4S</em><br/>
                                                                                   <input type="checkbox" name="array3" id="array3" value="Iphone 5"'; if(isset($_POST['array3'])) echo "checked='checked'"; echo '/> <em>Iphone 5</em><br/>
                                                                                   <input type="checkbox" name="array4" id="array4" value="Iphone 5S"'; if(isset($_POST['array4'])) echo "checked='checked'"; echo '/> <em>Iphone 5S</em><br/>
                                                                                   <input type="checkbox" name="array5" id="array5" value="Iphone 6"'; if(isset($_POST['array5'])) echo "checked='checked'"; echo '/> <em>Iphone 6</em><br/>
                                                                                   <input type="checkbox" name="array6" id="array6" value="Iphone 6S"'; if(isset($_POST['array6'])) echo "checked='checked'"; echo '/> <em>Iphone 6S</em><br/>
                                    </div>
                                    <div class="col-md-3">
                                        <h class="search-item">Min:</h> <input type="text" name="min" value="'; if(isset($_POST['min'])) echo $_POST['min'] ; echo '"><br />
                                        <h class="search-item">Max:</h> <input type="text" name="max" value="'; if(isset($_POST['max'])) echo $_POST['max'] ; echo '"><br />

                                    </div>
                                    <div class="col-md-4">
                                        <h class="search-item">Sort by price:</h><br />
                                               <input type="radio" name="sort_by_price" value="price " /> By highest <br />
                                               <input type="radio" name="sort_by_price" value="price DESC" /> By lowest <br />

                                        <h class="search-item">Sort by time of adding:</h><br />
                                               <input type="radio" name="sort_by_time" value="time" /> By latest <br />
                                               <input type="radio" name="sort_by_time" value="time DESC" /> By oldest <br />
                                    </div>
                                    <div class="col-md-3">
                                        <h class="search-item">Shipping: <br /></h>
                                              <input type="radio" name="sort_by_shipping" value="shipping" /> By fastest <br />
                                              <input type="radio" name="sort_by_shipping" value="shipping DESC" /> By slowest <br />
                                              <input class="btn btn-primary" id="submit" type="submit" value="Pick up goods">
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="container">
                     <div class="row">
                          <div class="col-sm-1"></div>
                               <div class="col-sm-12 wow slideInLeft">
                                    <ul class="nav nav-list">
                                        <li class="divider"></li>
                                    </ul>
                               </div>
                               <div class="col-sm-1"></div>
                          </div>
                     </div>
                </div>';
            while ( $i < count($this->model->id)) {
                echo '</ul>
                        </div>
                        <div class="col-sm-3"></div>
                            <div class="col-xs-12 wow fadeInUp">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-2 wow fadeInUp">
                                        <img src="' . $this->model->getPhoto($i) . '">
                                    </div>
                                    <div class="col-xs-5 wow fadeInUp">
                                        <p class="spacer"></p>
                                        <h id="header-items" style="font-size: 20px;">' . $this->model->getProductName($i) . '</h>
                                        <span><br />by ' . $this->model->getCategory($i) . '</span>
                                        <p id="price">' . $this->model->getPrice($i) . '$' . ' ' . '<span id="prev-price"><strike>' . $this->model->getPriviousPrice($i) . '$' . '</strike> (' . $this->model->getShipping($i) . ' ' . 'days shipping)</span></p>
                                        <p id="prev-price"> In stock on ' . $this->model->getTimeOfAdding($i) . '</p>
                                        <p>Average price for this product: ' . $this->model->getAverage($i) . '$' . '</p>
                                        <p style="text-align: left"><em>Short description: </em>' . $this->model->getDescription($i) . '</p>
                                    </div>
                                    <div class="col-xs-2 wow fadeInUp">
                                        <p class="spacer"></p>
                                        <p class="align-left">Free shipping on orders greater than $35 </p>
                                        <p class="align-left"><b>Product features: </b></p>
                                        <p class="align-left">' . $this->model->getFeatures($i) . '</p>
                                        <button class="btn btn-default">
                                            Add to cart
                                        </button>
                                    </div>
                                    <div class="container wow fadeInUp">
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-12">
                                                <ul class="nav nav-list">
                                                    <li class="divider"></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                    </div>
                            </div>
                            <script src="js/wow.js"></script>
                            <script>
                                new WOW().init();
                            </script>';
                $i++;
            }
        }
        public function actionGetFooter() {
            echo   '<footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-2 wow fadeInLeft">
                                <ul>
                                    <li class="footer-menu"><b>Shop</b></li>
                                    <li><a class="items" href="/">Home</a></li>
                                    <li><a class="items" href="phones.php">Phones</a></li>
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
            </body>';
        }
    }