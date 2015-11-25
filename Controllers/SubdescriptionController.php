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

    public function actionGetSubdescription( $product_name, $table, $id, $order_id ) {

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
        //print_r($product_name);
        //print_r ($order_id);
        $this->model->setId( $order_id );
        $this->model->setOriginalName( $original_name );
        $this->model->setPhoto( $photo );
        $this->model->setProductName( $product_name );
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

    public function actionSetDistinctProductsPrice( $table, $product_name){


        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT id, product_name, category, photo, price FROM $table WHERE (product_name='$product_name' AND price != {$this->model->getPrice()}) ORDER BY price ASC LIMIT 3";

        $result_query = $mysqli->query( $sql_query );

        //echo $sql_query;
        $id_array = array();
        $price_array = array();
        $product_name_array = array();
        $category_array = array();
        $photo_array = array();

        if ($result_query->num_rows > 0) {
            // output data of each row
            while ($row = $result_query->fetch_assoc()) {
                $id_array = array_merge($id_array, array_map('trim', explode(",", $row['id'])));
                $price_array = array_merge($price_array, array_map('trim', explode(",", $row['price'])));
                $product_name_array = array_merge($product_name_array, array_map('trim', explode(",", $row['product_name'])));
                $category_array = array_merge($category_array, array_map('trim', explode(",", $row['category'])));
                $photo_array = array_merge($photo_array, array_map('trim', explode(",", $row['photo'])));
            }
        }

        //print_r($product_name_array);
        $this->model->setSortId( $id_array );
        $this->model->setSortPrice( $price_array );
        $this->model->setSortProductNames( $product_name_array );
        $this->model->setSortCategory( $category_array );
        $this->model->setSortPhoto( $photo_array );
    }

    public function actionSelectRandomProduct() {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT phones.original_name as phone, notebooks.original_name as notebook, gadgets.original_name as gadget, television.original_name as television FROM phones
                      INNER JOIN gadgets INNER JOIN notebooks INNER JOIN television ORDER BY RAND() LIMIT 1";

        $result_query = $mysqli->query( $sql_query );

        $product_array = array();

        if ($result_query->num_rows > 0) {
            // output data of each row
            while ($row = $result_query->fetch_assoc()) {
                array_push($product_array, $row['phone']);
                array_push($product_array, $row['notebook']);
                array_push($product_array, $row['gadget']);
                array_push($product_array, $row['television']);
            }
        }

        //print_r($product_array);

        $sequence_number = rand(1,4);
        $table = '';

        if( $sequence_number == 1){
            $table = 'phones';
        } else if ( $sequence_number == 2){
            $table = 'notebooks';
        } else if ( $sequence_number == 3){
            $table = 'gadgets';
        } else if ( $sequence_number == 4){
            $table = 'television';
        }

        $search_num = $sequence_number - 1;

        $query = "SELECT id, original_name, price, previous_price, quantity, photo FROM $table WHERE original_name='$product_array[$search_num]'";

        //echo $query;
        $result = $mysqli->query( $query );

        $sequence_id = array();
        $sequence_original_name = array();
        $sequence_price = array();
        $sequence_previous_price = array();
        $sequence_quantity = array();
        $sequence_photo = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sequence_id = array_merge($sequence_id, array_map('trim', explode(",", $row['id'])));
                $sequence_original_name = array_merge($sequence_original_name, array_map('trim', explode(",", $row['original_name'])));
                $sequence_price = array_merge($sequence_price, array_map('trim', explode(",", $row['price'])));
                $sequence_previous_price = array_merge($sequence_previous_price, array_map('trim', explode(",", $row['previous_price'])));
                $sequence_quantity = array_merge($sequence_quantity, array_map('trim', explode(",", $row['quantity'])));
                $sequence_photo = array_merge($sequence_photo, array_map('trim', explode(",", $row['photo'])));
            }
        }

        if( strlen($sequence_original_name[0]) > 30 ){
            $sequence_original_name[0] = substr($sequence_original_name[0], 0, 30);
            $sequence_original_name[0] .= ' ...';
        }

        $this->model->setSequenceId( $sequence_id[0] );
        $this->model->setSequenceOriginalName( $sequence_original_name[0] );
        $this->model->setSequencePrice( $sequence_price[0] );
        $this->model->setSequencePreviousPrice( $sequence_previous_price[0] );
        $this->model->setSequenceQuantity( $sequence_quantity[0] );
        $this->model->setSequencePhoto( $sequence_photo[0] );


    }

    public function actionMakeComparison( $table ) {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT DISTINCT product_name FROM $table ORDER BY RAND() LIMIT 4";
        $result = $mysqli->query( $sql_query );

        $products_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $products_array = array_merge($products_array, array_map('trim', explode(",", $row['product_name'])));
            }
        }

        $product_name_array = array();
        $original_name_array = array();
        $photo_array = array();
        $description_array = array();
        $category_array = array();
        $price_array = array();
        $previous_price_array = array();
        $time_of_adding_array = array();
        $features_array = array();
        $id_array = array();
        $quantity_array = array();
        $shipping_array = array();
        $average_price_array = array();

        $i = 0;
        while ($i < count($products_array)) {
            $sql_stmt = "SELECT * FROM $table WHERE product_name='$products_array[$i]' LIMIT 1";
            $result_query = $mysqli->query($sql_stmt);

            if ($result_query->num_rows > 0) {
                // output data of each row
                while ($row = $result_query->fetch_assoc()) {
                    array_push($id_array, $row['id']);
                    array_push($product_name_array, $row['product_name']);
                    array_push($original_name_array, $row['original_name']);
                    array_push($photo_array, $row['photo']);
                    array_push($description_array, $row['description']);
                    array_push($category_array, $row['category']);
                    array_push($price_array, $row['price']);
                    array_push($previous_price_array, $row['previous_price']);
                    array_push($time_of_adding_array, $row['time_of_adding']);
                    array_push($features_array, $row['features']);
                    array_push($quantity_array, $row['quantity']);
                    array_push($shipping_array, $row['shipping']);
                    array_push($average_price_array, $row['average_price']);
                }
            }

            $i++;
        }

        $this->model->setComparisonId( $id_array );
        $this->model->setComparisonProductName( $product_name_array );
        $this->model->setComparisonOriginalName( $original_name_array );
        $this->model->setComparisonPhoto( $photo_array );
        $this->model->setComparisonDescription( $description_array );
        $this->model->setComparisonCategory( $category_array );
        $this->model->setComparisonPrice( $price_array );
        $this->model->setComparisonPreviousPrice( $previous_price_array );
        //$this->model->setComparisonTimeOfAdding( $time_of_adding_array );
        $this->model->setComparisonFeatures( $features_array );
        $this->model->setComparisonQuantity( $quantity_array );
        $this->model->setComparisonShipping( $shipping_array );
        $this->model->setComparisonAverage( $average_price_array );

        $sql = "SELECT UNIX_TIMESTAMP(time) as timing FROM $table";
        $res_sql = $mysqli->query( $sql );

        $timestamp_array = array();

        if ($res_sql->num_rows > 0) {
            // output data of each row
            while ($row = $res_sql->fetch_assoc()) {
                $timestamp_array = array_merge($timestamp_array, array_map('trim', explode(",", $row['timing'])));
            }
        }
        $this->model->setComparisonTimeOfAdding( $timestamp_array );

    }

    public function actionGetAssocProducts( $table, $product_name ) {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $sql_query = "SELECT assoc_products FROM subdescription WHERE product_name='$product_name'";
        $result = $mysqli->query( $sql_query );

        //echo $sql_query;

        $products_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $products_array = array_merge($products_array, array_map('trim', explode(",", $row['assoc_products'])));
            }
        }

        $photo_array = array();
        $price_array = array();
        $previous_price_array = array();
        $shipping_array = array();

        $i = 0;
        while( $i < count($products_array)){

            $sql_row = "SELECT photo, price, previous_price, shipping FROM $table WHERE original_name='$products_array[$i]' LIMIT 1";
            $sql_res = $mysqli->query( $sql_row );

            if ($sql_res->num_rows > 0) {
                // output data of each row
                while ($row = $sql_res->fetch_assoc()) {
                    array_push($photo_array, $row['photo']);
                    array_push($price_array, $row['price']);
                    array_push($previous_price_array, $row['previous_price']);
                    array_push($shipping_array, $row['shipping']);
                }
            }

            $i++;
        }

        $this->model->setAssocProducts( $products_array );
        $this->model->setAssocPhoto( $photo_array );
        $this->model->setAssocPrice( $price_array );
        $this->model->setAssocPreviousPrice( $previous_price_array );
        $this->model->setAssocShipping( $shipping_array );

    }

    public function actionGetQuestionsAndAnswers( $original_name, $search ) {

        include_once('/../Storage.php');
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        /*if ($search == '1'){
            $sql_query = "SELECT product, ask_person, question, answer, answer_person, unix_timestamp(created) as created FROM questions WHERE product LIKE '%$original_name%' OR question LIKE '%$original_name%' OR answer LIKE '%$original_name%'";
        } else {
            $sql_query = "SELECT product, ask_person, question, answer, answer_person, unix_timestamp(created) as created FROM questions WHERE product='$original_name' LIMIT 4";
        }
        $result = $mysqli->query( $sql_query );

        //echo $sql_query;
        $ask_person_array = array();
        $question_array = array();
        $answer_array = array();
        $answer_person_array = array();
        $created_array = array();

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $ask_person_array = array_merge($ask_person_array, array_map('trim', explode(",", $row['ask_person'])));
                $question_array = array_merge($question_array, array_map('trim', explode(",", $row['question'])));
                $answer_array = array_merge($answer_array, array_map('trim', explode(",", $row['answer'])));
                $answer_person_array = array_merge($answer_person_array, array_map('trim', explode(",", $row['answer_person'])));
                $created_array = array_merge($created_array, array_map('trim', explode(",", $row['created'])));
            }
        }

        $this->model->setAskPerson( $ask_person_array );
        $this->model->setQuestion( $question_array );
        $this->model->setAnswer( $answer_array );
        $this->model->setAnswerPerson( $answer_person_array );
        $this->model->setAnswerTime( $created_array );*/



        $items = explode(" ", $original_name);

        $u = 0;
        while($u < count($items)){
            if(strlen($items[$u]) < 2){
                unset($items[$u]);
            }

            $u++;
        }
        sort($items);
        //print_r($items);

        $result_items = array();
        $i = 0;

        while ($i < count($items)){
            $sql_id = "SELECT id FROM questions WHERE product LIKE '%$items[$i]%' OR question LIKE '%$items[$i]%' OR answer LIKE '%$items[$i]%'";
            $res_id = $mysqli->query( $sql_id );

            if ($res_id->num_rows > 0) {
                // output data of each row
                while ($row = $res_id->fetch_assoc()) {
                    $result_items = array_merge($result_items, array_map('trim', explode(",", $row['id'])));
                }
            }

            $i++;
        }

        $result_items = array_unique($result_items);
        //print_r($result_items);


        /*
         * FROM ID
         * GETTING DATA
         */

        $products_array = array();
        $ask_person_array = array();
        $question_array = array();
        $answer_array = array();
        $answer_person_array = array();
        $created_array = array();
        $i = 0;
        while($i < count($result_items)){
            $sql_query = "SELECT product, ask_person, question, answer, answer_person, unix_timestamp(created) as created FROM questions WHERE id=$result_items[$i]";
            $result_query = $mysqli->query( $sql_query );


            if ($result_query->num_rows > 0) {
                // output data of each row
                while ($row = $result_query->fetch_assoc()) {
                    array_push($products_array, $row['product']);
                    array_push($ask_person_array, $row['ask_person']);
                    array_push($question_array, $row['question']);
                    array_push($answer_array, $row['answer']);
                    array_push($answer_person_array, $row['answer_person']);
                    array_push($created_array, $row['created']);
                }
            }

            $i++;
        }

        //print_r($question_array);
        //unset($question_array[1]);
        $question_result_array = array();

        $j = 0;
        while($j < count($question_array)){

            $item = explode(" ", $question_array[$j]);

            $k = 0;
            while($k < count($item)){
                $u = 0;
                while($u < count($items)) {
                    if (strtolower($item[$k]) == strtolower($items[$u])) {
                        $item[$k] = "<span id='found'>$item[$k]</span>";
                    }
                    $u++;
                }
                $k++;
            }
            array_push($question_result_array, $item);
            $j++;
        }

        $question_final = array();
        $i = 0;
        while($i < count($question_result_array)){
            array_push($question_final, implode(" ", $question_result_array[$i]));

            $i++;
        }
        //print_r($question_final);

        /*
         * @var $question_result_array
         * Array of all questions
         * added found class
         */

        $answer_result_array = array();

        $j = 0;
        while($j < count($answer_array)){

            $item = explode(" ", $answer_array[$j]);

            $k = 0;
            while($k < count($item)){
                $u = 0;
                while($u < count($items)) {
                    if (strtolower($item[$k]) == strtolower($items[$u])) {
                        $item[$k] = "<span id='found'>$item[$k]</span>";
                    }
                    $u++;
                }
                $k++;
            }
            array_push($answer_result_array, $item);
            $j++;
        }

        $answer_final = array();
        $i = 0;
        while($i < count($answer_result_array)){
            array_push($answer_final, implode(" ", $answer_result_array[$i]));

            $i++;
        }
        //print_r($answer_final);

        //print_r($answer_result_array);
        /*
         * @var $answer_result_array
         * Array of all answers
         * added found class
         */

        $product_result_array = array();

        $j = 0;
        while($j < count($products_array)){

            $item = explode(" ", $products_array[$j]);

            $k = 0;
            while($k < count($item)){
                $u = 0;
                while($u < count($items)) {
                    if (strtolower($item[$k]) == strtolower($items[$u])) {
                        $item[$k] = "<span id='found'>$item[$k]</span>";
                    }
                    $u++;
                }
                $k++;
            }
            array_push($product_result_array, $item);
            $j++;
        }

        $products_final = array();
        $i = 0;
        while($i < count($product_result_array)){
            array_push($products_final, implode(" ", $product_result_array[$i]));

            $i++;
        }
        //print_r($products_final);

        //print_r($product_result_array);
        $this->model->setAskPerson( $ask_person_array );
        $this->model->setQuestion( $question_final );
        $this->model->setAnswer( $answer_final );
        $this->model->setAnswerPerson( $answer_person_array );
        $this->model->setAnswerTime( $created_array );

    }
}