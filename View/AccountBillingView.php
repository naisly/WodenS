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

        $this->DoctypeView( 'Billing - Account' );
        $this->headerView( 'Billing - Account' );
        $this->getHeader( 'Billing Information' );
        $this->getAccountBar();
        $this->getBillingForm();
        $this->actionGetFooter( 'Billing - Account' );
    }

    private function getBillingForm(){

        echo '<div class="col-md-9">
                 <div class="row main-form">
                     <div class="col-md-3"></div>
                     <div class="col-md-6 form-bordered">
                         <form role="form" action="/account/account-edit-billing" method="post">

                             <h class="main-page">';

        echo $this->model->Translate('Ship To');

        echo                '</h>

                             <div class="form-group form-spacer">
                                 <label for="name">';

        echo $this->model->Translate('Primary Name');

        echo                    '</label>
                                 <input type="text" class="form-control" name="name" id="name" />
                             </div>

                             <h class="main-page">';

        echo $this->model->Translate('Address');

        echo                '</h>

                             <div class="form-group form-spacer">
                                 <label for="street">';

        echo $this->model->Translate('Default Street Address');

        echo                    '</label>
                                 <input type="text" class="form-control" name="street" id="street" />
                             </div>
                             <div class="form-group">
                                 <label for="name">';

        echo $this->model->Translate('Default City');

        echo                    '</label>
                                 <input type="text" class="form-control" name="city" id="city" />
                             </div>
                             <div class="form-group">
                                 <label for="name">';

        echo $this->model->Translate('Default State');

        echo                    '</label>
                                 <input type="text" class="form-control" name="state" id="state" />
                             </div>
                             <div class="form-group">
                                 <label for="name">';

        echo $this->model->Translate('Default Zip');

        echo                    '</label>
                                 <input type="text" class="form-control" name="zip" id="zip" />
                             </div>
                             <div class="form-group">
                                 <label for="name">';

        echo $this->model->Translate('Default Country');

        echo                    '</label>
                                 <input type="text" class="form-control" name="country" id="country" />
                             </div>

                             <h class="main-page">';

        echo $this->model->Translate('Default Options');

        echo                '</h>

                             <div class="form-group form-spacer">
                                <input name="giftwrap" id="giftwrap" type="checkbox" value="1" />
                                <span id="gift">';

        echo $this->model->Translate('Gift wrap All items');

        echo                    '</span>
                             </div>

                             <button class="btn btn-primary form-control">';

        echo $this->model->Translate('Update Info');

        echo                '</button>

                         </form>
                     </div>
                     <div class="col-md-3"></div>
                 </div>
              </div>
           </div>
           <div class="min-spacer"></div>';
    }
}