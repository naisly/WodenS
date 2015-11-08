<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 17:00
 */
class ProfileView
{
    private $model;
    public function __construct(ProfileModel $model)
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

    public function getTable() {
        echo '
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product name</th>
                        <th>Quantity</th>
                        <th class="text-right">Category</th>
                        <th class="text-right">Price</th>
                    </tr>
                </thead>
                <tbody>';
                    $i = 0;
                    while ($i < count($this->model->id_array)){
                    echo '
                    <tr>
                        <td class="text-center">#' . $this->model->getIdArray($i) . '</td>
                        <td class="text-left">' . $this->model->getProductNameArray($i) . '</td>
                        <td>' . $this->model->getQuantityOfItem($i) .'</td>
                        <td class="text-right">' . $this->model->getCategoryArray($i) . '</td>
                        <td class="text-right">' . $this->model->getPriceArray($i) * $this->model->getQuantityOfItem($i) . ' $</td>
                        <td>
                            <button class="btn btn-sm btn-warning">Remove</button>
                        </td>
                    </tr>';
                            $i++;
                        }
        echo'   </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-right">Total:</td>
                        <td class="text-right">' .
                            $this->model->getPrice() . ' $'
                     .   '</td>
                    </tr>
                </tfoot>
            </table>
            <div class="text-center">
                <a class="btn btn-primary" href="#/products">Continue shopping</a>
                <a class="btn btn-primary" href="#/placeorder">Place order now</a>
            </div>';
    }
}