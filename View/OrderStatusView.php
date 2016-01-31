<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 28.11.2015
 * Time: 22:04
 */

include_once('DefaultView.php');

class OrderStatusView extends DefaultView
{

    private $model;
    public function __construct(CheckOrderModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getCheckOrderPage() {

        $this->DoctypeView( 'Single Order Lookup' );
        $this->headerView();
        $this->getContent();
    }

    private function getContent() {

        if($this->model->getStatus() == 'not_found'){

            echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px;">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      <form action="/support/" method="post">
                          ' . $this->model->Translate('Order') . '<span class="order_id">#' . $this->model->getOrderId() . '</span>' . $this->model->Translate('not found or incorrect email you') . '<br />
                          ' . $this->model->Translate('have been entered') . ': <span class="order_email">' . $this->model->getOrderEmail() . '</span>' . $this->model->Translate('Please check the provided info.') . '<br />
                          ' . $this->model->Translate('If you think that it was our mistake, please') . '<button id="link_as_button" class="contact-us">' . $this->model->Translate('contact us') . '</button>

                          <input type="hidden" value="1" name="shopping_help" />
                      </form>
                  </div>
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                                      <div class="row">
                                           <div class="col-md-2"></div>
                                           <div class="col-md-8">
                                              <div class="account">
                                                  <form action="/order-status/single" method="get">
                                                      <h class="h-account">' . $this->model->Translate('Look up for order') . '</h>
                                                      <input type="text" class="form-control margin-20" name="order_number" id="order_number" placeholder="' . $this->model->Translate('Order Number') . '" />
                                                      <input type="text" class="form-control margin-20" name="order_email" id="order_email" placeholder="' . $this->model->Translate('Your email') . '" />

                                                      <div class="forgot">
                                                          <a href="#" class="text-left link where-order" style="color: #08b;">' . $this->model->Translate('Where is order number?') . '</a>
                                                          <button class="btn btn-primary pull-right button-continue">' . $this->model->Translate('Continue') . '</button>
                                                          <div class="something">
                                                              <div class="find-number">
                                                                  <h class="h-find">' . $this->model->Translate('Find your order number') . '</h><br />
                                                                  <h class="sub-find">' . $this->model->Translate('Number is located with thanks message or in your account') . '</h>
                                                                  <img class="order-support" src="/images/order-support.png" width="400"/>
                                                              </div>
                                                          </div>
                                                          <div class="media-spacer"></div>
                                                      </div>
                                                  </form>


                                              </div>

                                           </div>
                                            <div class="col-md-2"></div>
                                      </div>
                                  </div>
                  <div class="col-md-3"></div>
            </div>';

            $this->getFooter();

        } else if( $this->model->getStatus() == 'done' || $this->model->getStatus() == 'wait'){

            echo '<form action="/support/" method="post">';
            if($this->model->getStatus() == 'done') {
                echo '<div class="alert alert-success" role="alert" style="margin-top: -20px;">';
            } else {
                echo '<div class="alert alert-warning" role="alert" style="margin-top: -20px;">';
            }
            echo     '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>


                      <span class="sr-only">Error:</span>';

            if($this->model->getStatus() == 'done') {
                echo      $this->model->Translate('Hello') . ',' . $this->model->getName() . '<br />
                          ' . $this->model->Translate('Your order') . '#' . $this->model->getOrderId() . $this->model->Translate('was accepted by Woden Sims') . '<br />
                          ' . $this->model->Translate('You will get items in time, that was assigned on your product.');
            } else {
                echo      $this->model->Translate('Hello') . ',' . $this->model->getName() . '<br />
                          ' . $this->model->Translate('Your order') . '#' . $this->model->getOrderId() . $this->model->Translate('is in an queue') . '<br />
                          ' . $this->model->Translate('If order will be accepted, you will get items in') . '<br />
                          ' . $this->model->Translate('time, that was assigned on your product. Approximately approval varies about 2 up to 3') . '<br />
                          ' . $this->model->Translate('working days, if you think that it is out mistake, please') . '<button id="link_as_button" class="contact-us">' . $this->model->Translate('contact us') . '</button>

                          <input type="hidden" value="1" name="shopping_help" />
                      </form>';
            }
            echo '</div>
                  <div class="items" style="padding-bottom: 30px;">
                      <h1 class="header-lead" style="font-size: 30px;">' . $this->model->Translate('Items that you have bought:') . '</h1>
                      <h1 class="header-lead" style="margin-top: 0;"><span style="color: #08b;">' . $this->model->getCountItems() . ' ';

            if($this->model->getCountItems() == 1){
                echo $this->model->Translate('item');
            } else {
                echo $this->model->Translate('items');
            }
            echo '</span>' . $this->model->Translate('in order') . '</h1>
                      <h1 class="header-lead" style="margin-top: 0;">' . $this->model->Translate('For') . '<span class="item-price" style="font-size: 22px;">$' . $this->model->getCountPrice() . '</span></h1>

                      ';

            echo      '</div>
                       <div class="data">
                            <div class="container">
                               <div class="row">';

            $i = 0;

            while($i < $this->model->countCategories()){
                echo  '<div class="col-md-3 ';

                if($i < $this->model->countCategories() - 1){
                    echo 'divider-for-small';
                }

                echo '">' .
                     '<a class="original" style="height: 50px;" href="/';

                if ($_SESSION['language'] !== 'us') {
                    echo $_SESSION['language'] . '/';
                }

                echo 'shop/subdescription?original_name=' . $this->model->getOriginalName($i) . '&table=' . $this->model->getTable($i) . '&id_num=' . $this->model->getPrice($i) . '&id=' . $this->model->getId($i) . '&product_name=' . $this->model->getProductName($i) . '">' . $this->model->getOriginalName($i) . '</a><br />
                      <img src="/' . $this->model->getPhoto($i) . '" width="150" height="150" style="margin-top: 7px; margin-bottom: 7px;" />
                      <h class="category">' . $this->model->Translate('by') . '<a class="default-link" href="http://' . $this->model->getCategory($i) . '.com">' . $this->model->getCategory($i) . '</a></h><br />
                      <h class="item-price">$' . $this->model->getPrice($i) . '</h><br />
                      <h id="ordered">' . $this->model->Translate('Ordered shipping:') . '<span id="underline">' . $this->model->getShipping($i) . ' days</span></h>' .
                    '</div>';
                $i++;
            }


            echo                '</div>
                               </div>
                            </div>
                         </div>



                  ';

            if($this->model->countCategories() <= 4){
                $this->getFooter();
            } else {
                $this->actionGetFooter( 'Order Status' );
            }
        }
    }
}