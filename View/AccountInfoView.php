<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 01.12.2015
 * Time: 18:36
 */

include_once('AccountOrderView.php');

class AccountInfoView extends AccountOrderView
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @private $model
     */
    private $model;
    public function __construct(AccountInfoModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getAccountPage() {

        $this->DoctypeView( 'account' );
        $this->headerView();
        $this->getAccountBar();
        $this->getMainAccount();
        $this->getFooter();
    }

    private function getMainAccount() {

        echo '<div class="col-md-9">
                <h class="main-page">This is your main account page</h>

                <div class="cart-divider"></div>

                    <div class="table-responsive">
                        <h>Change your order status:</h><br />
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Status</th>
                                <th>Cancel</th>
                              </tr>
                            </thead>
                            <tbody>';

        $i = 0;
        while( $i < $this->model->countItemsOrder()) {
            echo '<tr>
                      <td>#' . $this->model->getItemsOrder($i) . '</td>
                      <td>1</td>
                      <td>
                          <form action="account-cancel-order.php" method="post">
                              <button id="button-as-link">Cancel order</button>
                              <input type="hidden" value="' . $this->model->getItemsOrder($i) . '" name="order_id" id="order_id" />
                          </form>
                      </td>
                  </tr>';

            $i++;
        }

        echo    '</tbody>
              </table>
            </div>

             </div>
          </div>';
    }
}