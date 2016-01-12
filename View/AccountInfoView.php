<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 01.12.2015
 * Time: 18:36
 */

include_once('AccountOrderView.php');

class AccountInfoView extends AccountOrderView
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @private $model
     */
    private $model;
    public function __construct(AccountInfoModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getAccountPage() {

        $this->DoctypeView( 'Account' );
        $this->headerView( 'Account' );
        $this->getHeader( 'Main Account Page' );
        $this->getAccountBar();
        $this->getOrderTable();
        $this->changeAccountData();
        $this->getBillingInfo();
        $this->actionGetFooter( 'Account' );
    }

    private function getOrderTable()
    {

        echo '<div class="col-md-9" style="border-left: 1px solid #e4e4e4;">';

        if(($this->model->countAccountComplete() !== 0 ) || ($this->model->countAccountDone() !== 0)) {
            echo '<div class="table-responsive">
                        <h id="order-status">Change your order status:</h><br />
                        <table class="table table-striped table-spacer">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Status</th>
                                <th>Cancel</th>
                              </tr>
                            </thead>
                            <tbody>';

            //echo $this->model->getAccountComplete(0);
            if (($this->model->countAccountComplete() !== 0) || ($this->model->countAccountDone() !== 0)) {
                $i = 0;
                //echo $this->model->getCompleteOrder(0);
                while ($i < $this->model->countAccountComplete()) {
                    echo '<tr>
                      <td>#' . $this->model->getAccountComplete($i) . '</td>
                      <td>Completed</td>
                      <td>
                          <form action="account-cancel-order.php" method="post">
                              <button id="button-as-link">Cancel order</button>
                              <input type="hidden" value="' . $this->model->getAccountComplete($i) . '" name="order_id" id="order_id" />
                          </form>
                      </td>
                  </tr>';

                    $i++;
                }

                $i = 0;
                while ($i < $this->model->countAccountDone()) {
                    echo '<tr>
                      <td>#' . $this->model->getAccountDone($i) . '</td>
                      <td>Done</td>
                      <td>
                          <form action="account-cancel-order.php" method="post">
                              <button id="button-as-link">Remove</button>
                              <input type="hidden" value="' . $this->model->getAccountDone($i) . '" name="order_id" id="order_id" />
                          </form>
                      </td>
                  </tr>';

                    $i++;
                }

                echo '</tbody>
              </table>
            </div>
            <div class="cart-divider"></div>';
            } else {
                echo '<div class="cart-divider"></div>';
            }
        }
    }

    /*
     * Alert wrong email or password
     */
    private function errorMessage( $text ) {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: 15px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>' .
                $text .
              '</div>';
    }

    private function successMessage( $text ) {

        echo '<div class="alert alert-success" role="alert" style="margin-top: 15px;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>' .
            $text .
            '</div>';
    }

    private function changeAccountData() {

        echo       '<h class="main-page">Change your account entrance</h>';

        if(isset($_GET['wrong_password'])) {
            if($_GET['wrong_password'] == 1) {
                $this->errorMessage('Incorrect password. The data does not match the security information.');
            }
        } else if(isset($_GET['emails_not_match'])) {
            if($_GET['emails_not_match'] == 1) {
                $this->errorMessage('Incorrect input emails or check that they match.');
            }
        } else if(isset($_GET['email_registered'])) {
            if($_GET['email_registered'] == 1) {
                $this->errorMessage('This email already in use.');
            }
        } else if(isset($_GET['password_error'])) {
            if ($_GET['password_error'] == 1) {
                $this->errorMessage('Incorrect password or check the second one.');
            }
        } else if(isset($_GET['password_count_error'])) {
            if($_GET['password_count_error'] == 1) {
                $this->errorMessage('Password at least must contain 7 letters.');
            }
        } else if(isset($_GET['success_email'])){
            if($_GET['success_email'] == 1){
                $this->successMessage('Your email was successfully changed.');
            }
        } else if(isset($_GET['success_username'])){
            if($_GET['success_username'] == 1){
                $this->successMessage('Your First name and Last name was successfully changed.');
            }
        } else if(isset($_GET['passwords_not_match'])){
            if($_GET['passwords_not_match'] == 1){
                $this->errorMessage('Incorrect input passwords or check that they match.');
            }
        } else if(isset($_GET['success_password'])){
            if($_GET['success_password'] == 1){
                $this->successMessage('Your password was successfully changed.');
            }
        }

        echo       '<div class="row">
                        <div class="col-md-4" id="no-border">
                            <h class="change">Change Your Active Email</h>
                            <h1 class="make-sure" style="padding-bottom: 19px;">Please, be sure that you have access to this email.</h1>
                            <form role="form" action="change-data" method="post">
                                <div class="form-group change-spacer">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="New Email Address" required />
                                </div>
                                <div class="form-group change-spacer">
                                    <input type="email" class="form-control" name="email_again" id="email_again" placeholder="Confirm New Email Address" required />
                                </div>
                                <div class="input-group">
                                  <input type="password" name="password" id="password" class="form-control" placeholder="Password" style="border-right: none !important;">
                                  <span class="input-group-addon" id="basic-addon2"><button class="image-as-button"><span class="glyphicon glyphicon-arrow-right" style="color: #666;"></span></button></span>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4" id="border">
                            <h class="change">Change Your Username</h>
                            <h1 class="make-sure">Please, fill the correct data in order to have no problems with shipping.</h1>
                            <form role="form" action="change-data" method="post">
                                <div class="form-group change-spacer">
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="New First Name" required />
                                </div>
                                <div class="form-group change-spacer">
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="New Last Name" required />
                                </div>
                                <div class="input-group">
                                  <input type="password" name="password" id="password" class="form-control" placeholder="Password" style=" border-right: none !important;">
                                  <span class="input-group-addon" id="basic-addon2"><button class="image-as-button"><span class="glyphicon glyphicon-arrow-right" style="color: #666;"></span></button></span>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4" id="no-border">
                            <h class="change">Change Your Password</h>
                            <h1 class="make-sure">If you forgot your password, please follow those instructions for <a href="/shop/forgot-password/" class="link-forgot">recovering your password.</a></h1>
                            <form role="form" action="change-data" method="post">
                                <div class="form-group change-spacer">
                                    <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" required />
                                </div>
                                <div class="form-group change-spacer">
                                    <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" placeholder="Confirm New Password" required />
                                </div>
                                <div class="input-group">
                                  <input type="password" name="password" id="password" class="form-control" placeholder="Current Password" style=" border-right: none !important;">
                                  <span class="input-group-addon" id="basic-addon2"><button class="image-as-button"><span class="glyphicon glyphicon-arrow-right" style="color: #666;"></span></button></span>
                                </div>
                            </form>
                        </div>
                    </div>';
    }

    private function getBillingInfo() {

        echo     '<div class="cart-divider"></div>

                  <div class="row">
                      <div class="col-md-4">
                          <h class="main-page">Your Billing Info</h>';

        if($this->model->issetBillingName() == 0){
            echo '<div class="no-orders">No Biling Data found</div>';
        } else {
            echo '<div class="ship-to">
                              <h class="billing-h">Ship to:</h><br />
                              <h class="billing-data" style="color: #ac5050;"><b>' . $this->model->getBillingName() . '</b></h>
                          </div>

                          <div class="address">
                              <h class="billing-h">Address:</h><br />

                              <h class="billing-data"><b>Street Address: </b>' . $this->model->getBillingStreet() . '</h><br />
                              <h class="billing-data"><b>City: </b>' . $this->model->getBillingCity() . '</h><br />
                              <h class="billing-data"><b>State: </b>' . $this->model->getBillingState() . '</h><br />
                              <h class="billing-data"><b>Zip: </b>' . $this->model->getBillingZip() . '</h><br />
                              <h class="billing-data"><b>Country: </b>' . $this->model->getBillingCountry() . '</h>
                          </div>

                          <div class="default-options">
                              <h class="billing-h">Default options:</h><br />';

            if ($this->model->getBillingWrap() == 0) {
                echo '<h class="billing-data">No use of <b>Giftwrap</b> for Items</b></h>';
            } else {
                echo '<h class="billing-data"><b>Giftwrap All Items <span style="text-decoration: underline">by default</span></b></h>';
            }
            echo '</div>';
        }

            echo '

                          <div class="edit">
                              <h id="edit"><a style="text-decoration: none;" href="account-billing.php">Edit your Billing Info >></a></h>
                          </div>
                      </div>';

            $this->getBillingOrders();

            echo '</div>
                    </div>
                  <div class="margin-top"></div>';


    }

    private function getBillingOrders() {

        echo      '<div class="col-md-8">';

        if(count($this->model->getAllOrders()) == 0){
            echo        '<div class="row" style="padding-bottom: 20px;">
                             <div class="col-md-4"></div>
                             <div class="col-md-7">
                                <h class="no-orders">No orders found</h>
                             </div>
                         </div>';
        } else {
            $i = 0;
            while ($i < count($this->model->getAllOrders())) {

                echo '<div class="row" style="padding-bottom: 20px;">
                         <div class="col-md-4"></div>
                         <div class="col-md-7">
                            <h class="order-num">#' . $this->model->getEachOrder($i) . ' </h><a class="show-link" id="displayText' . $i . '" href="javascript:toggle' . $i . '();">show</a><br />
                            <div class="billing-desc" id="toggleText' . $i . '" style="display: none">
                                 <h class="desc"><b>Your name:</b> ' . $this->model->getAccountName($i) . '</h><br />
                                 <h class="desc"><b>Ordered street:</b> ' . $this->model->getAccountStreet($i) . '</h><br />
                                 <h class="desc"><b>Ordered city:</b> ' . $this->model->getAccountCity($i) . '</h><br />
                                 <h class="desc"><b>Ordered state:</b> ' . $this->model->getAccountState($i) . '</h><br />
                                 <h class="desc"><b>Zip:</b> ' . $this->model->getAccountZip($i) . '</h><br />
                                 <h class="desc"><b>Country:</b> ' . $this->model->getAccountCountry($i) . '</h><br />
                                 <h class="desc"><b>Gift wrap:</b> ' . $this->model->getAccountGift($i) . '</h>
                            </div>
                         </div>
                         <div class="col-md-1"></div>
                     </div>

                 <script>
                     function toggle' . $i . '() {
                         var ele  = document.getElementById("toggleText' . $i . '");
                         var text = document.getElementById("displayText' . $i . '");
                             if(ele.style.display == "block") {
                                 ele.style.display = "none";
                                 text.innerHTML = "show";
                             } else {
                                 ele.style.display = "block";
                                 text.innerHTML = "hide";
                             }
                     }
                 </script>';

                $i++;
            }
        }

        echo      '</div>
               </div>';
    }
}