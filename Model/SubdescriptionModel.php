<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 16:06
 */

include_once('DefaultModel.php');

class SubdescriptionModel extends DefaultModel
{

    public $assoc_products;
    public $technical_details;
    public $technical_details1;
    public $technical_details2;
    public $technical_details3;
    public $technical_details4;
    public $technical_details5;
    public $technical_details6;
    public $product_details;
    public $product_photo;

    public $differential_price;
    public $min;

    private $sort_id;
    private $sort_price;
    private $sort_product_names;
    private $sort_category;
    private $sort_photo;

    private $sequence_id;
    private $sequence_original_name;
    private $sequence_price;
    private $sequence_previous_price;
    private $sequence_quantity;
    private $sequence_photo;

    private $comparison_id;
    private $comparison_product_name;
    private $comparison_original_name;
    private $comparison_photo;
    private $comparison_description;
    private $comparison_category;
    private $comparison_price;
    private $comparison_previous_price;
    private $comparison_time_of_adding;
    private $comparison_features;
    private $comparison_quantity;
    private $comparison_shipping;
    private $comparison_average;

    private $assoc_photo;
    private $assoc_price;
    private $assoc_previous_price;
    private $assoc_shipping;
    private $differential_assoc_price;

    private $ask_person;
    private $question;
    private $answer;
    private $answer_person;
    private $answer_time;

    private $date;


    public function setProductName ( $product_name ) {

        $this->product_name = $product_name;

    }

    public function getProductName() {

        return $this->product_name[0];

    }

    public function setPhoto( $photo ) {

        $this->photo = $photo;
    }

    public function getPhoto() {

        return $this->photo;
    }

    public function setOriginalName( $original_name ) {

        $this->original_name = $original_name;
    }

    public function getOriginalName() {

        return $this->original_name;
    }

    public function setDescription( $description ) {

        $this->description = $description;
    }

    public function getDescription( $i ) {

        return $this->description[$i];
    }

    public function countDescription() {

        return count($this->description);
    }

    public function setCategory( $category ) {

        $this->category = $category;
    }

    public function getCategory() {

        return $this->category;
    }

    public function setPrice( $price ) {

        $this->price = $price;
    }

    public function getPrice() {

        return $this->price;
    }

    public function setPreviousPrice( $previous_price ){

        $this->previous_price = $previous_price;
    }

    public function getPriviousPrice() {

        return $this->previous_price;
    }

    public function setTimeOfAdding( $time_of_adding) {

        $this->time_of_adding = $time_of_adding;
    }

    public function getTimeOfAdding() {

        return $this->time_of_adding;
    }

    public function setFeatures( $features ) {

        $this->features = $features;
    }

    public function getFeatures() {

        return $this->features;
    }

    public function setId ( $id ) {

        $this->id = $id;
    }

    public function getId() {

        return $this->id[0];
    }

    public function setQuantity( $quantity ){

        $this->quantity = $quantity;
    }

    public function getQuantity() {

        return $this->quantity;
    }

    public function setShipping( $shipping ) {

        $this->shipping = $shipping;
    }

    public function getShipping() {

        return $this->shipping;
    }

    public function setAssocProducts( $assoc_products ){

        $this->assoc_products = $assoc_products;
    }

    public function getAssocProducts( $i ) {

        return $this->assoc_products[$i];
    }

    public function countAssocProducts() {

        return count($this->assoc_products);
    }

    public function setTechnicalDetails( $technical_details ){

        $this->technical_details = $technical_details;
    }

    public function getTechnicalDetails( $i ) {

        return $this->technical_details[$i];
    }

    public function countTechnicalDetails() {

        return count($this->technical_details);
    }

    public function setTechnicalDetails1( $technical_details1 ){

        $this->technical_details1 = $technical_details1;
    }

    public function getTechnicalDetails1( $i ) {

        return $this->technical_details1[$i];
    }

    public function countTechnicalDetails1() {

        return count($this->technical_details1);
    }

    public function setTechnicalDetails2( $technical_details2 ){

        $this->technical_details2 = $technical_details2;
    }

    public function getTechnicalDetails2( $i ) {

        return $this->technical_details2[$i];
    }

    public function countTechnicalDetails2() {

        return count($this->technical_details2);
    }

    public function setTechnicalDetails3( $technical_details3 ){

        $this->technical_details3 = $technical_details3;
    }

    public function getTechnicalDetails3( $i ) {

        return $this->technical_details3[$i];
    }

    public function countTechnicalDetails3() {

        return count($this->technical_details3);
    }

    public function setTechnicalDetails4( $technical_details4 ){

        $this->technical_details4 = $technical_details4;
    }

    public function getTechnicalDetails4( $i ) {

        return $this->technical_details4[$i];
    }

    public function countTechnicalDetails4() {

        return count($this->technical_details4);
    }

    public function setTechnicalDetails5( $technical_details5 ){

        $this->technical_details5 = $technical_details5;
    }

    public function getTechnicalDetails5( $i ) {

        return $this->technical_details5[$i];
    }

    public function countTechnicalDetails5() {

        return count($this->technical_details5);
    }

    public function setTechnicalDetails6( $technical_details6 ){

        $this->technical_details6 = $technical_details6;
    }

    public function getTechnicalDetails6( $i ) {

        return $this->technical_details6[$i];
    }

    public function countTechnicalDetails6() {

        return count($this->technical_details6);
    }

    public function setProductDetails( $product_details ){

        $this->product_details = $product_details;
    }

    public function getProductDetails( $i ) {

        return $this->product_details[$i];
    }

    public function countProductDetails() {

        return count($this->product_details);
    }

    public function setProductPhoto( $product_photo ){

        $this->product_photo = $product_photo;
    }

    public function getProductPhoto() {

        return $this->product_photo[0];
    }

    private function setDifferentialBtwPrice() {

        $this->differential_price = $this->getPriviousPrice() - $this->getPrice();
    }

    public function getDifferentialBtwPrice() {

        $this->setDifferentialBtwPrice();
        return $this->differential_price;
    }

    public function getDifferentialPercent() {

        return intval((($this->previous_price * 100) / $this->price) - 100);
    }

    public function setMinimum( $min ){

        $this->min = $min;
    }

    public function getMinimum() {

        return $this->min;
    }

    /*
     * For the random 3 items in subDescriprtion page
     */
    public function setSortId( $sort_id ){

        $this->sort_id = $sort_id;
    }

    public function getSortId( $i ){

        return $this->sort_id[$i];
    }

    public function setSortPrice( $sort_price ){

        $this->sort_price = $sort_price;
    }

    public function getSortPrice( $i ) {

        return $this->sort_price[$i];
    }

    public function countSortPrice() {

        return count($this->sort_price);
    }

    public function setSortProductNames( $sort_product_names ){

        $this->sort_product_names = $sort_product_names;
    }

    public function getSortProductNames( $i ){

        return $this->sort_product_names[$i];
    }

    public function setSortCategory( $sort_category ){

        $this->sort_category = $sort_category;
    }

    public function getSortCategory( $i ){

        return $this->sort_category[$i];
    }

    public function setSortPhoto( $sort_photo ){

        $this->sort_photo = $sort_photo;
    }

    public function getSortPhoto( $i ){

        return $this->sort_photo[$i];
    }

    public function setSequenceId ( $sequence_id ) {

        $this->sequence_id = $sequence_id;
    }

    public function getSequenceId() {

        return $this->sequence_id;
    }

    public function setSequenceOriginalName ( $sequence_original_name ) {

        $this->sequence_original_name = $sequence_original_name;
    }

    public function getSequenceOriginalName() {

        return $this->sequence_original_name;
    }

    public function setSequencePrice ( $sequence_price ) {

        $this->sequence_price = $sequence_price;
    }

    public function getSequencePrice() {

        return $this->sequence_price;
    }

    public function setSequencePreviousPrice ( $sequence_previous_price ){

        $this->sequence_previous_price = $sequence_previous_price;
    }

    public function getSequencePreviousPrice() {

        return $this->sequence_previous_price;
    }

    public function setSequenceQuantity ( $sequence_quantity ) {

        $this->sequence_quantity = $sequence_quantity;
    }

    public function getSequenceQuantity() {

        return $this->sequence_quantity;
    }

    public function setSequencePhoto( $sequence_photo ) {

        $this->sequence_photo = $sequence_photo;
    }

    public function getSequencePhoto() {

        return $this->sequence_photo;
    }

    /*
     * Comparison
     */

    public function setComparisonProductName ( $comparison_product_name ) {

        $this->comparison_product_name = $comparison_product_name;

    }

    public function getComparisonProductName($i) {

        return $this->comparison_product_name[$i];

    }

    public function setComparisonPhoto( $comparison_photo ) {

        $this->comparison_photo = $comparison_photo;
    }

    public function setComparisonOriginalName( $comparison_original_name ) {

        $this->comparison_original_name = $comparison_original_name;
    }

    public function getComparisonOriginalName( $i ) {

        return $this->comparison_original_name[$i];
    }

    public function getComparisonPhoto($i) {

        return $this->comparison_photo[$i];
    }

    public function setComparisonDescription( $comparison_description ) {

        $this->comparison_description = $comparison_description;
    }

    public function getComparisonDescription($i) {

        return $this->comparison_description[$i];
    }

    public function setComparisonCategory( $comparison_category ) {

        $this->comparison_category = $comparison_category;
    }

    public function getComparisonCategory($i) {

        return $this->comparison_category[$i];
    }

    public function setComparisonPrice( $comparison_price ) {

        $this->comparison_price = $comparison_price;
    }

    public function getComparisonPrice($i) {

        return $this->comparison_price[$i];
    }

    public function setComparisonPreviousPrice( $comparison_previous_price ){

        $this->comparison_previous_price = $comparison_previous_price;
    }

    public function getComparisonPriviousPrice($i) {

        return $this->comparison_previous_price[$i];
    }

    public function setComparisonTimeOfAdding( $comparison_time_of_adding) {

        $this->comparison_time_of_adding = $comparison_time_of_adding;
    }

    public function getComparisonTimeOfAdding($i) {

        return gmdate('D M m H:i:s Y', $this->comparison_time_of_adding[$i]);
    }

    public function setComparisonFeatures( $comparison_features ) {

        $this->comparison_features = $comparison_features;
    }

    public function getComparisonFeatures($i) {

        return $this->comparison_features[$i];
    }

    public function setComparisonId ( $comparison_id ) {

        $this->comparison_id = $comparison_id;
    }

    public function getComparisonId ($i) {

        return $this->comparison_id[$i];
    }

    public function countComparisonId() {

        return count($this->comparison_id);
    }

    public function setComparisonQuantity( $comparison_quantity ){

        $this->comparison_quantity = $comparison_quantity;
    }

    public function getComparisonQuantity($i) {

        return $this->comparison_quantity[$i];
    }

    public function setComparisonShipping( $comparison_shipping ) {

        $this->comparison_shipping = $comparison_shipping;
    }

    public function getComparisonShipping($i) {

        return $this->comparison_shipping[$i];
    }

    public function setComparisonAverage( $comparison_average ) {

        $this->comparison_average = $comparison_average;
    }

    public function getComparisonAverage($i) {

        return $this->comparison_average[$i];
    }

    public function setAssocPhoto( $assoc_photo ) {

        $this->assoc_photo = $assoc_photo;
    }

    public function getAssocPhoto( $i ) {

        return $this->assoc_photo[$i];
    }

    public function setAssocPrice( $assoc_price ) {

        $this->assoc_price = $assoc_price;
    }

    public function getAssocPrice( $i ) {

        return $this->assoc_price[$i];
    }

    public function setAssocPreviousPrice( $assoc_previous_price ) {

        $this->assoc_previous_price = $assoc_previous_price;
    }

    public function getAssocPreviousPrice( $i ) {

        return $this->assoc_previous_price[$i];
    }

    public function setAssocShipping( $assoc_shipping ) {

        $this->assoc_shipping = $assoc_shipping;
    }

    public function getAssocShipping( $i ) {

        return $this->assoc_shipping[$i];
    }

    private function setAssocDifferentialPrice( $i ) {

        $this->differential_assoc_price = $this->getAssocPreviousPrice($i) - $this->getAssocPrice($i);
    }

    public function getAssocDifferentialPrice( $i ) {

        $this->setAssocDifferentialPrice($i);
        return $this->differential_assoc_price;
    }

    public function setAskPerson( $ask_person ) {

        $this->ask_person = $ask_person;
    }

    public function getAskPerson( $i ) {

        return $this->ask_person[$i];
    }

    public function countAskPerson() {

        return count($this->ask_person);
    }

    public function setQuestion( $question ) {

        $this->question = $question;
    }

    public function getQuestion( $i ) {

        return $this->question[$i];
    }

    public function setAnswer( $answer ) {

        $this->answer = $answer;
    }

    public function getAnswer( $i ) {

        return $this->answer[$i];
    }

    public function setAnswerPerson( $answer_person ) {

        $this->answer_person = $answer_person;
    }

    public function getAnswerPerson( $i ) {

        return $this->answer_person[$i];
    }

    public function setAnswerTime( $answer_time ) {

        $this->answer_time = $answer_time;
    }

    public function getAnswerTime( $i ) {

        $this->date = new DateTime();
        $this->date->setTimestamp( $this->answer_time[$i]);
        return $this->date->format("F d, Y");
    }
}