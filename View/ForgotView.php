<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.01.2016
 * Time: 22:19
 */

include_once('DefaultView.php');

class ForgotView extends DefaultView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getProblemsBar() {

        echo '<div class="gradient-bg">
                  <div class="text-center">
                      <div class="main-sign" style="padding-top: 80px;">
                          <h1 class="any-problems">Any problems with Sign In?</h1>
                      </div>
                  </div>
              </div>';
    }

    public function getFirstStep() {

        echo '<div class="main">
                    <div class="text-center">
                          <h1 id="get-started">Enter your Email to get started</h1>
                          <h1 id="sub-get-started">We can help you reset your password and security info. <br />
                          Follow the instructions below.</h1>
                    </div>
                    <form action="check-first-step" method="get">
                        <input type="hidden" name="session_auth" id="session_auth" value="' . $_SESSION["session_auth"] . '" />

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">';

        if(isset($_GET['error_email'])){
            $this->errorEmailMessage();
        }

        echo                       '<div class="form-group" style="margin-top: 15px;">
                                        <input type="email" class="form-control" placeholder="email@example.com" id="email" name="email" required />
                                    </div>

                                    <div class="text-center" style="margin-top: 50px;">
                                        <button class="btn_as_link links" id="link">Next <img src="/shop/images/arrow-blue.png" width="20" height="20"/></button>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>
              </div>';

        session_write_close();
    }

    /*
     * Alert wrong email or password
     */
    private function errorEmailMessage() {

        echo '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Email that you have written not found in our database! Please, check another one.
              </div>';
    }

    public function getSecondStep() {

        echo '';
    }

    public function getThirdStep() {

        echo '';
    }

    public function getFourthStep() {

        echo '';
    }

    public function getLastStep() {

        echo '';
    }
}