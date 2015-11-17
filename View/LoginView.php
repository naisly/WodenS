<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 */

include_once('DefaultView.php');

class LoginView extends DefaultView
{
    private $model;
    public function __construct(LoginModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
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
                Your selected item was Added to cart! Cart subtotal (' . $this->model->getAItems() . ' items) $' . $this->model->getAPrice() .'
                    <div class="pull-right" style="margin-top: 8px;">
                        <button class="cart btn btn-default" onclick="location.href=';
                            echo "'cart.php'";
                            echo '">Cart</button>';
        echo            '<button class="cart btn btn-primary" onclick="location.href=';
                            echo "'placeorder.php'";
                            echo '">Procceed to checkout (' . $this->model->getAItems() . ' items)</button>
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
              </div>
              <script src="js/jquery-min.js"></script>
              <script src="js/bootstrap.min.js"></script>';
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