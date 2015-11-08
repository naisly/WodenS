<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 */
class LoginView
{
    private $model;
    public function __construct(LoginModel $model)
    {
        $this->model = $model;
    }

    public function DoctypeView() {

        return "<!DOCTYPE html>" .
                "<html>" .
                "<head>" .
                "<link rel='stylesheet' href='css/bootstrap.css' />" .
                "<link rel='stylesheet' href='css/login.css' />" .
                "<link rel='stylesheet' href='css/styles.css' />" .
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
                                } else {
                                    echo '<li><a href="register.php">Register</a></li>';
                                    echo '<li><a href="login.php">';
                                    echo 'Login</a></li>';
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

    public function RegisterView() {

        echo  '<div class="text-center">
                 <img id="main" src="images/default.png" />
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4 margin-auto">
                              <fieldset class="field_set">
                                  <h1>Create account</h1>
                                  <form action="thank-you.php" method="post">
                                     <div class="form-group">
                                        <label for="name">Your name</label>
                                        <input type="text" class="form-control" name="name" id="name" required/>
                                     </div>
                                     <div class="form-group">
                                        <label for="email">Your email</label>
                                        <input type="email" class="form-control" name="email" id="email" required/>
                                     </div>
                                     <div class="form-group">
                                        <label for="email-again">Email again</label>
                                        <input type="email" class="form-control" name="email-again" id="email-again" required/>
                                     </div>
                                     <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="at least 6 characters" required/>
                                     </div>
                                     <div class="form-group">
                                        <label for="password-again">Password again</label>
                                        <input type="password" class="form-control" name="password-again" id="password-again" required/>
                                     </div>
                                     <div class="form-group text-center">
                                        <button class="form-control btn btn-default" id="submit">Create your WodenS account</button>
                                     </div>
                                  </form>
                                  <p>By creating an account, you agree to Woden S <a href="#">Conditions of Use</a>
                                     and <a href="#">Privacy Notice</a>.
                                  </p>
                                  <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-8">
                                          <div class="line"></div>
                                      </div>
                                      <div class="col-md-2"></div>
                                  </div>

                                  <p class="already-registered">Already have an account? <a href="login.php">Sign In</a></p>
                              </fieldset>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>
               <div class="container">
                   <div class="col-md-12">
                       <div class="line"></div>
                   </div>
               </div>
               <div class="min-spacer"></div>
               <div class="row">
                   <div class="col-md-12 text-center">
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

    public function errorEmailMessage() {

        echo '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Please enter a valid email address or check the second one
              </div>';
    }

    public function errorPasswordMessage() {

        echo '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Please write correct password or check the second one
              </div>';
    }

    public function errorMinCountMessage() {

        echo '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Password may contain at least 6 characters
              </div>';
    }

    public function errorLoginMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Incorrert email or password! Please check again
              </div>';
    }

    public function errorRegisteredEmailMessage() {

        echo '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                This email is already in use! Try another one
              </div>';
    }

    public function successMessage() {

        echo '<div class="alert alert-success" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Well done! Thank you for the register. <a href="login.php">Login >></a>
                </div>';
    }

    public function addedItemMessage() {

        echo '<div class="alert alert-success" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                <img src="' . $_SESSION['photo'] . '" width="50" height="50" />
                Your selected item was Added to cart! Cart subtotal (' . $this->model->getQuantity() . ' items) $' . $this->model->getPrice() .'
                    <div class="pull-right" style="margin-top: 8px;">
                        <button class="cart btn btn-default">Cart</button><button class="btn btn-primary">Proceed to checkout (2 items) </button>
                    </div>
                </div>';
    }

    public function errorAddItemMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Please, login to add items in your cart
                </div>';
    }

    public function getFooter() {

        echo '<div class="bottom-spacer">
               <div class="row">
                   <div class="col-md-12 text-center">
                        <ul class="hor_nav">
                            <li><a class="items" href="/privacy">Privacy</a></li>
                            <li><a class="items" href="/refunds">Refunds</a></li>
                            <li><a class="items" href="/sales">Sales</a></li>
                            <li><a class="items" href="site-map">Site map</a></li>
                        </ul>
                            <p id="copyright"> &copy; Woden S Inc. All rights reserved.</p>
                   </div>
               </div>
              </div>';
    }

    public function getLoginForm() {
        echo '<div class="text-center">
                 <img id="main" src="images/default.png" />
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4 margin-auto">
                              <fieldset class="field_set">
                                  <h1>Sign In</h1>
                                  <form action="check.php" method="post">
                                     <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required/>
                                     </div>
                                     <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="at least 6 characters" required/>
                                     </div>
                                     <div class="form-group text-center">
                                        <button class="form-control btn btn-default" id="submit">Sign In</button>
                                     </div>
                                  </form>
                                  <p>By signing in you are agreeing to our <a href="#">Conditions of Use and Sale</a>
                                     and our <a href="#">Privacy Notice</a>.
                                  </p>
                                  <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-8">
                                          <div class="line"></div>
                                      </div>
                                      <div class="col-md-2"></div>
                                  </div>

                                  <p class="already-registered">New to WodenS ?</p>
                                  <form action="register.php" method="post">
                                     <button class="form-control btn btn-primary" id="redirect">Create an account</button>
                                  </form>
                              </fieldset>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>
               <div class="container">
                   <div class="col-md-12">
                       <div class="line"></div>
                   </div>
               </div>
               <div class="min-spacer"></div>
               <div class="row">
                   <div class="col-md-12 text-center">
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