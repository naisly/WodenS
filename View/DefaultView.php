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
                while ( $i < count($this->model->id)) {
                    echo '</ul>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img src="' . $this->model->getPhoto($i) . '">
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="spacer"></p>
                                        <h id="header-items" style="font-size: 20px;">' . $this->model->getProductName($i) . '</h>
                                        <span><br />by ' . $this->model->getCategory($i) . '</span>

                                        <p id="price">' . $this->model->getPrice($i) . '$' . ' ' . '<span id="prev-price"><strike>' . $this->model->getPriviousPrice(($i)) . '$' . '</strike> (' . $this->model->getShipping($i) . ' ' . 'days shipping)</span></p>
                                        <p id="prev-price"> In stock on ' . $this->model->getTimeOfAdding($i) . '</p>

                                        <p>Average price for this product:' . ' '  . $this->model->getAveragePrice($i) . '$' . '</p>
                                        <p>' . '<em>Short description: </em>' . ' '  . $this->model->getDescription($i) . '</p>
                                    </div>
                                    <div class="col-xs-3">
                                        <p class="spacer"></p>

                                        <p>Free shipping on orders greater than $35 </p>

                                        <p><b>Product features: </b></p>
                                        <p>' . $this->model->getFeatures($i) . '</p>
                                        <button>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                            <div class="col-sm-7">
                                                <ul class="nav nav-list">
                                                    <li class="divider"></li>
                                                </ul>
                                            </div>
                                        </div>';
                    $i++;
                    /*while ($n < 1) {
                        echo '<div class="col-xs-4">
                                   <form action="apple.php" method="post">
                                        <div class="input-group checkbox-font">
                                             <input type="checkbox" name="iphones[]" id="color" value="Iphone4"> Iphone 4 <br/>
                                             <input type="checkbox" name="iphones[]" id="color" value="Iphone4S"> Iphone 4S <br/>
                                             <input type="checkbox" name="iphones[]" id="color" value="Iphone5"> Iphone 5 <br/>
                                             <input type="checkbox" name="iphones[]" id="color" value="Iphone5C"> Iphone 5C <br/>
                                             <input type="checkbox" name="iphones[]" id="color" value="Iphone5S"> Iphone 5S <br/>
                                             <input type="checkbox" name="iphones[]" id="color" value="Iphone6"> Iphone 6 <br/>
                                             <input type="checkbox" name="iphones[]" id="color" value="Iphone6S"> Iphone 6S
                                        </div>
                                        <div class="input-group">
                                             <label for="min-price">Select min price</label>
                                             <input type="text" class="form-control" name="min" placeholder="Min price">
                                        </div>
                                        <div class="input-group">
                                             <label for="max-price">Select max price</label>
                                             <input type="text" class="form-control" name="max" placeholder="Max price">
                                        </div>
                                        <div class="input-group">
                                             <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                    <form action="apple.php" method="post">
                                        <input type="hidden" name="highest-price">
                                        <button class="btn btn-default">Sort by the highest price</button>
                                    </form>
                                    <form action="apple.php" method="post">
                                        <input type="hidden" name="lowest-price">
                                        <button class="btn btn-default">Sort by the lowest price</button>
                                    </form>
                                    <form action="apple.php" method="post">
                                        <input type="hidden" name="last-added">
                                        <button class="btn btn-default">Last added</button>
                                    </form>
                                    <form action="apple.php" method="post">
                                        <input type="hidden" name="fastest-shipping">
                                        <button class="btn btn-default">Sort by fastest shipping</button>
                                    </form>
                            </div>
                                </div>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <ul class="nav nav-list">
                                                    <li class="divider"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>';
                        $n++;
                    }*/

            }
        }
    }