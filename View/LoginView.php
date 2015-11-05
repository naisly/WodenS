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
                                    <li><a href="register.php">Register</a></li>
                                    <li><a href="login.php">Login</a></li>
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
               </div>';
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

    public function successMessage() {

        echo '<div class="alert alert-success" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Success:</span>
                Well done! Thank you for the register. <a href="login.php">Login >></a>
                </div>';
    }
}