<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 16:07
 *
 * ==================
 * Billing info, thanks message
 * ==================
 */

include_once('DefaultView.php');

class OrderView extends DefaultView
{
    /*
     * MVC constructor
     * with OrderModel
     *
     * @private $model
     */
    private $model;
    public function __construct(OrderModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /*
     * Billing info
     */
    public function getPlaceOrder() {

        echo '<div style="margin-left: 20px;">
                <h2>' . $this->model->Translate('Check out now') . '</h2>
                <p class="text-left">' . $this->model->Translate('Please enter your details, and we will ship your goods right away!') .'</p>
            </div>
            <form name="shippingForm" action="/';

        if($_SESSION['language'] !== 'us'){
            echo $_SESSION['language'] . '/';
        }

        echo 'account/complete-order" method="post">
                <div class="well">
                    <h3>' . $this->model->Translate('Ship to') . '</h3>
                    <div class="form-group">
                        <label>' . $this->model->Translate('Name') . '</label>
                        <input name="name" class="form-control" value="' . $this->model->getDefaultName() . '" required />
                    </div>
                    <h3>' . $this->model->Translate('Address') . '</h3>
                    <div class="form-group">
                        <label>' . $this->model->Translate('Street Address') . '</label>
                        <input name="street" class="form-control" value="' . $this->model->getDefaultStreet() . '" required />
                    </div>
                    <div class="form-group">
                        <label>' . $this->model->Translate('City') . '</label>
                        <input name="city" class="form-control" value="' . $this->model->getDefaultCity() . '" required />
                    </div>
                    <div class="form-group">
                        <label>' . $this->model->Translate('State') . '</label>
                        <input name="state" class="form-control" value="' . $this->model->getDefaultState() . '" required />
                    </div>
                    <div class="form-group">
                        <label>' . $this->model->Translate('Zip') . '</label>
                        <input name="zip" class="form-control" value="' . $this->model->getDefaultZip() . '" required />
                    </div>
                    <div class="form-group">
                        <label>' . $this->model->Translate('Country') . '</label>
                        <input name="country" class="form-control" value="' . $this->model->getDefaultCountry() . '" required />
                    </div>
                    <h3>' . $this->model->Translate('Options') . '</h3>
                    <div class="checkbox">
                        <label>
                            <input name="giftwrap" type="checkbox" value="1"';

            if($this->model->getDefaultWrap() == 1){
                echo 'checked="checked"';
            } else {

            }
            echo            '/>
                                ' . $this->model->Translate('Gift wrap these items') . '
                        </label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary">' . $this->model->Translate('Complete order') . '</button>
                    </div>
                </div>
            </form>
            <script src="js/jquery-min.js"></script>
            <script src="js/bootstrap.min.js"></script>';
    }

    public function thanksMessage() {

        echo '<div class="well" style="margin-top: -20px;">
                  <h2>' . $this->model->Translate('Thanks!') . '</h2>
                  ' . $this->model->Translate('Thanks for placing your order. Well ship your goods as soon as possible. If you need to contact us, use reference') . '#' . $this->model->getOrderId() . '.
              </div>
              <script src="js/jquery-min.js"></script>
              <script src="js/bootstrap.min.js"></script>';
    }
}