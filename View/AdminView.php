<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 09.11.2015
 * Time: 19:28
 *
 * ==================
 * Login form, error messages, admin main page,
 * update data page
 * =================
 */

include_once('DefaultView.php');

class AdminView extends DefaultView
{
    /*
     * MVC constructor
     * with AdminModel
     *
     * @private $model
     */
    private $model;
    public function __construct(AdminModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /*
     * Login form for entrance
     * in Admin account
     */
    public function getLoginForm() {

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(isset($_SESSION['admin'])) {
            if ($_SESSION['admin'] == 'admin') {
                header('Location: admin.php');
            }
        }

        if(isset($_SESSION['error'])){
            if($_SESSION['error'] == 1) {
                $this->errorLoginMessage();
            }
        }

        session_write_close();

        echo  '<div class="text-center" style="';

        if(isset($_GET['auth'])){
            echo 'margin-top: 5%;';
        } else {
            echo 'margin-top: 12%;';
        }

        echo       '"><h1 class="sign">Sign in as Admin</h1>
                      <h2 class="only-one">Only one Account for All control</h2>
                  </div>
                  <div class="margin-auto" style="margin-top: 5%;"><form action="admin_action_login" method="post" id="login_form">
                              <div class="input-group" style="width: 100%;">
                                  <input type="text" name="username" id="username" class="form-control woden-sims-email" placeholder="Admin Username">
                              </div>
                              <div class="right-inner-addon-1">
                                  <input type="password" class="form-control" name="password" id="password" placeholder="' . $this->model->Translate('Password') . '" />
                                  <i id="submit-main" class="glyphicon glyphicon-arrow-right" style="z-index: 10000 !important;"></i>
                              </div>
                          </form>
                  </div>
                  <div class="text-center" style="margin-top: 15px;">
                      <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'forgot-password/?session_auth=' . $_SESSION["session_auth"] . '" class="forgot links" id="link">Forgot your password?</a>
                  </div>
                  <img style="margin-top: 40px;" src="/images/phones-category-white.png" class="full-image-cascade" />
               </div>';

        echo '<script>
                    var form = document.getElementById("login_form");

                    document.getElementById("submit-main").addEventListener("click", function () {
                      form.submit();
                    });
              </script>';

    }

    /*
     * Error alert block
     * while incorrect username or password
     */
    private function errorLoginMessage() {

        echo '<div class="alert alert-danger" role="alert" style="margin-top: -70px">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Incorrert admin username or password! Please check again
              </div>';
    }

    /*
     * The main admin page
     */
    public function adminBlocks() {

        echo '<h1>The Main Admin Page</h1>
              <div class="panel panel-default row">
                <div class="col-xs-3 panel-body">
                <a class="btn btn-block btn-default" href="admin-products">
                    Products
                </a>
                <a class="btn btn-block btn-primary" href="admin-orders">
                    Orders
                </a>
                <a class="btn btn-block btn-success" href="admin-support">
                    Support
                </a>
                    </div>
                    <div class="col-xs-8 panel-body" >
                        <div>
                            <table class="table table-striped table-bordered">
                                <tr><th>Admin</th><th>Password</th><th>Forget</th><th></th></tr>
                                <tr>
                                    <td>admin</td>
                                    <td>Elisdes07@lim51</td>
                                    <td>serdiuk.oleksandr@gmail.com</td>
                                    <td>
                                        <form action="admin-logout.php" method="post">
                                            <button class="btn btn-xs btn-primary">
                                            Logout
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <div>
                                <h3>Change admin data:</h3>
                                <table class="table table-striped table-bordered">
                                    <tr><th>For any</th><th>questions</th><th>ask</th><th>#</th></tr>
                                    <tr>
                                        <form action="change-admin.php" method="post">
                                            <td><p>Oleksandr Serdiuk</p></td>
                                            <td><p>Knyajiy zaton 5, apt. 109</p></td>
                                            <td><p>+38(095) 094 82 68</p></td>
                                            <td><button class="btn btn-primary" disabled>Apply</button></td>
                                        </form>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>';
    }

    /*
     * Getting all the data
     * from Products Table
     */
    public function ProductsPage()
    {

        echo '      <div class="col-xs-8 panel-body" >
                        <div>
                            <table class="table table-striped table-bordered">
                                <tr><th>Id</th><th>Product Name</th><th>Photo</th><th>Description</th><th>Category</th><th>Price</th>
                                <th>Previous Price</th><th>Time of Adding</th><th>Features</th><th>Quantity</th><th>Shipping</th>
                                <th>Average Price</th><th>#</th><th>&</th></tr>';
        $i = 0;

        while ($i < count($this->model->getItems())) {
            echo '<tr>';
            echo '<td>' . $this->model->getId($i) . '</td>';
            echo '<td>' . $this->model->getProductName($i) . '</td>';
            echo '<td>' . $this->model->getPhoto($i) . '</td>';
            echo '<td>' . $this->model->getDescription($i) . '</td>';
            echo '<td>' . $this->model->getCategory($i) . '</td>';
            echo '<td>' . $this->model->getPrice($i) . '</td>';
            echo '<td>' . $this->model->getPriviousPrice($i) . '</td>';
            echo '<td>' . $this->model->getTimeOfAdding($i) . '</td>';
            echo '<td>' . $this->model->getFeatures($i) . '</td>';
            echo '<td>' . $this->model->getQuantity($i) . '</td>';
            echo '<td>' . $this->model->getShipping($i) . '</td>';
            echo '<td>' . $this->model->getAverage($i) . '</td>';

            echo '<td>
                      <form action="admin-save.php" method="post">
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
                            <button class="btn btn-primary">Edit</button>
                        </form>
                  </td>';

              echo '<td>
                        <form action="admin-delete.php" method="post">
                            <input type="hidden" name="edit_id" value="' . $this->model->getId($i) . '" />
                            <button class="btn btn-success">Delete</button>
                        </form>
                    </td>';
            echo '</tr>';

            $i++;
        }

                echo      '</table>
                        </div>
                   </div>';
    }

    /*
     * Update page
     * for the Products data
     */
    public function getForm() {

        echo '<div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <form action="admin-update.php" method="post">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" class="form-control" name="id" id="id" value="' . $this->model->getOneId() . '" />
                            </div>
                            <div class="form-group">
                                <label for="product_name">Product name</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" value="' . $this->model->getOneProductName() . '" />
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="text" class="form-control" name="photo" id="photo" value="' . $this->model->getOnePhoto() . '" />
                            </div>
                            <div class="form-group">
                                <label for="description">Desciption</label>
                                <textarea name="description" id="description" class="form-control" rows="15">' . $this->model->getOneDescription() . '</textarea>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" class="form-control" name="category" id="category" value="' . $this->model->getOneCategory() . '" />
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" name="price" id="price" value="' . $this->model->getOnePrice() . '" />
                            </div>
                            <div class="form-group">
                                <label for="previous_price">Previous price</label>
                                <input type="text" class="form-control" name="previous_price" id="previous_price" value="' . $this->model->getOnePreviousPrice() . '" />
                            </div>




                    </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="time_of_adding">Time of adding</label>
                                <input type="text" class="form-control" name="time_of_adding" id="time_of_adding" value="' . $this->model->getOneTimeOfAdding() . '" />
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="text" class="form-control" name="quantity" id="quantity" value="' . $this->model->getOneQuantity() . '" />
                            </div>
                            <div>
                                <label for="shipping">Shipping</label>
                                <input type="text" class="form-control" name="shipping" id="shipping" value="' . $this->model->getOneShipping() . '" />
                            </div>
                            <div class="form-group" style="margin-top: 20px;">
                                <label for="features">Features</label>
                                <textarea class="form-control" name="features" id="features" rows="15">' . $this->model->getOneFeature() . '</textarea>
                            </div>
                    </div>


                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                            <div class="form-group text-center">
                                 <button onclick="history.go(-1);" class="btn btn-success form-control" style="margin-top: 40px;"><< GO BACK</button>
                            </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                            <div class="form-group text-center">
                                 <button class="btn btn-success form-control" style="margin-top: 40px;">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>';
    }
}