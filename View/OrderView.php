<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 16:07
 */

include_once('DefaultView.php');

class OrderView extends DefaultView
{
    private $model;
    public function __construct(OrderModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getPlaceOrder() {

        echo '
            <h2>Check out now</h2>
            <p class="text-left">Please enter your details, and well ship your goods right away!</p>
            <form name="shippingForm" action="complete-order.php" method="post">
                <div class="well">
                    <h3>Ship to</h3>
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" class="form-control" required />
                    </div>
                    <h3>Address</h3>
                    <div class="form-group">
                        <label>Street Address</label>
                        <input name="street" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input name="city" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <input name="state" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Zip</label>
                        <input name="zip" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input name="country" class="form-control" required />
                    </div>
                    <h3>Options</h3>
                    <div class="checkbox">
                        <label>
                            <input name="giftwrap" type="checkbox" value="1"/>
                                Gift wrap these items
                        </label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary">Complete order</button>
                    </div>
                </div>
            </form>
            <script src="js/jquery-min.js"></script>
            <script src="js/bootstrap.min.js"></script>';
    }

    public function thanksMessage() {

        echo '<div class="well">
                  <h2>Thanks!</h2>
                  Thanks for placing your order. Well ship your goods as soon as possible.
                  If you need to contact us, use reference #' . $this->model->getOrderId() . '.
              </div>';
    }
}