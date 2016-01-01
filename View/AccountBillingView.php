<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 0:07
 */

include_once('AccountOrderView.php');

class AccountBillingView extends AccountOrderView
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @private $model
     */
    private $model;
    public function __construct(AccountOrderModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getAccountBilling() {

        $this->DoctypeView( 'Account - Billing' );
        $this->headerView( 'account-billing' );
        $this->getAccountBar();
        $this->getBillingForm();
        $this->actionGetFooter( 'Account - Billing' );
    }

    private function getBillingForm(){

        echo '<div class="col-md-9">
                 <h class="main-page">Change Your Billing Info</h>
                 <div class="row main-form">
                     <div class="col-md-3"></div>
                     <div class="col-md-6 form-bordered">
                         <form role="form" action="account-edit-billing.php" method="post">

                             <h class="main-page">Ship to</h>

                             <div class="form-group form-spacer">
                                 <label for="name">Primary Name</label>
                                 <input type="text" class="form-control" name="name" id="name" />
                             </div>

                             <h class="main-page">Address</h>

                             <div class="form-group form-spacer">
                                 <label for="street">Default Street Address</label>
                                 <input type="text" class="form-control" name="street" id="street" />
                             </div>
                             <div class="form-group">
                                 <label for="name">Default City</label>
                                 <input type="text" class="form-control" name="city" id="city" />
                             </div>
                             <div class="form-group">
                                 <label for="name">Default State</label>
                                 <input type="text" class="form-control" name="state" id="state" />
                             </div>
                             <div class="form-group">
                                 <label for="name">Default Zip</label>
                                 <input type="text" class="form-control" name="zip" id="zip" />
                             </div>
                             <div class="form-group">
                                 <label for="name">Default Country</label>
                                 <input type="text" class="form-control" name="country" id="country" />
                             </div>

                             <h class="main-page">Default Options</h>

                             <div class="form-group form-spacer">
                                <input name="giftwrap" id="giftwrap" type="checkbox" value="1" />
                                <span id="gift">Gift wrap All items</span>
                             </div>

                             <button class="btn btn-primary form-control">Update Info</button>

                         </form>
                     </div>
                     <div class="col-md-3"></div>
                 </div>
              </div>
           </div>
           <div class="min-spacer"></div>';
    }
}