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

                if( $i == 0){
                    echo '<h>Complete orders:</h>';
                }


                echo      '<div class="col-md-12">';

            if( $i == $this->model->getCountItems()){
                echo '<h style="margin-left: -15px;">Done orders:</h><br />';
            }

                echo      '<h>#' . $this->model->getItemsOrder( $i ) . ' </h><a id="displayText' . $i . '" href="javascript:toggle' . $i . '();"> show</a>
                              <div id="toggleText' . $i . '" style="display: none;">
                                  <div class="row">
                                      <div class="col-md-12 bordered">';

                $j = 0;
                while($j < $this->model->countProductItemIteration($i)) {
                    echo '        <div class="col-md-3">
                                      <img src="' . $this->model->getPhotoItems($i, $j) . '" width="120" height="120" />
                                      <h>' . $this->model->getProductItem($i, $j) . '</h><br />
                                      <h>' . $this->model->getCategoryItem($i, $j) . '</h><br />
                                      <h>' . $this->model->getQuantityItem($i, $j) . '</h><br />
                                      <h>' . $this->model->getPriceItem($i, $j) . '</h>
                                  </div>';

                    $j++;
                }


                echo
                                   '</div>
                                </div>
                             </div>
                           </div>';


                echo          '<script>
                                  function toggle' . $i . '() {
                                       var ele  = document.getElementById("toggleText' . $i . '");
                                       var text = document.getElementById("displayText' . $i . '");
                                       if(ele.style.display == "block") {
                                           ele.style.display = "none";
                                           text.innerHTML = "show";
                                       } else {
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