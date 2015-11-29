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

        $this->getAccountBar();
        $this->getOrders();
    }

    private function getOrders() {

        echo '<div class="col-md-9">
                <div class="row">';

        $i = 0;
        $k = 0;
        while ($i < $this->model->countProductItem()) {
                echo      '<div class="col-md-3">
                              <a id="displayText' . $i . '" href="javascript:toggle' . $i . '();">show</a> <== click Here<br />
                              <div id="toggleText' . $i . '" style="display: none">
                                  <h>' . $this->model->getProductItem($i) . '</h>
                                  <h>' . $this->model->getCategoryItem($i) . '</h>
                                  <h>' . $this->model->getQuantityItem($i) . '</h>
                                  <h>' . $this->model->getPriceItem($i) . '</h>
                              </div>
                           </div>
                           <script>
                               function toggle' . $i . '() {
                                    var ele  = document.getElementById("toggleText' . $i . '");
                                    var text = document.getElementById("displayText' . $i . '");
                                    if(ele.style.display == "block") {
                                        ele.style.display = "none";
                                        text.innerHTML = "show";
                                    }
                                    else {
                                        ele.style.display = "block";
                                        text.innerHTML = "hide";
                                    }
                                }
                           </script>';

            $i++;
        }


        echo    '</div>
              </div>
          </div>';
    }
}