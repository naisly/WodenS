<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.10.2015
 * Time: 21:58
 * ==================
 * Getters and Setters
 * ==================
 */
class DefaultModel
{
    public $product_name;
    public $original_name;
    public $photo;
    public $description;
    public $category;
    public $price;
    public $previous_price;
    public $time_of_adding;
    public $features;
    public $id;
    public $quantity;
    public $shipping;
    public $distinct_categories;

    public $average;
    public $distinct_product_names;
    public $APrice;
    public $AItems;

    public $array;
    public $quantity_of_items;
    public $breadcrumbs;
    public $breadcrumbs_link;

    private $language;
    private $current_language;
    private $current_country;
    private $name_of_countries_array;
    private $name_of_languages_array;

    private $session_auth;
    private $count_results;



    public function setProductName ( $product_name ) {

        $this->product_name = $product_name;

    }

    public function getProductName($i) {

        return $this->product_name[$i];

    }

    public function setPhoto( $photo ) {

        $this->photo = $photo;
    }

    public function setOriginalName( $original_name ) {

        $this->original_name = $original_name;
    }

    public function getOriginalName( $i ) {

        return $this->original_name[$i];
    }

    public function getPhoto($i) {

        return $this->photo[$i];
    }

    public function setDescription( $description ) {

        $this->description = $description;
    }

    public function getDescription($i) {

        return $this->description[$i];
    }

    public function setCategory( $category ) {

        $this->category = $category;
    }

    public function getCategory($i) {

        return $this->category[$i];
    }

    public function setPrice( $price ) {

        $this->price = $price;
    }

    public function getPrice($i) {

        return $this->price[$i];
    }

    public function setPreviousPrice( $previous_price ){

        $this->previous_price = $previous_price;
    }

    public function getPriviousPrice($i) {

        return $this->previous_price[$i];
    }

    public function setTimeOfAdding( $time_of_adding) {

        $this->time_of_adding = $time_of_adding;
    }

    public function getTimeOfAdding($i) {

        return $this->time_of_adding[$i];
    }

    public function setFeatures( $features ) {

        $this->features = $features;
    }

    public function getFeatures($i) {

        return $this->features[$i];
    }

    public function setId ( $id ) {

        $this->id = $id;
    }

    public function getId($i) {

        return $this->id[$i];
    }

    public function setQuantity( $quantity ){

        $this->quantity = $quantity;
    }

    public function getQuantity($i) {

        return $this->quantity[$i];
    }

    public function setShipping( $shipping ) {

        $this->shipping = $shipping;
    }

    public function getShipping($i) {

        return $this->shipping[$i];
    }

    public function setAverage( $average ) {

        $this->average = $average;
    }

    public function getAverage($i) {

        return $this->average[$i];
    }

    public function setDistinctCategories( $distinct_categories ) {

        $this->distinct_categories = $distinct_categories;
    }

    public function getDistinctCategories() {

        return $this->distinct_categories;
    }

    public function setDistinctProductNames ( $distinct_product_names ){

        $this->distinct_product_names = $distinct_product_names;
    }

    public function getDistinctProductNames($i) {

        return $this->distinct_product_names[$i];
    }

    public function countDistinctProductNames() {

        return count($this->distinct_product_names);
    }

    public function setProductNamesForShow( $array ){

        $this->array = $array;
    }

    public function getProductNamesForShow() {

        return $this->array;
    }

    public function setProductsForShow( $array ){

        $this->array = $array;
    }

    public function getProductsForShow() {

        echo $this->array;
    }

    public function setAPrice ( $APrice ){

        $this->APrice = $APrice;
    }

    public function getAPrice() {

        return $this->APrice;
    }

    public function setAItems( $AItems ) {

        $this->AItems = $AItems;
    }

    public function getAItems() {

        return $this->AItems;
    }

    public function setQuantityOfItems( $quantity_of_items ){

        $this->quantity_of_items = $quantity_of_items;
    }

    public function getQuantityOfItems( $i ) {

        return $this->quantity_of_items[$i];
    }

    public function setCountOfItems() {

        return count($this->quantity_of_items);
    }

    public function setBreadcrumbs( $breadcrumbs ){

        $this->breadcrumbs = $breadcrumbs;
    }

    public function getBreadcrumbs( $i ) {

        return $this->breadcrumbs[$i];
    }

    public function setBreadcrumbsLink( $breadcrumbs_link ){

        $this->breadcrumbs_link = $breadcrumbs_link;
    }

    public function getBreadcrumbsLink( $i ){

        return $this->breadcrumbs_link[$i];
    }

    public function countBreadcrumbs() {

        return count($this->breadcrumbs);
    }

    public function setLanguage( $language ){

        header("Content-Type: text/html; charset=utf-8");
        $this->language = $language;
    }

    public function Translate( $text ){

        if($_SESSION['language'] !== 'us') {
            return $this->language[$text];
        } else {
            return $text;
        }

    }

    /*
     * private $current_language;
       private $current_country;
       private $name_of_countries_array;
       private $name_of_languages_array;
     */

    public function setCurrentLanguage( $current_language ){

        $this->current_language = $current_language;
    }

    public function getCurrentLanguage() {

        return $this->current_language;
    }

    public function setCurrentCountry( $current_country ){

        $this->current_country = $current_country;
    }

    public function getCurrentCountry() {

        return $this->current_country;
    }

    public function setNameOfCountries( $name_of_countries_array ){

        $this->name_of_countries_array = $name_of_countries_array;
    }

    public function getNameOfCountries( $i ){

        return $this->name_of_countries_array[$i];
    }

    public function setNameOfLanguages( $name_of_languages_array ){

        $this->name_of_languages_array = $name_of_languages_array;
    }

    public function getNameOfLanguages( $i ){

        return $this->name_of_languages_array[$i];
    }

    public function countNameOfLanguages() {

        return count($this->name_of_languages_array);
    }

    public function setSessionAuth( $session_auth ) {

        $this->session_auth = $session_auth;
    }

    public function getSessionAuth() {

        return $this->session_auth;
    }

    public function setCountResults( $count_results ) {

        $this->count_results = $count_results;
    }

    public function getCountResults() {

        return $this->count_results;
    }

    public function getCountPages() {

        return ceil($this->getCountResults() / 13);
    }

    public function countId() {

        return count($this->id);
    }

    public function getPages() {

        return ceil(count($this->id) / 13);
    }
}