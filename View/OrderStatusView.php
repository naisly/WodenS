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

        $this->DoctypeView( 'status-order' );
        $this->headerView();
        $this->getContent();
        $this->getFooter();
    }

    private function getContent() {

        if($this->model->getStatus() == 'not_found'){

            echo '<div class="alert alert-danger" role="alert" style="margin-top: -20px;">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      <form action="support.php" method="post">
                          Order <span class="order_id">#' . $this->model->getOrderId() . '</span> not found or incorrect email you<br />
                          have been entered: <span class="order_email">' . $this->model->getOrderEmail() . '</span>. Please check the provided info.<br />
                          If you think that it was our mistake, please <button id="link_as_button" class="contact-us">contact us</button>

                          <input type="hidden" value="1" name="shopping_help" />
                      </form>
                  </div>';
        } else if( $this->model->getStatus() == 'done'){

            echo '<div class="alert alert-success" role="alert" style="margin-top: -20px;">
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                          Hello, ' . $this->model->getName() . '<br />
                          Your order #' . $this->model->getOrderId() . ' was accepted by Woden Sims <br />
                          You will get items in time, that was assigned on your product.
                  </div>
                  <div class="items">
                      <h class="header-lead">Items that you have bought:</h><br />

                      ';
            $k = 0;
            while ($k < $this->model->countCategories()){
                echo '<h class="category">' . $this->model->getCategory($k) . ': ' . $this->model->getCountCategories($k);
                if ($this->model->getCountCategories($k) == 1){
                    echo ' item</p><br />';
                } else {
                    echo ' items</p><br />';
                }
                $k++;
            }

            echo      '</div>
                       <div class="data">';

            $i = 0;
            while($i < $this->model->countCategories()){
                echo '<h>' . $this->model->getOriginalName($i) . '</h>
                      <img src="' . $this->model->getPhoto($i) . '" width="150" height="150" />
                      <h>' . $this->model->getCategory($i) . '</h>
                      <h>' . $this->model->getPrice($i) . '</h>
                      <h>' . $this->model->getShipping($i) . '</h>';

                $i++;
            }


            echo      '</div>



                  ';
        }
    }
}