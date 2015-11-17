<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.11.2015
 * Time: 20:05
 *
 * ==================
 * Table with done/undone products
 * ==================
 */

include_once('DefaultView.php');

class CheckoutView extends DefaultView
{
    /*
     * MVC constructor
     * with CheckoutView
     *
     * @private $model
     */
    private $model;
    public function __construct(CheckoutModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /*
     * Getting table of done
     * products with undone
     */
    public function getTable( $view ) {

        if($view == 'latest') {
            echo '<h1 class="text-center">Latest orders</h1>';
        } else {
            echo '<h1 class="text-center">Done orders</h1>';
        }
        echo '
            <table class="table">
                <thead>
                    <tr>
                        <th>Order Id</th>
                        <th>Full name</th>
                        <th>User</th>
                        <th class="text-right">Full price</th>
                        <th class="text-right">Done</th>
                    </tr>
                </thead>
                <tbody>';
        $i = 0;
        while ($i < $this->model->countId()){
            $_SESSION['user'] = $this->model->getOrderId($i);
            echo '
                    <tr>
                        <td class="text-center">#' .$this->model->getOrderId($i) . '</td>
                        <td class="text-left">' . $this->model->getName($i) . '</td>
                        <td>' . $this->model->getUser($i) . '</td>
                        <td class="text-right">' . $this->model->getPrice($i) . ' $</td>
                        <td class="text-right">';
            if($view == 'latest') {
                echo '<form action="done-admin.php" method="post">
                            <input type="checkbox" name="order" value="' . $this->model->getOrderId($i) . '" />
                        </td>
                        <td>
                            <button class="btn btn-sm btn-warning">Done</button>
                        </form>
                        </td>
                    </tr>';
            } else {
                echo '<form action="pull-back-admin.php" method="post">
                           <input type="checkbox" name="order" value="' . $this->model->getOrderId($i) . '" />
                      </td>
                      <td>
                           <button class="btn btn-sm btn-success">Pull Back</button>
                      </form>
                      </td>
                </tr>';
            }
            $i++;
        }
        echo'   </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right">Total:</td>
                        <td class="text-right">' .
            $this->model->getFullPrice() . ' $'
            .   '</td>
                    </tr>
                </tfoot>
            </table>
            <script src="js/jquery-min.js"></script>
            <script src="js/bootstrap.min.js"></script>';
    }
}