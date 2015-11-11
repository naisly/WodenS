<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 11.11.2015
 * Time: 20:05
 */
class CheckoutView
{
    private $model;
    public function __construct(CheckoutModel $model)
    {
        $this->model = $model;
    }

    public function DoctypeView()
    {
        return "<!DOCTYPE html>" .
        "<html>" .
        "<head>" .
        "<link rel='stylesheet' href='css/bootstrap.css' />" .
        "<link rel='stylesheet' href='css/styles.css' />" .
        "<link rel='stylesheet' href='css/default.css' />" .
        "<script src='js/jquery-min.js'></script>" .
        "<title>Woden S</title>" .
        "</head>" .
        "<body>";
    }

    public function getTable() {

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
                        <td class="text-center">#' . $this->model->getOrderId($i) . '</td>
                        <td class="text-left">' . $this->model->getName($i) . '</td>
                        <td>' . $this->model->getUser($i) .'</td>
                        <td class="text-right">' . $this->model->getPrice($i) . ' $' . '</td>
                        <td class="text-right">' . 'something' . ' $</td>
                        <td>
                            <form action="remove.php" method="post">
                                <input type="hidden" name="id" value="' . 1 .'"/>
                                <button class="btn btn-sm btn-warning">Remove</button>
                            </form>
                        </td>
                    </tr>';
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
            <script src="js/bootstrap.min.js"></script>';
    }
}