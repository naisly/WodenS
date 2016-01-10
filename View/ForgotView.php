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
    public function __construct(ForgotModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getTopBar( $text ) {

        echo '<div class="gradient-bg">
                  <div class="text-center">
                      <div class="main-sign" style="padding-top: 80px;">
                          <h1 class="any-problems">' . $text . '</h1>
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

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">';

        if(isset($_GET['error_email'])){
            $this->getErrorMessage( 'Email that you have written not found in our database! Please, check another one.' );
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
    protected function getErrorMessage( $text ){

        echo '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>' . $text . '</div>';
    }

    public function getSecondStep() {

        echo '<div class="main">
                    <div class="text-center">
                          <h1 id="get-started">Verify your birthday to continue.</h1>
                    </div>
                    <form action="check-second-step" method="get">
                        <input type="hidden" value="' . $_GET["email"] . '" name="email" id="email" />

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">';

        if(isset($_GET['error_day_of_birth'])){
            $this->getErrorMessage( 'Your information doesn\'t match the security information.' );
        }

        echo                       '<div class="form-group" style="margin-top: 15px;">
                                        <input type="date" class="form-control" id="day_of_birth" name="day_of_birth" required />
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
    }

    public function getThirdStep() {

        echo '<div class="main">
                    <div class="text-center">
                          <h1 id="get-started">Answer security questions</h1>
                    </div>
                    <form action="check-third-step" method="get">
                        <input type="hidden" value="' . $_GET["email"] . '" name="email" id="email" />

                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6" style="margin-top: 50px;">';

        if(isset($_GET['error_day_of_birth'])){
            $this->getErrorMessage( 'Your information doesn\'t match the security information.' );
        }

        echo '<h1 class="question">' . $this->model->getQuestion1() . '</h1>';
        echo '<div class="form-group" style="margin-top: 15px;">
                  <input type="text" class="form-control" placeholder="Answer for Question 1" id="sc-a-1" name="sc-a-1" required />
             </div>';

        echo '<h1 class="question">' . $this->model->getQuestion2() . '</h1>';
        echo '<div class="form-group" style="margin-top: 15px;">
                  <input type="text" class="form-control" placeholder="Answer for Question 2" id="sc-a-2" name="sc-a-2" required />
             </div>';

        echo '<h1 class="question">' . $this->model->getQuestion3() . '</h1>';
        echo '<div class="form-group" style="margin-top: 15px;">
                  <input type="text" class="form-control" placeholder="Answer for Question 3" id="sc-a-3" name="sc-a-3" required />
             </div>';

        echo                       '<div class="text-center" style="margin-top: 50px;">
                                        <button class="btn_as_link links" id="link">Next <img src="/shop/images/arrow-blue.png" width="20" height="20"/></button>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </form>
              </div>';
    }

    public function getFourthStep() {

        echo '';
    }

    public function getLastStep() {

        echo '';
    }
}