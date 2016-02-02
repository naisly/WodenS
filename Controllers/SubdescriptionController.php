<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 16:06
 *
 * ===================
 * Getting Subdescription data,
 * Distinct prices for related items,
 * Getting Random item,
 * Making Comparisons for related items,
 * Getting Associated products for slider
 * Getting FAQ
 * ===================
 */
include_once('DefaultController.php');
class SubdescriptionController extends DefaultController
{
    /**
     * MVC constructor
     * with DefaultModel
     *
     * @global $model
     */
    public $model;
    public function __construct(SubdescriptionModel $model) {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * Getting Subdescription data,
     * Distinct prices for related items,
     * Getting Random item,
     * Making Comparisons for related items,
     * Getting Associated products for slider
     * Getting FAQ
     *
     *
     * @param $original_name
     * @param $table
     * @param $id_num
     * @param $id
     * @param $product_name
     */
    public function actionGetData( $original_name, $table, $id_num, $id, $product_name ) {

        $this->actionGetSubdescription( $original_name, $table, $id_num, $id );
        $this->actionSetDistinctProductsPrice( $table, $product_name );
        $this->actionSelectRandomProduct();
        $this->actionMakeComparison( $table );
        $this->actionGetAssocProducts( $table, $original_name );
        $this->actionGetQuestionsAndAnswers( $original_name );

        $this->actionGetHeaderCart();
    }

    /**
     * Getting Data for Subdescription Page
     *
     * @param $product_name
     * @param $table
     * @param $id
     * @param $order_id
     */
    private function actionGetSubdescription( $product_name, $table, $id, $order_id ) {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
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

        $original_name = array();
        $photo = array();
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
                $original_name = array_merge($original_name, array_map('trim', explode(",", $row['original_name'])));
                $photo = array_merge($photo, array_map('trim', explode(",", $row['photo'])));
                $category = array_merge($category, array_map('trim', explode(",", $row['category'])));
                $price = array_merge($price, array_map('trim', explode(",", $row['price'])));
                $previous_price = array_merge($previous_price, array_map('trim', explode(",", $row['previous_price'])));
                $time_of_adding = array_merge($time_of_adding, array_map('trim', explode(",", $row['time_of_adding'])));
                $features = array_merge($features, array_map('trim', explode(",", $row['features'])));
                $quantity = array_merge($quantity, array_map('trim', explode(",", $row['quantity'])));
                $shipping = array_merge($shipping, array_map('trim', explode(",", $row['shipping'])));
                $average_price = array_merge($product_name, array_map('trim', explode(",", $row['average_price'])));
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
        } else {
            header('Location: /');
        }
        $sql_min = "SELECT price FROM $table WHERE original_name='$original_name[0]'";

        $result_min = $mysqli->query( $sql_min );
        $min_array = array();
        if ($result_min->num_rows > 0) {
            // output data of each row
            while ($row = $result_min->fetch_assoc()) {
                $min_array = array_merge($min_array, array_map('trim', explode(",", $row['price'])));
            }
        }

        $min = min($min_array);
        $this->model->setId( $order_id );
        $this->model->setOriginalName( $original_name );
        $this->model->setPhoto( $photo );
        $this->model->setProductName( $product_name );
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

    }

    /**
     * Getting distinct products with same name
     * but different prices
     *
     * @var $id_array
     * @var $price_array
     * @var $product_name_array
     * @var $category_array
     * @var $photo_array
     *
     * @param $table
     * @param $product_name
     */
    private function actionSetDistinctProductsPrice( $table, $product_name){

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT id, product_name, category, photo, price FROM $table WHERE (product_name='$product_name' AND price != {$this->model->getPrice(0)}) ORDER BY price ASC LIMIT 3";
        $result_query = $mysqli->query( $sql_query );

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

        $this->model->setSortId( $id_array );
        $this->model->setSortPrice( $price_array );
        $this->model->setSortProductNames( $product_name_array );
        $this->model->setSortCategory( $category_array );
        $this->model->setSortPhoto( $photo_array );
    }

    /**
     * Getting Random product data
     *
     * @var $sequence_id
     * @var $sequence_original_name
     * @var $sequence_price
     * @var $sequence_previous_price
     * @var $sequence_quantity
     * @var $sequence_product_name
     *
     * @var $sequence_photo
     *
     * @var $table
     */
    private function actionSelectRandomProduct() {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
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

        $sequence_number = rand(1,4);
        $table = '';

        switch( $sequence_number ){
            case 1:
                $table = 'phones';
                break;
            case 2:
                $table = 'notebooks';
                break;
            case 3:
                $table = 'gadgets';
                break;
            case 4:
                $table = 'television';
                break;
        }

        $search_num = $sequence_number - 1;
        $query = "SELECT id, original_name, price, previous_price, quantity, photo, product_name FROM $table WHERE original_name='$product_array[$search_num]'";

        $result = $mysqli->query( $query );
        $sequence_id = array();
        $sequence_original_name = array();
        $sequence_price = array();
        $sequence_previous_price = array();
        $sequence_quantity = array();
        $sequence_photo = array();
        $sequence_product_name = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $sequence_id = array_merge($sequence_id, array_map('trim', explode(",", $row['id'])));
                $sequence_original_name = array_merge($sequence_original_name, array_map('trim', explode(",", $row['original_name'])));
                $sequence_price = array_merge($sequence_price, array_map('trim', explode(",", $row['price'])));
                $sequence_previous_price = array_merge($sequence_previous_price, array_map('trim', explode(",", $row['previous_price'])));
                $sequence_quantity = array_merge($sequence_quantity, array_map('trim', explode(",", $row['quantity'])));
                $sequence_photo = array_merge($sequence_photo, array_map('trim', explode(",", $row['photo'])));
                $sequence_product_name = array_merge($sequence_product_name, array_map('trim', explode(",", $row['product_name'])));
            }
        }


        $this->model->setSequenceId( $sequence_id[0] );
        $this->model->setSequenceOriginalName( $sequence_original_name[0] );
        $this->model->setSequencePrice( $sequence_price[0] );
        $this->model->setSequencePreviousPrice( $sequence_previous_price[0] );
        $this->model->setSequenceQuantity( $sequence_quantity[0] );
        $this->model->setSequencePhoto( $sequence_photo[0] );
        $this->model->setSequenceProductName( $sequence_product_name[0] );

        $this->model->setSequenceTable( $table );
    }

    /**
     * Making comparison between products
     * from one category ( Table )
     * LIMIT up to 4
     *
     * @var $product_name_array
     * @var $original_name_array
     * @var $photo_array
     * @var $description_array
     * @var $category_array
     * @var $price_array
     * @var $previous_price_array
     * @var $time_of_adding_array
     * @var $features_array
     * @var $id_array
     * @var $quantity_array
     * @var $shipping_array
     * @var $average_price_array
     *
     * @var $timestamp_array
     *
     * @param $table
     */
    private function actionMakeComparison( $table ) {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
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

    /**
     * Getting Associated products for Item
     *
     * @var $id_array
     * @var $name_array
     * @var $photo_array
     * @var $price_array
     * @var $previous_price_array
     * @var $shipping_array
     *
     * @param $table
     * @param $product_name
     *
     * Setting the model
     */
    private function actionGetAssocProducts( $table, $product_name ) {

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();
        $sql_query = "SELECT assoc_products FROM subdescription WHERE product_name='$product_name'";
        $result = $mysqli->query( $sql_query );

        $products_array = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $products_array = array_merge($products_array, array_map('trim', explode(",", $row['assoc_products'])));
            }
        }
        $id_array = array();
        $name_array = array();
        $photo_array = array();
        $price_array = array();
        $previous_price_array = array();
        $shipping_array = array();
        $i = 0;
        while( $i < count($products_array)){
            $sql_row = "SELECT id, photo, price, previous_price, shipping, product_name FROM $table WHERE original_name='$products_array[$i]' LIMIT 1";


            $sql_res = $mysqli->query( $sql_row );
            if ($sql_res->num_rows > 0) {
                // output data of each row
                while ($row = $sql_res->fetch_assoc()) {
                    array_push($id_array, $row['id']);
                    array_push($name_array, $row['product_name']);
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

        $this->model->setAssocTable( $table );
        $this->model->setAssocId( $id_array );
        $this->model->setAssocName( $name_array );
    }

    /**
     * Getting Questions and Answers
     * associated to the related product
     *
     * Finding any matches up.
     *
     * Any word that length bigger than 2
     *
     * @var $ask_person_array
     * @var $last_question_array
     * @var $last_answer_array
     * @var $answer_person_array
     * @var $created_array
     *
     * @param $original_name
     *
     * ! REDIRECT
     *
     */
    public function actionGetQuestionsAndAnswers( $original_name ) {

        $this->actionGetLanguage();

        include_once $_SERVER['DOCUMENT_ROOT'] . '/Storage.php';
        $db = Storage::getInstance();
        $mysqli = $db->getConnection();

        $items = explode(" ", $original_name);
        $u = 0;
        while($u < count($items)){
            if(strlen($items[$u]) < 3 || strtolower($items[$u]) == 'with'){
                unset($items[$u]);
            }
            $u++;
        }
        sort($items);

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

        $unique_result_items = array_unique($result_items);

        if(count($unique_result_items) == 0){
            $this->model->setNoItems( '1' );
            //echo '1';
        } else {
            $this->model->setNoItems( '0' );
        }

        if(count($unique_result_items) !== 0) {
            sort($unique_result_items);
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

            $count_of_result_items = count($unique_result_items);

            while ($i < $count_of_result_items) {
                $sql_query = "SELECT product, ask_person, question, answer, answer_person, unix_timestamp(created) as created FROM questions WHERE id=$unique_result_items[$i]";
                $result_query = $mysqli->query($sql_query);

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

            /*
             * items - array()
             * question - array()
             */

            $found_question_array_non = array();

            $i = 0;
            while ($i < count($question_array)) {

                $u = 0;

                $k = 0;
                while ($k < count($question_array)) {
                    $item[$k] = strtolower($question_array[$k]);

                    $k++;
                }


                while ($u < count($items)) {

                    $j = 0;
                    while ($j < count($items)) {
                        $items[$j] = strtolower($items[$j]);

                        $j++;
                    }
                    $item = str_replace("$items[$u]", "<span id='found'>$items[$u]</span>", $item, $count);

                    $s = 0;
                    while ($s < count($items)) {
                        $items_lc[$s] = ucfirst($items[$s]);

                        $s++;
                    }
                    $item = str_replace("<span id='found'>$items[$u]</span>", "<span id='found'>$items_lc[$u]</span>", $item, $count);

                    $m = 0;
                    while ($m < count($item)) {
                        $item[$m] = ucfirst($item[$m]);


                        $m++;
                    }


                    $u++;
                }

                array_push($found_question_array_non, $item);
                $i++;
            }


            $found_question_array = $found_question_array_non[0];

            $count_question_array = array();

            $i = 0;
            while ($i < count($question_array)) {
                $string = str_replace("<span id='found'>", "", $found_question_array[$i], $count);

                array_push($count_question_array, $count);

                $i++;
            }


            $found_answer_array_non = array();

            $i = 0;
            while ($i < count($answer_array)) {

                $u = 0;
                $item = $answer_array;
                while ($u < count($items)) {
                    $item = str_replace("$items[$u]", "<span id='found'>$items[$u]</span>", $item, $count);
                    $u++;
                }

                array_push($found_answer_array_non, $item);
                $i++;
            }

            $found_answer_array = $found_answer_array_non[0];

            $count_answer_array = array();

            $i = 0;
            while ($i < count($answer_array)) {
                $string = str_replace("<span id='found'>", "", $found_answer_array[$i], $count);

                array_push($count_answer_array, $count);

                $i++;
            }

            $result_q_and_a = array();

            $i = 0;
            while ($i < count($count_question_array)) {

                $result_q_and_a[$i] = $count_question_array[$i] + $count_answer_array[$i];

                $i++;
            }

            $last_question_array = array();
            $last_answer_array = array();

            $i = 0;
            $count_q_and_a = count($result_q_and_a);
            while ($i < $count_q_and_a) {
                $max = max($result_q_and_a);

                $key = array_search($max, $result_q_and_a);

                array_push($last_question_array, $found_question_array[$key]);
                array_push($last_answer_array, $found_answer_array[$key]);

                unset($result_q_and_a[$key]);

                $i++;
            }


            $this->model->setAskPerson($ask_person_array);
            $this->model->setQuestion($last_question_array);
            $this->model->setAnswer($last_answer_array);
            $this->model->setAnswerPerson($answer_person_array);
            $this->model->setAnswerTime($created_array);

            if(isset($_GET['page'])){
                if($this->model->countPages() != 0) {
                    if ($_GET['page'] > $this->model->countPages()) {
                        if (isset($_GET['q'])) {
                            if($_SESSION['language'] !== 'us'){
                                header('Location: /' . $_SESSION['language'] . '/FAQ/?q=' . $_GET['q'] . '&page=' . $this->model->countPages());
                            } else {
                                header('Location: /FAQ/?q=' . $_GET['q'] . '&page=' . $this->model->countPages());
                            }
                        }
                    } else if ($_GET['page'] < 1) {
                        if (isset($_GET['q'])) {
                            if($_SESSION['language'] !== 'us'){
                                header('Location: /' . $_SESSION['language'] . '/FAQ/?q=' . $_GET['q'] . '&page=1');
                            } else {
                                header('Location: /FAQ/?q=' . $_GET['q'] . '&page=1');
                            }
                        }
                    }
                }
            }
        }
    }
}