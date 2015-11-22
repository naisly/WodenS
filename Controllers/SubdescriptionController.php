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

        $sql_query = "SELECT original_name, photo, category,
                      price, previous_price, time_of_adding, features, quantity,
                      shipping, average_price, subdescription.product_name, subdescription.assoc_products,
                      subdescription.description, subdescription.technical_details, subdescription.technical_details1,
                      subdescription.technical_details2, subdescription.technical_details3, subdescription.technical_details4,
                      subdescription.technical_details5, subdescription.technical_details6, subdescription.product_details, subdescription.assoc_photo
                      FROM subdescription INNER JOIN $table WHERE $table.original_name='$product_name' AND
                      subdescription.product_name='$product_name' AND $table.price = $id";
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
        $desc_products = array();
        $technical_details = array();
        $technical_details1 = array();
        $technical_details2 = array();
        $technical_details3 = array();
        $technical_details4 = array();
        $technical_details5 = array();
        $technical_details6 = array();
        $product_details = array();
        $assoc_photo = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                /*
                 * Table
                 */
                //$id = $row['id'];
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
                $desc_products = array_merge($desc_products, array_map('trim', explode(",", $row['description'])));
                $technical_details = array_merge($technical_details, array_map('trim', explode(",", $row['technical_details'])));
                $technical_details1 = array_merge($technical_details1, array_map('trim', explode(",", $row['technical_details1'])));
                $technical_details2 = array_merge($technical_details2, array_map('trim', explode(",", $row['technical_details2'])));
                $technical_details3 = array_merge($technical_details3, array_map('trim', explode(",", $row['technical_details3'])));
                $technical_details4 = array_merge($technical_details4, array_map('trim', explode(",", $row['technical_details4'])));
                $technical_details5 = array_merge($technical_details5, array_map('trim', explode(",", $row['technical_details5'])));
                $technical_details6 = array_merge($technical_details6, array_map('trim', explode(",", $row['technical_details6'])));
                $product_details = array_merge($product_details, array_map('trim', explode(",", $row['product_details'])));
                $assoc_photo = array_merge($assoc_photo, array_map('trim', explode(",", $row['assoc_photo'])));
            }
        }

        $sql_min = "SELECT price FROM $table WHERE original_name='$original_name'";
        $result_min = $mysqli->query( $sql_min );

        $min_array = array();

        if ($result_min->num_rows > 0) {
            // output data of each row
            while ($row = $result_min->fetch_assoc()) {
                $min_array = array_merge($min_array, array_map('trim', explode(",", $row['price'])));
            }
        }
        //print_r($min_array);
        $min = min($min_array);

        $this->model->setId( $id );
        $this->model->setOriginalName( $original_name );
        $this->model->setPhoto( $photo );
        //$this->model->setDescription( $description );
        $this->model->setCategory( $category );
        $this->model->setPrice( $price );
        $this->model->setPreviousPrice( $previous_price );
        $this->model->setTimeOfAdding( $time_of_adding );
        $this->model->setFeatures( $features );
        $this->model->setQuantity( $quantity );
        $this->model->setShipping( $shipping );
        $this->model->setAverage( $average_price );

        $this->model->setProductName( $product_name );
        $this->model->setDescription( $desc_products );
        $this->model->setAssocProducts( $assoc_products );
        $this->model->setTechnicalDetails( $technical_details );
        $this->model->setTechnicalDetails1( $technical_details1 );
        $this->model->setTechnicalDetails2( $technical_details2 );
        $this->model->setTechnicalDetails3( $technical_details3 );
        $this->model->setTechnicalDetails4( $technical_details4 );
        $this->model->setTechnicalDetails5( $technical_details5 );
        $this->model->setTechnicalDetails6( $technical_details6 );
        $this->model->setProductDetails( $product_details );
        $this->model->setProductPhoto( $assoc_photo );
        $this->model->setMinimum( $min );


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