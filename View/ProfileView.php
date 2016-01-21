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
        $this->DoctypeView( 'Cart - Account' );
        $this->headerView( 'profile' );
        $this->getHeader( 'Your Bag' );
        $this->getTable();
        $this->actionGetFooter( 'Cart - Account' );
    }

    protected function getAccountBar() {

        echo '<div class="container">
              <div class="row">
                  <div class="col-md-3 bordered-container">
                      <h class="hello">' . $this->model->Translate('Hello') . ', ' . $this->model->getName() . '</h><br />

                      <div class="cart-divider"></div>

                      <h class="cart"><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'account/cart" id="link" style="color: #08b;"> ' . $this->model->Translate('Cart') . '</a></h><br />
                      <h class="cart"><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'account/orders" id="link" style="color: #08b;">' . $this->model->Translate('Your Orders') . '</a></h><br />
                      <h class="cart"><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'account/" id="link" style="color: #08b;">' . $this->model->Translate('Change account info') . '</a></h><br />
                      <h class="cart"><a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'account/billing" id="link" style="color: #08b;">' . $this->model->Translate('Billing info') . '</a></h><br />

                      <div class="cart-divider"></div>

                      <h class="hello">' . $this->model->Translate('Your cart') . ':</h><br />

                      <h class="cart cart-price">' . $this->model->getAPrice() . '$</h><br />
                      <h class="cart">' . $this->model->getAItems() . ' ';

        if ( $this->model->getAItems() == 1){
            echo $this->model->Translate('item') . '</h>';
        } else {
            echo $this->model->Translate('items') . '</h>';
        }

        echo         '<div class="cart-divider"></div>

                      <h class="hello">' . $this->model->Translate('Last order') . ':</h><br />';

        if($this->model->getOrderId() !== 'None') {

            echo '<h class="cart">#' . $this->model->getOrderId() . '</h><br />
                      <h class="cart">' . $this->model->getLastOrderItems() . ' ';

            if ($this->model->getLastOrderItems() == 1) {
                echo $this->model->Translate('item') . '</h>';
            } else {
                echo $this->model->Translate('items') . '</h>';
            }

            echo '<h class="cart cart-price"> $' . $this->model->getLastOrderSum() . '</h>';

        } else {
            echo '<h class="cart not-found">' . $this->model->Translate('No orders found') . '</h>';
        }

        echo         '<div class="cart-divider"></div>

                      <h class="hello">' . $this->model->Translate('Account Info') . '</h><br />
                      <h class="cart"><b>' . $this->model->Translate('Active email') . ': </b><br />' . $_SESSION['login_user'] . '</h><br />
                      <h class="cart"><b>' . $this->model->Translate('Your name') . ': </b>' . $this->model->getName() . '</h>

                      <div class="cart-divider"></div>

                      <h class="hello">' . $this->model->Translate('Last Billing info') . ':</h><br />';

        if($this->model->getBillingNotFound() !== 0) {

            echo     '<h class="cart"><a style="text-decoration: none" href="/';

            if ($_SESSION['language'] !== 'us') {
                echo $_SESSION['language'] . '/';
            }

            echo 'account/billing">' . $this->model->Translate('Add billing info') . '</a></h>';
        } else {
            echo     '<h class="cart"><b>' . $this->model->Translate('Name') . ':</b> ' . $this->model->getBillingName() . '</h><br />
                      <h class="cart"><b>' . $this->model->Translate('Street') . ':</b> ' . $this->model->getBillingStreet() . '</h><br />
                      <h class="cart"><b>' . $this->model->Translate('City') . ':</b> ' . $this->model->getBillingCity() . '</h><br />
                      <h class="cart"><b>' . $this->model->Translate('State') . ':</b> ' . $this->model->getBillingState() . '</h><br />
                      <h class="cart"><b>' . $this->model->Translate('Zip') . ':</b> ' . $this->model->getBillingZip() . '</h><br />
                      <h class="cart"><b>' . $this->model->Translate('Country') . ':</b> ' . $this->model->getBillingCountry() . '</h><br />';

            if($this->model->getBillingWrap() == 1) {
                echo '<h class="cart"><b>' . $this->model->Translate('Giftwrap All items') . '<span style="text-decoration: underline">' . $this->model->Translate('by default') . '</span></b></h>';
            } else {
                echo '<h class="cart">' . $this->model->Translate('No use of') . '<b>' . $this->model->Translate('Giftwrap') . '</b>' . $this->model->Translate('for Items') . '</h>';
            }
        }

        echo         '<div class="cart-divider"></div>

                      <h class="hello">' . $this->model->Translate('Last added item') . ':</h><br />';

        if($this->model->getNoProduct() == 'none'){
            echo '<h class="cart not-found">' . $this->model->Translate('No products found') . '</h>';
        } else {
            echo     '<img class="last-added-img" src="/' . $this->model->getPhoto() . '" /><br />
                      <h class="cart cart-header">' . $this->model->getOriginalName() . '</h><br />
                      <h class="cart cart-price">$' . $this->model->getItemPrice() . '</h><br />
                      <h class="cart"><span class="underline">' . $this->model->getItemShipping() . ' ' . $this->model->Translate('days') . '</span> ' . $this->model->Translate('shipping') . '</h>';
        }

        echo         '<div class="cart-divider"></div>

                      <h class="cart">' . $this->model->Translate('Not') . ' '  . $this->model->getName() . ' ? <a href="/logout" class="link">' . $this->model->Translate('Sign out') . '</a></h>
                  </div>';
    }

    /*
     * Getting user's UI for the
     * Cart page
     */
    private function getTable() {

        $this->getAccountBar();

        echo '<div class="col-md-9 margin-for-small-sm">';

        if($this->model->getNotFound() == 0) {

            echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>' . $this->model->Translate('Product name') . '</th>
                            <th>' . $this->model->Translate('Quantity') . '</th>
                            <th class="text-right">' . $this->model->Translate('Category') . '</th>
                            <th class="text-right">' . $this->model->Translate('Price') . '</th>
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
                                <form action="/account/remove" method="post">
                                    <input type="hidden" name="id" value="' . $this->model->getIdArray($i) . '"/>
                                    <input type="hidden" name="name" value="' . $this->model->getProductNameArray($i) . '"/>
                                    <button class="btn btn-sm btn-warning">' . $this->model->Translate('Remove') . '</button>
                                </form>
                            </td>
                        </tr>';
                $i++;
            }
            echo '   </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-right">' . $this->model->Translate('Total') . ':</td>
                            <td class="text-right">' .
                            $this->model->getAPrice() . ' $'
                            . '</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="text-center">
                    <a class="btn btn-primary" onclick="goBack();">' . $this->model->Translate('Continue shopping') . '</a>
                    <a class="btn btn-primary" href="placeorder" style="color: white;">' . $this->model->Translate('Place order now') . '</a>
                </div>
            </div>
        </div>
        </div>
                <script>
                function goBack() {
                    window.history.go(-2);
                }
                </script>';
        } else if ($this->model->getNotFound() == 1){

            echo '<div class="margin-for-small-sm" style="padding-bottom: 60px;">
                      <h class="no-items">' . $this->model->Translate('No products found in your cart') . '</h><br />
                  </div>

                  <div class="row">
                      <div class="col-md-9">
                          <div class="page-spacer border-margin-for-md">
                              <div class="margin-for-small-sm" style="margin-top: 60px !important;"></div>
                              <a class="links" id="main-link" href="/';

            if ($_SESSION['language'] !== 'us') {
                echo $_SESSION['language'] . '/';
            }

            echo 'phones/buy-phone/" style="text-decoration: none; white-space: normal;">';

            echo $this->model->Translate('Describe new') . '<nobr> ' . $this->model->Translate('possibilities');

            echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></nobr></a><br />
                              <h>' . $this->model->Translate('From') . '<span class="cart-price"> $' . $this->model->getMinPhones() . '</span></h>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <img class="img-for-sm" src="/images/iphone6S.jpg" style="width: 70%; height: auto; margin-left: 25px;" class="category-image" />
                      </div>
                  </div>

                  <div id="space-divide"></div>

                  <div class="row">
                      <div class="col-md-9">
                          <div class="page-spacer" style="margin-top: 75px !important;">
                              <a class="links" id="main-link" href="/';

            if ($_SESSION['language'] !== 'us') {
                echo $_SESSION['language'] . '/';
            }

            echo 'laptops/buy-laptop/" style="text-decoration: none; white-space: normal;">';

            echo $this->model->Translate('Fully equipped for a') . '<nobr> ' . $this->model->Translate('world');

            echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></nobr></a><br />
                              <h>' . $this->model->Translate('From') . '<span class="cart-price"> $' . $this->model->getMinNotebooks() . '</span></h>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <img class="img-for-sm" src="/images/macbookpro.png" style="width: 100%; height: auto; margin-top: 50px; padding-bottom: 70px;" class="category-image" />
                      </div>
                  </div>

                  <div id="space-divide"></div>

                  <div class="row">
                      <div class="col-md-9">
                          <div class="page-spacer" style="margin-top: 80px !important;">
                              <a class="links" id="main-link" href="/';

            if ($_SESSION['language'] !== 'us') {
                echo $_SESSION['language'] . '/';
            }

            echo 'devices/buy-device/" style="text-decoration: none; white-space: normal;">';

            echo $this->model->Translate('Smart. Mighty.') . '<nobr> ' . $this->model->Translate('Heavyweight.');

            echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></nobr></a><br />
                              <h>' . $this->model->Translate('From') . '<span class="cart-price"> $' . $this->model->getMinGadgets() . '</span></h>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <img class="img-for-sm" src="/images/ipadshop1.jpg" style="width: 100%; height: auto;" class="category-image" />
                      </div>
                  </div>

                  <div id="space-divide"></div>

                  <div class="row">
                      <div class="col-md-9">
                          <div class="page-spacer" style="margin-top: 80px !important;">
                              <a class="links" id="main-link" href="/';

            if ($_SESSION['language'] !== 'us') {
                echo $_SESSION['language'] . '/';
            }

            echo 'tv/buy-tv/" style="text-decoration: none; white-space: normal;">';

            echo $this->model->Translate('The future of television is') . '<nobr> ' . $this->model->Translate('here');

            echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20" /></nobr></a><br />
                              <h>' . $this->model->Translate('From') . '<span class="cart-price"> $' . $this->model->getMinTV() . '</span></h>
                          </div>
                      </div>
                      <div class="col-md-3">
                          <img class="img-for-sm" src="/images/imac.jpg" style="width: 100%; height: auto;" class="category-image" />
                      </div>
                  </div>

                  <div id="space-divide"></div>

                  <div class="row">
                      <div class="col-md-12">
                          <div class="page-spacer">
                              <h id="page">' . $this->model->Translate('Any questions?') . '<a class="page" href="/';

            if ($_SESSION['language'] !== 'us') {
                echo $_SESSION['language'] . '/';
            }

            echo 'support/" style="color: #08b;"> ' . $this->model->Translate('Go to our support page') . '<img src="/images/arrow-blue.png" width="18" height="18"/></a></h>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div id="space"></div>';
        }
    }

}