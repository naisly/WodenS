<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 29.11.2015
 * Time: 19:01
 */

include_once('ProfileView.php');

class AccountOrderView extends ProfileView
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

    public function getAccountOrderPage() {

        $this->DoctypeView( 'account-order' );
        $this->headerView();

        $this->getAccountBar();
        $this->getOrders();

        $this->getFooter();
    }

    private function getOrders() {

        echo '<div class="col-md-9">
                <div class="row">';

        if($this->model->getNotFound() == 1){
            echo '<div style="margin-left: 15px">';
            $this->getNotFoundPage( 'order' );

        } else if ($this->model->getNotFound() == 0) {

            $i = 0;
            $k = 0;

            while ($i < $this->model->countProductItem()) {

                if ($i == 0) {
                    echo '<div style="margin-top: 30px; padding-bottom: 20px;">
                              <h class="orders">Complete orders:</h>
                          </div>';
                }


                echo '<div class="col-md-12">';

                if ($i == $this->model->getCountItems()) {
                    echo '<div style="margin-top: 30px; padding-bottom: 20px;">
                        <h style="margin-left: 15px;" class="orders">Done orders:</h><br />
                      </div>';
                }

                echo '<h class="order-id">#' . $this->model->getItemsOrder($i) . ' </h><a class="data" id="displayText' . $i . '" href="javascript:toggle' . $i . '();"> hide</a>
                              <div id="toggleText' . $i . '" style="display: block;">
                                  <div class="row">
                                      <div class="col-md-12 bordered">';

                $j = 0;
                while ($j < $this->model->countProductItemIteration($i)) {
                    echo '        <div class="col-md-4">
                                    <div class="row">
                                      <div class="col-md-6">
                                          <h class="product"><a href="subdescription.php?original_name=' . $this->model->getProductItem($i, $k) . '
                                          &amp;table=' . $this->model->getProductTableItems($i, $k) . '&amp;id_num=' . $this->model->getPriceItem($i, $k) . '
                                          &amp;id=' . $this->model->getIdItems($i, $k) . '&amp;product_name=' . $this->model->getProductTableItems($i, $k) . '
                                          ">' . $this->model->getProductNameItems($i, $j) . '</a></h><br />

                                          <div class="divide"></div>

                                          <h>Category: <em><span id="category-item">' . $this->model->getCategoryItem($i, $j) . '</span></em></h><br />
                                          <h>' . $this->model->getQuantityItem($i, $j) . ' items</h><br />
                                          <h class="cart-price">$' . $this->model->getPriceItem($i, $j) . '</h>
                                      </div>
                                      <div class="col-md-6 pull-left';
                    if ($j < 3 && ($j % 2 !== 0 || $j == 0)) {
                        echo ' border-right';
                    } else if ($j > 3 && $j % 3 !== 0) {
                        echo ' border-right';
                    }
                    echo '">
                                        <img style="margin-top: -20px;" src="' . $this->model->getPhotoItems($i, $j) . '" width="120" height="120" /><br />
                                      </div>
                                    </div>
                                  </div>';

                    $j++;
                }


                echo             '</div>
                                </div>
                             </div>
                           </div>';


                echo '        <script>
                                  function toggle' . $i . '() {
                                       var ele  = document.getElementById("toggleText' . $i . '");
                                       var text = document.getElementById("displayText' . $i . '");
                                       if(ele.style.display !== "block") {
                                           ele.style.display = "block";
                                           text.innerHTML = "hide";

                                       } else {
                                           ele.style.display = "none";
                                           text.innerHTML = "show";
                                       }
                                   }
                              </script>';

                $i++;
            }
        }


        echo    '</div>
              </div>
          </div>
          <div id="space"></div>';
    }
}