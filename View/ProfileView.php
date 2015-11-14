<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.11.2015
 * Time: 17:00
 */

include_once('DefaultView.php');

class ProfileView extends DefaultView
{
    private $model;
    public function __construct(ProfileModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getTable() {
        echo '
            <table class="table">
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
                    while ($i < count($this->model->id_array)){
                    echo '
                    <tr>
                        <td class="text-center">#' . $this->model->getIdArray($i) . '</td>
                        <td class="text-left">' . $this->model->getProductNameArray($i) . '</td>
                        <td>' . $this->model->getQuantityOfItem($i) .'</td>
                        <td class="text-right">' . $this->model->getCategoryArray($i) . '</td>
                        <td class="text-right">' . $this->model->getPriceArray($i) * $this->model->getQuantityOfItem($i) . ' $</td>
                        <td>
                            <form action="remove.php" method="post">
                                <input type="hidden" name="id" value="' . $this->model->getIdArray($i) .'"/>
                                <button class="btn btn-sm btn-warning">Remove</button>
                            </form>
                        </td>
                    </tr>';
                            $i++;
                        }
        echo'   </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-right">Total:</td>
                        <td class="text-right">' .
                            $this->model->getAPrice() . ' $'
                     .   '</td>
                    </tr>
                </tfoot>
            </table>
            <div class="text-center">
                <a class="btn btn-primary" onclick="goBack();">Continue shopping</a>
                <a class="btn btn-primary" href="placeorder.php">Place order now</a>
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
    }
}