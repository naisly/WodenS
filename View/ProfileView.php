<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 17:00
 *
 * ===================
 * Cart page
 * ===================
 */

include_once('DefaultView.php');

class ProfileView extends DefaultView
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @private $model
     */
    private $model;
    public function __construct(ProfileModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getCartPage() {
        $this->DoctypeView( 'profile' );
        $this->headerView();
        $this->getTable();
        $this->getFooter();
    }

    protected function getAccountBar() {

        echo '<div class="container">
              <div class="row">
                  <div class="col-md-3" style="border-right: 1px solid #e4e4e4;">
                      <h class="hello">Hello, ' . $this->model->getName() . '</h><br />

                      <div class="cart-divider"></div>

                      <h class="cart"><a href="cart.php" id="link"> Cart ></a></h><br />
                      <h class="cart"><a href="account-orders.php" id="link">Your Orders</a></h><br />
                      <h class="cart"><a href="account.php" id="link">Change account info</a></h><br />
                      <h class="cart"><a href="account-billing.php" id="link">Billing info</a></h><br />

                      <div class="cart-divider"></div>

                      <h class="hello">Your cart:</h><br />

                      <h class="cart cart-price">' . $this->model->getAPrice() . '$</h><br />
                      <h class="cart">' . $this->model->getAItems() . '';

        if ( $this->model->getAItems() == 1){
                  echo ' item </h>';
        } else {
                  echo ' items </h>';
        }

        echo         '<div class="cart-divider"></div>

                      <h class="hello">Last order:</h><br />';

        if($this->model->getOrderId() !== 'None') {

            echo '<h class="cart">#' . $this->model->getOrderId() . '</h><br />
                      <h class="cart">' . $this->model->getLastOrderItems() . '';

            if ($this->model->getLastOrderItems() == 1) {
                echo ' item </h>';
            } else {
                echo ' items </h>';
            }

            echo '<h class="cart cart-price"> $' . $this->model->getLastOrderSum() . '</h>';

        } else {
            echo '<h class="cart not-found">No orders found</h>';
        }

        echo         '<div class="cart-divider"></div>

                      <h class="hello">Account Info</h><br />
                      <h class="cart"><b>Active email: </b><br />' . $_SESSION['login_user'] . '</h><br />
                      <h class="cart"><b>Your name: </b>' . $this->model->getName() . '</h>

                      <div class="cart-divider"></div>

                      <h class="hello">Last Billing info:</h><br />

                      <h class="cart">Add billing info</h>

                      <div class="cart-divider"></div>

                      <h class="hello">Last added item:</h><br />';

        if($this->model->getNoProduct() == 'none'){
            echo '<h class="cart not-found">No products found</h>';
        } else {
            echo     '<img src="' . $this->model->getPhoto() . '" width="120" height="120" /><br />
                      <h class="cart cart-header">' . $this->model->getOriginalName() . '</h><br />
                      <h class="cart cart-price">$' . $this->model->getItemPrice() . '</h><br />
                      <h class="cart"><span class="underline">' . $this->model->getItemShipping() . ' days</span> shipping</h>';
        }

        echo         '<div class="cart-divider"></div>

                      <h class="cart">Not ' . $this->model->getName() . ' ? <a href="logout.php">Sign out</a></h>
                  </div>';
    }

    /*
     * Getting user's UI for the
     * Cart page
     */
    private function getTable() {

        $this->getAccountBar();

        echo '<div class="col-md-9">';

        if($this->model->getNotFound() == 0) {

            echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product name</th>
                            <th>Quantity</th>
                            <th class="text-right">Category</th>
                            <th class="text-right">Price</th>
                        </tr>
                    </thead>
                    <tbody>';
            $i = 0;
            while ($i < count($this->model->id_array)) {
                echo '
                        <tr>
                            <td class="text-center">#' . $this->model->getIdArray($i) . '</td>
                            <td class="text-left">' . $this->model->getProductNameArray($i) . '</td>
                            <td>' . $this->model->getQuantityOfItem($i) . '</td>
                            <td class="text-right">' . $this->model->getCategoryArray($i) . '</td>
                            <td class="text-right">' . $this->model->getPriceArray($i) * $this->model->getQuantityOfItem($i) . ' $</td>
                            <td>
                                <form action="remove.php" method="post">
                                    <input type="hidden" name="id" value="' . $this->model->getIdArray($i) . '"/>
                                    <button class="btn btn-sm btn-warning">Remove</button>
                                </form>
                            </td>
                        </tr>';
                $i++;
            }
            echo '   </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-right">Total:</td>
                            <td class="text-right">' .
                            $this->model->getAPrice() . ' $'
                            . '</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="text-center">
                    <a class="btn btn-primary" onclick="goBack();">Continue shopping</a>
                    <a class="btn btn-primary" href="placeorder.php">Place order now</a>
                </div>
            </div>
        </div>
                <script>
                function goBack() {
                    window.history.go(-2);
                }
                </script>
                <script src="js/jquery-min.js"></script>
                <script src="js/bootstrap.min.js"></script>
            </body>
            </html>';
        } else if ($this->model->getNotFound() == 1){

            echo '<h class="no-items">No products found in your cart</h><br />

                  <div class="row">
                      <div class="col-md-6">
                          <div class="page-spacer">
                              <a class="page" href="phones.php">Go to the phones page <span id="right-bar">>></span></a><br />
                              <h>From <span class="cart-price">$' . $this->model->getMinPhones() . '</span></h>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <img src="images/iphone6S.jpg" width="120" height="120" />
                      </div>
                  </div>

                  <div id="space-divide"></div>

                  <div class="row">
                      <div class="col-md-6">
                          <div class="page-spacer">
                              <a class="page" href="notebooks.php">Go to the laptops page <span id="right-bar">>></span></a><br />
                              <h>From <span class="cart-price">$' . $this->model->getMinNotebooks() . '</span></h>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <img src="images/macbookpro.png" width="120" height="120" />
                      </div>
                  </div>

                  <div id="space-divide"></div>

                  <div class="row">
                      <div class="col-md-6">
                          <div class="page-spacer">
                              <a class="page" href="gadgets.php">Go to the devices page <span id="right-bar">>></span></a><br />
                              <h>From <span class="cart-price">$' . $this->model->getMinGadgets() . '</span></h>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <img src="images/ipadshop1.jpg" width="120" height="120" />
                      </div>
                  </div>

                  <div id="space-divide"></div>

                  <div class="row">
                      <div class="col-md-6">
                          <div class="page-spacer">
                              <a class="page" href="television.php">Go to the TV page <span id="right-bar">>></span></a><br />
                              <h>From <span class="cart-price">$' . $this->model->getMinTV() . '</span></h>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <img src="images/imac.jpg" width="120" height="120" />
                      </div>
                  </div>

                  <div id="space-divide"></div>

                  <div class="row">
                      <div class="col-md-12">
                          <div class="page-spacer">
                              <h id="page">Any questions? <a class="page" href="support.php">Go to our support page <span id="right-bar">>></span></a></h>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div id="space"></div>';
        }
    }

}