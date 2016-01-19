<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 13:47
 */

include_once('DefaultView.php');

class CheckOrderView extends DefaultView
{
    /*
     * MVC constructor
     * with AdminModel
     *
     * @private $model
     */
    private $model;
    public function __construct(CheckOrderModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getOrderPage() {

        $this->DoctypeView( 'Orders' );
        $this->headerView( 'order' );
        $this->getSignInBar();
        $this->actionGetFooter( 'Order' );
    }

    private function getSignInBar() {

        echo '<div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="bordered">
                              <div class="text">
                                  <h class="text-left sign-in">';

        echo $this->model->Translate('Sign In');

        echo                      '</h>
                                  <h class="pull-right secured">';

        echo $this->model->Translate('Secured');

        echo '</h><img src="/images/secured.png" width="20" height="20"class="pull-right"/>
                              </div>

                              <div class="divide"></div>


                              <div class="row media-padding">
                                  <div class="col-md-6 account-shadows">
                                      <div class="row">
                                           <div class="col-md-2"></div>
                                           <div class="col-md-7">
                                              <div class="account">
                                                  <form action="/check" method="post">
                                                      <h class="h-account">';

        echo $this->model->Translate('Account');

        echo                                         '</h>
                                                      <input type="text" class="form-control margin-20" name="email" id="email" placeholder="Woden Sims Email" style="background-color: white;" />
                                                      <input type="password" class="form-control margin-20" name="password" id="password" placeholder="Password" />

                                                      <div class="forgot">
                                                          <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'forgot-password/" class="text-left link">';

        echo $this->model->Translate('Forgot your Username');

        echo '<br />';

        echo $this->model->Translate('or Password?');

        echo                                             '</a>
                                                          <button class="btn btn-primary pull-right button-sign">';

        echo $this->model->Translate('Sign In');

        echo                                             '</button>
                                                      </div>
                                                  </form>

                                                  <div class="account-space"></div>
                                              </div>
                                           </div>
                                           <div class="col-md-3"></div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="row">
                                           <div class="col-md-2"></div>
                                           <div class="col-md-7">
                                              <div class="account">
                                                  <form action="/order-status/single" method="get">
                                                      <h class="h-account">';

        echo $this->model->Translate('Look up for order');

        echo                                         '</h>
                                                      <input type="text" class="form-control margin-20" name="order_number" id="order_number" placeholder="';

        echo $this->model->Translate('Order Number');

        echo '" />
                                                      <input type="text" class="form-control margin-20" name="order_email" id="order_email" placeholder="';

        echo $this->model->Translate('Your email');

        echo '" />

                                                      <div class="forgot">
                                                          <a href="#" class="text-left link" style="color: #08b;">';

        echo $this->model->Translate('Where is order number?');

        echo                                             '</a>
                                                          <button class="btn btn-primary pull-right button-continue">';

        echo $this->model->Translate('Continue');

        echo                                             '</button>
                                                          <div class="something">
                                                              <div class="find-number">
                                                                  <h class="h-find">';

        echo $this->model->Translate('Find your order number');

        echo                                                     '</h><br />
                                                                  <h class="sub-find">';

        echo $this->model->Translate('Number is located with thanks message or in your account');

        echo                                                     '</h>
                                                                  <img class="order-support" src="/images/order-support.png" width="500"/>
                                                              </div>
                                                          </div>
                                                          <div class="media-spacer"></div>
                                                      </div>
                                                  </form>


                                              </div>

                                           </div>
                                            <div class="col-md-3"></div>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="account-space"></div>

                                      <div id="full-divider"></div>

                                      <div style="margin-top: 30px;"></div>

                                      <div class="pull-left">
                                          <button class="btn btn-default cancel-button" onclick="goBack();">';

        echo $this->model->Translate('Cancel');

        echo                              '</button>
                                      </div>
                                      <div class="pull-right media-padding">
                                          <h class="contact-customers">';

        echo $this->model->Translate('For any questions contact our costumers +390 153 16 183');

        echo                              '</h>
                                      </div>
                                  </div>
                              </div>

                              <div class="margin-footer"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <script>
                function goBack() {
                    window.history.back();
                }
              </script>';
    }

}