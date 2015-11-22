<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 16:06
 */

include_once('DefaultController.php');

class SubdescriptionController extends DefaultController
{
    public $model;
    public function __construct(SubdescriptionModel $model) {
        parent::__construct($model);
        $this->model = $model;
    }

    public function actionGetSubdescription( $product_name, $table, $id ) {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT DISTINCT * FROM subdescription INNER JOIN $table WHERE $table.original_name='$product_name' AND subdescription.product_name='$product_name' AND $table.price = $id";
        $result = $mysqli->query( $sql_query );

        //echo $sql_query;
        $id = array();
        $original_name = array();
        $photo = array();
        $description = array();
        $category = array();
        $price = array();
        $previous_price = array();
        $time_of_adding = array();
        $features = array();
        $quantity = array();
        $shipping = array();
        $average_price = array();
        /*
         * Subdescription
         */
        $product_name = array();
        $assoc_products = array();
        $technical_details = array();
        $technical_details1 = array();
        $technical_details2 = array();
        $technical_details3 = array();
        $technical_details4 = array();
        $technical_details5 = array();
        $technical_details6 = array();
        $product_details = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                /*
                 * Table
                 */
                $id = $row['id'];
                $original_name = $row['original_name'];
                $photo = $row['photo'];
                $description = $row['description'];
                $category = $row['category'];
                $price = $row['price'];
                $previous_price = $row['previous_price'];
                $time_of_adding = $row['time_of_adding'];
                $features = $row['features'];
                $quantity = $row['quantity'];
                $shipping = $row['shipping'];
                $average_price = $row['average_price'];
                /*
                 * Subdescription
                 */
                $product_name = array_merge($product_name, array_map('trim', explode(",", $row['product_name'])));
                $assoc_products = array_merge($assoc_products, array_map('trim', explode(",", $row['assoc_products'])));
                $technical_details = array_merge($technical_details, array_map('trim', explode(",", $row['technical_details'])));
                $technical_details1 = array_merge($technical_details1, array_map('trim', explode(",", $row['technical_details1'])));
                $technical_details2 = array_merge($technical_details2, array_map('trim', explode(",", $row['technical_details2'])));
                $technical_details3 = array_merge($technical_details3, array_map('trim', explode(",", $row['technical_details3'])));
                $technical_details4 = array_merge($technical_details4, array_map('trim', explode(",", $row['technical_details4'])));
                $technical_details5 = array_merge($technical_details5, array_map('trim', explode(",", $row['technical_details5'])));
                $technical_details6 = array_merge($technical_details6, array_map('trim', explode(",", $row['technical_details6'])));
                $product_details = array_merge($product_details, array_map('trim', explode(",", $row['product_details'])));
            }
        }

        /*$id = $row['id'];
        $product_name = $row['product_name'];
        $assoc_products = explode(',', $row['assoc_products']);
        $technical_details = explode(',', $row['technical_details']);
        $technical_details1 = explode(',', $row['technical_details1']);
        $technical_details2 = explode(',', $row['technical_details2']);
        $technical_details3 = explode(',', $row['technical_details3']);
        $technical_details4 = explode(',', $row['technical_details4']);
        $technical_details5 = explode(',', $row['technical_details5']);
        $technical_details6 = explode(',', $row['technical_details6']);
        $product_details = explode(',', $row['product_details']);

        echo $assoc_products;*/
        //print_r( $technical_details );

    }
}