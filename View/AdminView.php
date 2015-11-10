<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 19:28
 */
class AdminView
{
    private $model;
    public function __construct(AdminModel $model)
    {
        $this->model = $model;
    }

    public function DoctypeView() {

        return "<!DOCTYPE html>" .
        "<html>" .
        "<head>" .
        "<link rel='stylesheet' href='css/bootstrap.css' />" .
        "<link rel='stylesheet' href='css/login.css' />" .
        "<link rel='stylesheet' href='css/styles.css' />" .
        "<script src='js/jquery-min.js'></script>" .
        "<title>Woden S</title>" .
        "</head>" .
        "<body>";
    }

    public function getLoginForm() {
        echo '<div class="text-center">
                 <img id="main" src="images/default.png" />
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4 margin-auto">
                              <fieldset class="field_set">
                                  <h1>Admin Page</h1>
                                  <form action="admin-login.php" method="post">
                                     <div class="form-group">
                                        <label for="text">Admin</label>
                                        <input type="text" class="form-control" name="username" id="username" required/>
                                     </div>
                                     <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="at least 6 characters" required/>
                                     </div>
                                     <div class="form-group text-center">
                                        <button class="form-control btn btn-default" id="submit">Sign In as Admin</button>
                                     </div>
                                  </form>
                                  <div class="row">
                                      <div class="col-md-2"></div>
                                      <div class="col-md-8">
                                          <div class="line"></div>
                                      </div>
                                      <div class="col-md-2"></div>
                                  </div>

                                  <p class="already-registered">Forgot your password?</p>
                                  <form action="#" method="post">
                                     <button class="form-control btn btn-primary" id="redirect">Get it Now</button>
                                  </form>
                              </fieldset>
                     </div>
                     <div class="col-md-4"></div>
                  </div>
               </div>
               <div class="container">
                   <div class="col-md-12">
                       <div class="line"></div>
                   </div>
               </div>
               <div class="min-spacer"></div>
               <div class="row">
                   <div class="col-md-12 text-center">
                        <ul class="hor_nav">
                            <li><a class="items" href="/privacy">Privacy</a></li>
                            <li><a class="items" href="/refunds">Refunds</a></li>
                            <li><a class="items" href="/sales">Sales</a></li>
                            <li><a class="items" href="site-map">Site map</a></li>
                        </ul>
                            <p id="copyright"> &copy; Woden S Inc. All rights reserved.</p>
                   </div>
               </div>
               <script src="js/jquery-min.js"></script>
               <script src="js/bootstrap.min.js"></script>';

    }

    public function errorLoginMessage() {

        echo '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Incorrert admin username or password! Please check again
              </div>';
    }

    public function adminBlocks() {

        echo '<div class="panel panel-default row">
                <div class="col-xs-3 panel-body">
                <a class="btn btn-block btn-default" href="admin-products.php">
                    Products
                </a>
                <a class="btn btn-block btn-default" href="admin-orders.php">
                    Orders
                </a>
                    </div>
                    <div class="col-xs-8 panel-body" >
                        <div ng-controller="ordersCtrl">
                            <table class="table table-striped table-bordered">
                            <tr><th>Name</th><th>City</th><th>Value</th><th></th></tr>
                            <tr ng-repeat="order in orders">
                            <td>{{order.name}}</td>
                            <td>{{order.city}}</td>
                            <td>{{calcTotal(order) | currency}}</td>
                            <td>
                            <button ng-click="selectOrder(order)" class="btn btn-xs btn-primary">
                            Details
                            </button>
                            </td>
                            </tr>
                            </table>
                            <div ng-show="selectedOrder">
                            <h3>Order Details</h3>
                            <table class="table table-striped table-bordered">
                            <tr><th>Name</th><th>Count</th><th>Price</th></tr>
                            <tr ng-repeat="item in selectedOrder.products">
                            <td>{{item.name}}</td>
                            <td>{{item.count}}</td>
                            <td>{{item.price| currency}} </td>
                            </tr>
                            </table>
                            </div>
                            </div>
                    </div>
                    </div>';
    }

    public function ProductsPage() {

        echo '      <div class="col-xs-8 panel-body" >
                        <div>
                            <table class="table table-striped table-bordered" style="width: 100%;">
                                <tr><th>Id</th><th>Product Name</th><th>Photo</th><th>Description</th><th>Category</th><th>Price</th>
                                <th>Previous Price</th><th>Time of Adding</th><th>Features</th><th>Quantity</th><th>Shipping</th>
                                <th>Average Price</th><th>#</th><th>&</th></tr>';
                    $i = 0;
                    session_start();
                    //$_SESSION['edit'] = 3;
                    while($i < count($this->model->getItems())){
                       echo '<tr>';
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="id" value="' . $this->model->getId($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getId($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="product_name" value="' . $this->model->getProductName($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getProductName($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="photo" value="' . $this->model->getPhoto($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getPhoto($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><textarea type="text" name="description" rows="10">' . $this->model->getDescription($i) . '</textarea></td>';
                        } else {
                            echo '<td>' . $this->model->getDescription($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="category" value="' . $this->model->getCategory($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getCategory($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="price" value="' . $this->model->getPrice($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getPrice($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="previous_price" value="' . $this->model->getPriviousPrice($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getPriviousPrice($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="time_of_adding" value="' . $this->model->getTimeOfAdding($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getTimeOfAdding($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><textarea type="text" name="features" rows="10">' . $this->model->getFeatures($i) . '</textarea></td>';
                        } else {
                            echo '<td>' . $this->model->getFeatures($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="quantity" value="' . $this->model->getQuantity($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getQuantity($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="shipping" value="' . $this->model->getShipping($i) . '" /></td>';
                        } else {
                            echo '<td>' . $this->model->getShipping($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i){
                            echo '<td><input type="text" name="average_price" value="' . $this->model->getAverage($i) . '" disabled /></td>';
                        } else {
                            echo '<td>' . $this->model->getAverage($i) . '</td>';
                        }
                        if($_SESSION['edit'] == $i) {
                            echo '<td>
                                    <form action="admin-edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="' . $this->model->getId($i) . '" />
                                        <input type="hidden" name="edit_product_name" value="' . $this->model->getProductName($i) . '" />
                                        <input type="hidden" name="edit_photo" value="' . $this->model->getPhoto($i) . '" />
                                        <input type="hidden" name="edit_description" value="' . $this->model->getDescription($i) . '" />
                                        <input type="hidden" name="edit_category" value="' . $this->model->getCategory($i) . '" />
                                        <input type="hidden" name="edit_price" value="' . $this->model->getPrice($i) . '" />
                                        <input type="hidden" name="edit_previous_price" value="' . $this->model->getPriviousPrice($i) . '" />
                                        <input type="hidden" name="edit_time_of_adding" value="' . $this->model->getTimeOfAdding($i) . '" />
                                        <input type="hidden" name="edit_features" value="' . $this->model->getFeatures($i) . '" />
                                        <input type="hidden" name="edit_quantity" value="' . $this->model->getQuantity($i) . '" />
                                        <input type="hidden" name="edit_shipping" value="' . $this->model->getShipping($i) . '" />
                                        <button class="btn btn-primary">Change data</button>
                                    </form>
                                    <form action="admin-back.php" method="post">
                                        <button class="btn btn-default" style="margin-top: 20px;">Go Back now</button>
                                    </form>
                                </td>';
                        } else {
                            echo '<td>
                                      <form action="admin-session.php" method="post">
                                           <button class="btn btn-primary">Edit</button>
                                           <input type="hidden" name="edit_id' . $i . '" value="' . $this->model->getId($i) . '" />
                                      </form>
                                  </td>';
                        }
                              echo '<td>
                                        <form action="admin-delete.php" method="post">
                                            <input type="hidden" name="edit_id' . $i . '" value="' . $this->model->getId($i) . '" />
                                            <button class="btn btn-success">Delete</button>
                                        </form>
                                    </td>';

                        $i++;
                    }

                echo      '</table>
                        </div>
                   </div>';
    }
}