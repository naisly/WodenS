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
                          <h1 class="any-problems">' . $this->model->Translate($text) . '</h1>
                      </div>
                  </div>
              </div>';
    }

    public function getFirstStep() {

        echo '<div class="main">
                    <div class="text-center">
                          <h1 id="get-started">';

        echo $this->model->Translate('Enter your Email to get started');

        echo             '</h1>
                          <h1 id="sub-get-started">';

        echo $this->model->Translate('We can help you reset your password and security info.') . '<br />' . $this->model->Translate('Follow the instructions below.') . '</h1>
                    </div>
                    <form action="check-data" method="get">

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
                                        <button class="btn_as_link links" id="link">';

        $this->model->Translate('Next');

        echo                            '<img src="/images/arrow-blue.png" width="20" height="20"/></button>
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
                <span class="sr-only">Error:</span>' . $this->model->Translate($text) . '</div>';
    }

    public function getSecondStep() {

        echo '<div class="main">
                    <div class="text-center">
                          <h1 id="get-started">';

        echo $this->model->Translate('Verify your birthday to continue.');

        echo              '</h1>
                    </div>
                    <form action="check-data" method="get">
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
                                        <button class="btn_as_link links" id="link">';

        echo $this->model->Translate('Next');

        echo '<img src="/images/arrow-blue.png" width="20" height="20"/></button>
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
                          <h1 id="get-started">';

        echo $this->model->Translate('Answer security questions');

        echo              '</h1>
                    </div>
                    <form action="check-data" method="get">
                        <input type="hidden" value="' . $_GET["email"] . '" name="email" id="email" />
                        <input type="hidden" value="' . $_GET["day_of_birth"] . '" name="day_of_birth" id="day_of_birth" />

                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6" style="margin-top: 50px;">';

        if(isset($_GET['error_questions'])){
            $this->getErrorMessage( 'Your information doesn\'t match the security information.' );
        }

        echo '<h1 class="question">' . $this->model->Translate($this->model->getQuestion1()) . '</h1>';
        echo '<div class="form-group" style="margin-top: 15px;">
                  <input type="text" class="form-control" placeholder="';

        echo $this->model->Translate('Answer for Question 1');

        echo '" id="sc-a-1" name="sc-a-1" required />
             </div>';

        echo '<h1 class="question">' . $this->model->Translate($this->model->getQuestion2()) . '</h1>';
        echo '<div class="form-group" style="margin-top: 15px;">
                  <input type="text" class="form-control" placeholder="';

        echo $this->model->Translate('Answer for Question 2');

        echo '" id="sc-a-2" name="sc-a-2" required />
             </div>';

        echo '<h1 class="question">' . $this->model->Translate($this->model->getQuestion3()) . '</h1>';
        echo '<div class="form-group" style="margin-top: 15px;">
                  <input type="text" class="form-control" placeholder="';

        echo $this->model->Translate('Answer for Question 3');

        echo '" id="sc-a-3" name="sc-a-3" required />
             </div>';

        echo                       '<div class="text-center" style="margin-top: 50px;">
                                        <button class="btn_as_link links" id="link">';

        echo $this->model->Translate('Next');

        echo '<img src="/images/arrow-blue.png" width="20" height="20"/></button>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </form>
              </div>';
    }

    public function getLastStep() {

        echo '<div class="main">
                    <div class="text-center">
                          <h1 id="get-started">';

        echo $this->model->Translate('Please, complete the last step in your Recovering process.');

        echo             '</h1>
                          <h1 id="sub-get-started">';

        echo $this->model->Translate('Enter the new password and make sure that they are the same.');

        echo             '</h1>
                    </div>
                    <form action="check-data" method="post">
                        <input type="hidden" value="' . $_GET["email"] . '" name="email" id="email" />
                        <input type="hidden" value="' . $_GET["day_of_birth"] . '" name="day_of_birth" id="day_of_birth" />
                        <input type="hidden" value="' . $_GET["sc-a-1"] . '" name="sc-a-1" id="sc-a-1" />
                        <input type="hidden" value="' . $_GET["sc-a-2"] . '" name="sc-a-2" id="sc-a-2" />
                        <input type="hidden" value="' . $_GET["sc-a-3"] . '" name="sc-a-3" id="sc-a-3" />

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">';

        if(isset($_GET['success'])){
            if($_GET['success'] == 'false') {
                $this->getErrorMessage('The entered passwords do not match. Please, fill the correct data.');
            }
        }

        echo                       '<div class="form-group" style="margin-top: 15px;">
                                        <input type="password" class="form-control" placeholder="';

        echo $this->model->Translate('New password');

        echo '" id="password" name="password" required />
                                    </div>

                                    <div class="form-group" style="margin-top: 15px;">
                                        <input type="password" class="form-control" placeholder="';

        echo $this->model->Translate('New password again');

        echo '" id="repeat_password" name="repeat_password" required />
                                    </div>

                                    <div class="text-center" style="margin-top: 50px;">
                                        <button class="btn_as_link links" id="link">';

        echo $this->model->Translate('Complete');

        echo                            '</button>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </form>
              </div>';
    }

    public function getSuccessMessage() {

        echo '<style>
                  body, html {
                      background-color: #f1f1f1;;
                  }
              </style>';
        echo '<div class="text-center" style="margin-top: 200px;">
                  <h1 class="success">';

        echo $this->model->Translate('You have successfully changed your password.');

        echo     '</h1>
                  <h1 class="sub-success">';

        echo $this->model->Translate('Now you can use your Account');

        echo     '</h1>
                  <a id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'login" style="text-decoration: none; margin-left: 0 !important; font-size: 30px;">';

        echo $this->model->Translate('Login');

        echo '<img src="/images/arrow-blue-f1.png" width="25" height="25"/></a>
              </div>

              <img src="/images/phones-bg.png" class="full-image-cascade" />';
    }
}