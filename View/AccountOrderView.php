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
        $i = 0;
        $k = 0;

        if($this->model->countCompleteOrder() == 0) {
            echo '<div style="margin-top: 30px; padding-bottom: 20px;">
                      <h class="orders">Complete orders:</h>
                  </div>
                  <h class="no-orders">No complete orders found</h>';
        }

        if($this->model->countDoneOrder() == 0){
            echo '<div style="margin-top: 30px; padding-bottom: 20px;">
                      <h class="orders">Done orders:</h>
                  </div>
                  <h class="no-orders">No done orders found</h>';
        }
        while ($i < $this->model->countCompleteOrder()) {
            if( $i == 0){
                echo '<div style="margin-top: 30px; padding-bottom: 20px;">
                              <h class="orders">Complete orders:</h>
                          </div>';
            }
            echo      '<div class="col-md-12">';

            echo      '<h class="order-id">#' . $this->model->getCompleteOrder( $i ) . ' </h><a id="displayText' . $i . '" href="javascript:toggle' . $i . '();"> hide</a>
                              <div id="toggleText' . $i . '" style="display: block;">
                                  <div class="row">
                                      <div class="col-md-12 bordered">';
            $j = 0;
            while($j < $this->model->countCompleteProductNameIteration($i)) {
                echo '        <div class="col-md-4">
                                    <div class="row">
                                      <div class="col-md-6" style="margin-top: 20px;">
                                          <h class="product"><a href="subdescription.php?original_name=' . $this->model->getCompleteOriginalName($i, $j) . '
                                               &amp;table=' . $this->model->getCompleteProductTable($i, $j) . '&amp;id_num=' . $this->model->getCompletePrice($i, $j) . '
                                               &amp;id=' . $this->model->getCompleteId($i, $j) . '&amp;product_name=' . $this->model->getCompleteProductTable($i, $j) . '
                                               ">' . $this->model->getCompleteProductName($i, $j) . '</a></h><br />
                                          <div class="divide"></div>
                                          <h>Category: <em><span id="category-item">' . $this->model->getCompleteCategory($i, $j) . '</span></em></h><br />
                                          <h>' . $this->model->getCompleteQuantity($i, $j) . ' items</h><br />
                                          <h class="cart-price">$' . $this->model->getCompletePrice($i, $j) . '</h>
                                      </div>
                                      <div class="col-md-6';
                /*if($j < 3 && ($j % 2 !== 0 || $j == 0)){
                    echo ' border-right';
                } else if ($j > 3 && $j % 3 !== 0){
                    echo ' border-right';
                }*/
                echo                '">
                                        <img style="margin-top: 20px;" src="' . $this->model->getCompletePhoto($i, $j) . '" width="120" height="120" /><br />
                                      </div>
                                    </div>
                                  </div>';
                $j++;
            }
            echo                 '</div>
                                </div>
                             </div>
                           </div>';
            echo          '<script>
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

        $i = 0;
        $k = 0;

        $iterate =  $this->model->countCompleteOrder() + 1;
        while ($i < $this->model->countDoneOrder()) {
            if( $i == 0) {
                echo '<div style="margin-top: 30px; padding-bottom: 20px;">
                         <h style="margin-left: 25px;" class="orders">Done orders:</h><br />
                      </div>';
            }

                echo      '<div class="col-md-12">';

                echo      '<h class="order-id">#' . $this->model->getDoneOrder( $i ) . ' </h><a id="displayText' . $iterate . '" href="javascript:toggle' . $iterate . '();"> hide</a>
                              <div id="toggleText' . $iterate . '" style="display: block;">
                                  <div class="row">
                                      <div class="col-md-12 bordered">';
                $j = 0;
                while($j < $this->model->countDoneProductNameIteration($i)) {
                    echo '        <div class="col-md-4">
                                    <div class="row">
                                      <div class="col-md-6" style="margin-top: 20px;">
                                          <h class="product"><a href="subdescription.php?original_name=' . $this->model->getDoneOriginalName($i, $j) . '
                                               &amp;table=' . $this->model->getDoneProductTable($i, $j) . '&amp;id_num=' . $this->model->getDonePrice($i, $j) . '
                                               &amp;id=' . $this->model->getDoneId($i, $j) . '&amp;product_name=' . $this->model->getDoneProductTable($i, $j) . '
                                               ">' . $this->model->getDoneProductName($i, $j) . '</a></h><br />
                                          <div class="divide"></div>
                                          <h>Category: <em><span id="category-item">' . $this->model->getDoneCategory($i, $j) . '</span></em></h><br />
                                          <h>' . $this->model->getDoneQuantity($i, $j) . ' items</h><br />
                                          <h class="cart-price">$' . $this->model->getDonePrice($i, $j) . '</h>
                                      </div>
                                      <div class="col-md-6';
                    /*if($j < 3 && ($j % 2 !== 0 || $j == 0)){
                        echo ' border-right';
                    } else if ($j > 3 && $j % 3 !== 0){
                        echo ' border-right';
                    }*/
                    echo                '">
                                        <img style="margin-top: 20px;" src="' . $this->model->getDonePhoto($i, $j) . '" width="120" height="120" /><br />
                                      </div>
                                    </div>
                                  </div>';
                    $j++;
                }
                echo                 '</div>
                                </div>
                             </div>
                           </div>';
                echo          '<script>
                                  function toggle' . $iterate . '() {
                                       var ele  = document.getElementById("toggleText' . $iterate . '");
                                       var text = document.getElementById("displayText' . $iterate . '");
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
                $iterate++;
            }

        echo    '</div>
              </div>
          </div>
          <div style="margin-top: 50px;"></div>';
    }
}