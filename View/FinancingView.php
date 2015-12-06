<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 19:56
 */

include_once('DefaultView.php');

class FinancingView extends DefaultView
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @private $model
     */
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getFinancingPage() {
        $this->DoctypeView( 'financing' );
        $this->headerView( 'financing' );
        $this->getMenu();
        $this->actionGetFooter( 'financing' );
    }

    private function getMenu() {

        echo '<div class="container middle">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                          <div class="bordered-middle">
                              <div class="text-center">
                                  <h id="main">Get additional prices and financing getting<br /> items with Woden Sims</h><br />

                                  <div class="content">
                                      <h id="sub-main">If you use VISA or MASTERCARD payment methods to pay online you are
                                      going to earn <br /> points each time. For every 250$ you will earn 10% sale for next item</h>
                                  </div>

                                  <img src="images/devices.jpg" class="image-main" />

                                  <div id="divider-main"></div>

                                  <div id="apply">
                                      <h class="apply-for">Apply for financing with Card usage by getting an Woden Sims shopping card</h>
                                  </div>

                                  <div class="row" id="margin-spacer">
                                      <div class="col-md-4 border-right">
                                          <h class="lead-header">Earn reward for every <br /> dollar spent</h><br />

                                          <h class="sub-header">For every purchase that is greater than 250$ you will earn 10% sale for
                                          next item. Earn 5% discount by getting old-phones.</h>
                                      </div>
                                      <div class="col-md-4 border-right">
                                          <h class="lead-header">Make order online, get discount for each product</h><br />

                                          <h class="sub-header">Getting payed online, you are going to save your time,
                                          getting 3% discount for the sum order</h>
                                      </div>
                                      <div class="col-md-4">
                                          <h class="lead-header">Accumulate each dollar into <br /> your cart</h><br />

                                          <h class="sub-header"> Every 1$ of check you are going to
                                          accumulate dollars in your Woden Sims card. While this sum is greater than 5, 000$ you
                                          are going to get discount amount of 7%.</h>
                                      </div>
                                  </div>
                              </div>

                                      <div class="tax">
                                          <h class="float: left;">According to the NKY 167.5.1 NDS was delivered as 20%. Plus, according
                                          to the military tax 1.5% of each sale is going as objective tax. Thus, 21.5% is the main tax
                                          The amount of tax calculated from the amount of interest accrued on the account and debited
                                          on a monthly basis</h>
                                      </div>





                          </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>

              </div>';
    }
}