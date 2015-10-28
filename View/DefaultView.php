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

        public function InitialView()
        {
            echo "<div class='col-md-4'></div>" .
                "<div class='col-md-4'>";
            foreach ($this->model->category as $value => $key) {
                echo "<a href='{$this->model->category[$value]}.php'>" . $this->model->category[$value] . "</a>";
            }
            echo "</div>" .
                "<div class='col-md-4'></div>";

        }

        public function getItems()
        {
            $i = 0;
            echo '<div class="panel-default items-row pointer">
                <div class="col-xs-3"></div>
                        <div class="col-xs-6 items-align">
                            <ul class="text-align">
                                <a style="text-decoration: none" href="#">All</a>
                                <a style="text-decoration: none">';
            foreach ($this->model->category as $value => $key) {
                echo "<a href='{$this->model->category[$value]}.php'>" . $this->model->category[$value] . "</a>";
                while ( $i < count($this->model->id)) {
                    echo '</ul>
                        </div>
                        <div class="col-sm-3"></div>
                            <div class="col-xs-12">
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-2">
                                        <img src="' . $this->model->photo[$i] . '">
                                    </div>
                                    <div class="col-xs-5">
                                        <p class="spacer"></p>
                                        <h id="header-items" style="font-size: 20px;">' . $this->model->description[$i] . '</h>
                                        <span><br />by ' . $this->model->category[$i] . '</span>

                                        <p id="price">' . $this->model->price[$i] . '$' . ' ' . '<span id="prev-price"><strike>' . $this->model->previous_price[$i] . '$' . '</strike> (' . $this->model->shipping[$i] . ' ' . 'days shipping)</span></p>
                                        <p id="prev-price"> In stock on ' . $this->model->time_of_adding[$i] . '</p>

                                        <p>Average price for this product: $155.42 </p>
                                    </div>
                                    <div class="col-xs-2">
                                        <p class="spacer"></p>

                                        <p>Free shipping on orders greater than $35 </p>

                                        <p><b>Product features: </b></p>
                                        <p>' . $this->model->features[$i] . '</p>
                                        <button>
                                            Add to cart
                                        </button>
                                    </div>
                                    <div class="container">
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
                            </div>';
                $i++;
                }
            }
        }
    }