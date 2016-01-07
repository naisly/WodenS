<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 05.11.2015
 * Time: 22:32
 *
 * ==================
 * Register view, errors messages, login view,
 * added item to the cart message
 * =================
 */

include_once('DefaultView.php');

class LoginView extends DefaultView
{
    /*
     * MVC constructor
     * with LoginModel
     *
     * @private $model
     */
    private $model;
    public function __construct(LoginModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /*
     * Register page
     */
    public function RegisterView() {

        $this->headerView( 'register' );
        if(isset($_GET['email_error'])){
            if($_GET['email_error'] == 1){
                $this->errorRegisteredEmailMessage();
            }
        }

        echo '<div class="container-fluid">
                  <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4 margin-auto">
                              <fieldset class="field_set">
                                  <h1>Create account</h1>
                                  <form action="registration-completed" method="post">
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
                                  <p>By creating an account, you agree to Woden S <a href="/shop/terms/" class="link">Conditions of Use</a>
                                     and <a href="/shop/privacy-policy/" class="link">Privacy Notice</a>.
                                  </p>
                                  <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-8">
                                          <div class="line"></div>
                                      </div>
                                      <div class="col-md-2"></div>
                                  </div>

                                  <p class="already-registered">Already have an account? <a href="login" class="link">Sign In</a></p>
                              </fieldset>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>';

        $this->actionGetFooter( 'Register' );
    }

    /*
     * Alert wrong email
     */
    private function errorEmailMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px !important;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Please enter a valid email address or check the second one
              </div>';
    }

    /*
     * Alert wrong password
     */
    private function errorPasswordMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px !important;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Please write correct password or check the second one
              </div>';
    }

    /*
     * Alert Min Count error
     */
    private function errorMinCountMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px !important;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Password may contain at least 6 characters
              </div>';
    }

    /*
     * Alert wrong email or password
     */
    private function errorLoginMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Incorrert email or password! Please check again
              </div>';
    }

    /*
     * Alert already registered
     */
    private function errorRegisteredEmailMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px !important;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                This email is already in use! Try another one
              </div>';
    }

    /*
     * Alert success
     */
    private function successMessage() {

        /*echo '<div class="alert alert-success" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Well done! Thank you for the register. <a href="login">Login >></a>
                </div>';*/

        echo '<div class="text-center thank-you">
                  <h1>Thank you for the registration.</h1>
                  <a class="links" id="main-link" href="login" style="text-decoration: none; margin: 0 !important;">';

        echo $this->model->Translate('Login');

        echo         ' ' . '<img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
              </div>';
    }

    /*
     * Alert item has been added
     * to the cart
     */
    public function addedItemMessage() {

        echo '<div class="alert alert-success" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                <img src="/shop/' . $_SESSION['photo'] . '" width="50" height="50" />
                Your selected item was Added to cart! Cart subtotal (' . $this->model->getAItems() . ' items) $' . $this->model->getAPrice() .'
                    <div class="pull-right" style="margin-top: 8px;">
                        <button class="cart btn btn-default" style="margin-right: 20px;" onclick="location.href=';
                            echo "'/shop/account/cart'";
                            echo '">Cart</button>';
        echo            '<button class="cart btn btn-primary" onclick="location.href=';
                            echo "'/shop/account/placeorder'";
                            echo '">Procceed to checkout (' . $this->model->getAItems() . ' items)</button>
                    </div>
                </div>';

        $this->getFooter();
    }

    /*
     * Error login
     */
    private function errorAddItemMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Please, login to add items in your cart
                </div>';
    }

    /*
     * Footer at the bottom
     */

    public function getLoginForm() {
        echo  '<div class="container-fluid">
                  <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4 margin-auto">
                              <fieldset class="field_set">
                                  <h1>Woden Sims Account</h1>
                                  <form action="check" method="post">
                                     <div class="form-group" style="margin-top: 10%;">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required/>
                                     </div>
                                     <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required/>
                                     </div>
                                     <div class="form-group text-center">
                                        <button class="form-control btn btn-default" id="submit">Sign In</button>
                                     </div>
                                  </form>
                                  <p>By signing in you are agreeing to our <a href="/shop/terms/" class="link">Conditions of Use</a>
                                     and our <a href="/shop/privacy-policy/" class="link">Privacy Notice</a>.
                                  </p>
                                  <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-8">
                                          <div class="line"></div>
                                      </div>
                                      <div class="col-md-2"></div>
                                  </div>
                                  <p class="already-registered" style="padding-bottom: 3%;">New to Woden Sims ?</p>
                                  <!--<form action="register" method="post">
                                     <button class="form-control btn btn-primary" id="redirect">Create an account</button>
                                  </form>-->
                                  <a class="btn btn-primary" href="register" style="width: 100%; margin-bottom: 20px;">Create an account</a>
                              </fieldset>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>';

        $this->actionGetFooter( 'Login' );
    }

    public function displayLoginErrors() {

        if(isset($_SESSION['login_user'])){

            header("Location: account/");
        }

        if(isset($_GET['auth'])){
            if($_GET['auth'] == 'false'){
                $this->errorLoginMessage();
            }
        }

        if(isset($_SESSION['add_item'])){
            if($_SESSION['add_item'] == 1) {
                $this->errorAddItemMessage();
            }
        }
    }

    public function actionValidate() {

        if($this->model->getEmail() !== $this->model->getEmailAgain()){
            $this->errorEmailMessage();
            $this->RegisterView();
        } else if($this->model->getPassword() !== $this->model->getPasswordAgain()){
            $this->errorPasswordMessage();
            $this->RegisterView();
        } else if($this->model->getPassword() === $this->model->getPasswordAgain() && (strlen($this->model->getPassword()) < 7)){
            $this->errorMinCountMessage();
            $this->RegisterView();
        } else if(isset($_GET['email_error'])){
            if($_GET['email_error'] == 1) {
                $this->errorRegisteredEmailMessage();
                $this->RegisterView();
            }
        } else {
            $this->headerView( 'login' );
            $this->successMessage();

            $this->actionGetFooter( 'Thank You' );
        }
    }
}