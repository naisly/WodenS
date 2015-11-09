<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 30.10.2015
 * Time: 19:19
 */
$category = 'Apple';

if ($category === 'All') {
    $sql_query = "SELECT * FROM phones";
} else {
    $sql_query = "SELECT * FROM phones WHERE category='$category'";
}
if (isset($_POST['array'])) {
    $array = $_POST["array"];
}
if (isset($_POST['min'])) {
    $min = $_POST["min"];
}
if (isset($_POST['max'])) {
    $max = $_POST["max"];
}

if (isset($_POST['sort_by_price'])) {
    $sort_by_price = $_POST["sort_by_price"];
}
if (isset($_POST['sort_by_time'])) {
    $sort_by_time = $_POST["sort_by_time"];
}
if (isset($_POST['sort_by_shipping'])) {
    $sort_by_shipping = $_POST["sort_by_shipping"];
}

if (isset($array) || $min !== '' || $max !== '') {
    if ( $category === 'All') {
        $sql_query .= ' WHERE';
    } else {
        $sql_query .= ' AND';
    }
}

if (isset($array)) {
    $i = 0;
    while ($i < count($array)) {
        $sql_query .= " product_name='" . $array[$i] . "' OR ";
        $i++;
    }
    /*$str_count = strlen($sql_query); */
    $sql_query = substr($sql_query, 0, -3);
    if ($min !== '' || $max !== '') {
        $sql_query .= " AND";
    }
}

if ($min === '') {}
else {
    $sql_query .= " price > " . $min . " AND";
}
if ($max === '') {}
else {
    $sql_query .= " price < " . $max . " ";
}

$order_array = array();

if(isset($sort_by_price)){
    array_push($order_array, $sort_by_price);
}
if(isset($sort_by_time)){
    array_push($order_array, $sort_by_time);
}
if(isset($sort_by_shipping)) {
    array_push($order_array, $sort_by_shipping);
}

if(isset($sort_by_price) || isset($sort_by_time) || isset($sort_by_shipping)) {
    $sql_query .= " ORDER BY ";
    if ( count($order_array) === 3) {
        $sql_query .= $order_array[0] . ", " . $order_array[1] . ", " . $order_array[2];
    }
    if ( count($order_array) === 2) {
        $sql_query .= $order_array[0] . ", " . $order_array[1];
    }
    if ( count($order_array) === 1) {
        $sql_query .= $order_array[0];
    }
}
echo $sql_query;
