<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 16:07
 */
class OrderView
{
    private $model;
    public function __construct(OrderModel $model)
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
        session_start();
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
            echo '<li><a href="cart.php">Cart: ' . $this->model->getPrice() . '$';
            echo '<li><a href="#">' . $this->model->getQuantity() . ' items</a>';
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

    public function getPlaceOrder() {

        echo '
            <h2>Check out now</h2>
            <p class="text-left">Please enter your details, and well ship your goods right away!</p>
            <form name="shippingForm">
                <div class="well">
                    <h3>Ship to</h3>
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" class="form-control" required />
                    </div>
                    <h3>Address</h3>
                    <div class="form-group">
                        <label>Street Address</label>
                        <input name="street" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input name="city" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <input name="state" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Zip</label>
                        <input name="zip" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input name="country" class="form-control" required />
                    </div>
                    <h3>Options</h3>
                    <div class="checkbox">
                        <label>
                            <input name="giftwrap" type="checkbox" />
                                Gift wrap these items
                        </label>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary" href="complete-order.php">Complete order</a>
                    </div>
                </div>
            </form>
            <script src="js/jquery-min.js"></script>
            <script src="js/bootstrap.min.js"></script>';
    }

    public function thanksMessage() {

        echo '<div class="well">
                  <h2>Thanks!</h2>
                  Thanks for placing your order. Well ship your goods as soon as possible.
                  If you need to contact us, use reference #' . $this->model->getOrderId() . '.
              </div>';
    }
}