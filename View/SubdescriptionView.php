<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 16:06
 */

include_once('DefaultView.php');

class SubdescriptionView extends DefaultView
{
    private $model;
    public function __construct(SubdescriptionModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getSubdescriptionPage( $category, $table ) {

        $this->DoctypeView( 'subdescription' );
        $this->headerView( 'subdescription' );

        $this->getMain( $category , $table );
        $this->getSlider();
        $this->getDescription();

        $this->getAsideAddToCart();
        $this->getAsideOtherSellers();
        $this->getAsideAlsoInterested();

        $this->getProductDetails();

        $this->actionGetComparisonTable();
        $this->getAnswers();
        $this->getQuestions();

        $this->actionGetFooter( 'subdescription' );
    }

    /**
     * @param $category
     * @param $table
     */
    private function getMain( $category, $table) {

        echo '<div class="image-margin">
                  <div class="col-md-9">
                      <div class="col-md-1"></div>
                      <div class="col-md-4">
                          <img src="/' . $this->model->getProductPhoto() . '" class="img-store" />
                      </div>
                      <div class="col-md-7">
                           <h class="main-header">' . $this->model->getOriginalName(0) . '</h><br />
                           <h class="p-header">by ' . $this->model->getCategory(0) . '</a></h>

                           <div class="divider-main"></div>

                           <h class="prev-price">List Price: <strike>$' . $this->model->getPriviousPrice(0) . '</strike></h><br />
                           <h class="price">Price: <span id="price">$' . $this->model->getPrice(0) . '</span> <span id="bold">& FREE SHIPPING</span></h><br />
                           <h class="you-save">You Save: <span id="you-save">$' . $this->model->getDifferentialBtwPrice() . ' (' . $this->model->getDifferentialPercent() . '%)</span></h>';
        if($this->model->getQuantity(0) !== 0) {
            echo      '<p class="stock">In Stock</p>';
        } else {
            echo      '<h class="no-stock">Out of Stock</h>';
        }

        echo         '<h class="sold-by" style="float: left">Sold by <a href="http://apple.com" class="link-default">Apple</a> company. Gift-wrap available</h><br />

                          <div id="spacer"></div>

                          <h class="details">Product details:</h>
                          <ul class="list-style-items-gl" style="margin-top: 35px;">';

        $i = 0;
        while ($i < $this->model->countDescription()){
            echo '<li>' . $this->model->getDescription($i) . '</li>';

            $i++;
        }

        echo         '</ul>
                          <div class="spacer">
                              <h class="quantity" style="padding-bottom: 30px;"><a style="cursor: pointer;text-decoration: none" onclick="goBack();">' . $this->model->getQuantity(0) . ' new</a> from $' . $this->model->getMinimum() . '</h>
                          </div>
                      </div>

                        <div class="divider"></div>';
    }

    private function getSlider() {

        echo '<div class="slider1" style="margin-left: 35px;">';
        $m = 0;
        while($m < $this->model->countAssocProducts()){
            echo '<div class="slide">
                          <img src="/' . $this->model->getAssocPhoto($m) . '" width="120" height="120" />
                          <div style="height: 90px;; margin-top: 10px;">
                              <h><a href="#" class="assoc-original-name">' . $this->model->getAssocProducts($m) . '</a></h><br />
                              <h id="you-save"">$' . $this->model->getAssocPrice($m) . '<span class="striked"><strike> $' . $this->model->getAssocPreviousPrice($m) . '</strike></span></h><br />
                              <h><span class="shipping-assoc"><em>' . $this->model->getAssocShipping($m) . ' days</em></span> of shipping</h><br />
                          </div>
                      </div>
                     ';

            $m++;
        }


        echo       '</div>
                    <script>
                        $(document).ready(function(){
                             $(".slider1" ).bxSlider({
                                 slideWidth: 200,
                                 minSlides: 1,
                                 maxSlides: 4,
                                 slideMargin: 30,
                                 pager: false
                             });
                        });
                    </script>
                    <div class="divider"></div>';
    }

    private function getDescription() {

        echo '<h class="tech-details">' . $this->model->getTechnicalDetails(0) . '</h>
                      <ul class="list-style-items-gl" style="margin-top: 35px; margin-left: 30px;">';

        $k = 1;
        while ($k < $this->model->countTechnicalDetails()){
            echo '<li>' . $this->model->getTechnicalDetails($k) . '</li>';

            $k++;
        }
        $y = 2;

        echo '</ul>
              <div class="divider"></div>
              <h class="tech-details">' . $this->model->getTechnicalDetails1(0) . '</h>
              <ul class="list-style-items-gl" style="margin-top: 35px; margin-left: 30px;">
              <h class="header-details" style="margin-left: -25px">' . $this->model->getTechnicalDetails1(1) . '</h>

              <div class="spacer-35"></div>';


        while ($y < $this->model->countTechnicalDetails1()){
            echo '<li>' . $this->model->getTechnicalDetails1($y) . '</li>';

            $y++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails2(0) . '</h>
              <ul class="list-style-items-gl" style="margin-top: 35px; margin-left: 30px;">';

        $i = 0;
        while ($i < $this->model->countTechnicalDetails2()){
            echo '<li>' . $this->model->getTechnicalDetails2($i) . '</li>';

            $i++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails3(0) . '</h>
              <ul class="list-style-items-gl" style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countTechnicalDetails3()){
            echo '<li>' . $this->model->getTechnicalDetails3($u) . '</li>';

            $u++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails4(0) . '</h>
              <ul class="list-style-items-gl" style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countTechnicalDetails4()){
            echo '<li>' . $this->model->getTechnicalDetails4($u) . '</li>';

            $u++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails5(0) . '</h>
              <ul class="list-style-items-gl" style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countTechnicalDetails5()){
            echo '<li>' . $this->model->getTechnicalDetails5($u) . '</li>';

            $u++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails6(0) . '</h>
              <ul class="list-style-items-gl" style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countTechnicalDetails6()){
            echo '<li>' . $this->model->getTechnicalDetails6($u) . '</li>';

            $u++;
        }
    }

    private function getAsideAddToCart() {
        echo          '</ul>
                  </div>

                  </div>
                  <div class="col-md-3">
                      <div class="social">
                          <a title="contact via VK" href="http://vk.com/naisly" class="contact">Contact </a>
                          <a href="http://vk.com/naisly"><img src="/images/vk.png" width="30" height="30" /></a>
                          <a href="https://www.facebook.com/alexandr.serduk.7"><img src="/images/facebook.png" width="30" height="30" /></a>
                          <a href="https://twitter.com/naislygg"><img src="/images/twitter.png" width="30" height="30" /></a>
                      </div>
                      <div class="aside" style="margin-top: 5px;">
                          <div class="shopping-cart">
                              <img src="/images/shopping-cart.png" />
                              <h class="buy-new">Buy new :</h>
                              <h class="price-new">$' . sprintf("%0.2f", $this->model->getPrice()) . '</h>
                          </div>
                          <div class="nova-poshta">
                              <h style="font-family: Arial;"><input type="checkbox" name="free-shipping" value="1" /> Yes, I want <em>Shipping</em> that varies from
                              <b>two weeks</b> up to <b>one month</b> with <a class="link-default" href="https://novaposhta.ua/en">Nova Poshta</a></h>
                          </div>
                      <form action="/shop/add-item" method="post">
                          <div class="qty">
                              <h id="qty">Quantity</h>
                              <select name="item_quantity" id="item_quantity" required>';
        $i = 0;
        while ( $i < $this->model->getQuantity()){
            if($i == 0){
                echo '<option value="">0</option>';
            } else {
                echo '<option value="' . $i . '">' . $i . '</option>';
            }

            $i++;
        }
        echo                   '</select>
                            </div>
                            <div class="form-group">
                                    <div class="paddings">
                                        <button class="btn btn-default form-control">
                                            Add to cart
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="' . $this->model->getId() . '"/>
                                    <input type="hidden" name="original_name" value="' . $this->model->getOriginalName() . '"/>
                                    <input type="hidden" name="product_name" value="' . $this->model->getProductName() . '"/>
                                    <input type="hidden" name="category" value="' . $this->model->getCategory() . '"/>
                                    <input type="hidden" name="photo" value="' . $this->model->getPhoto() . '"/>
                                    <input type="hidden" name="table" value="' . $_GET['category'] . '"/>
                                    <input type="hidden" name="price" value="' . $this->model->getPrice() . '"/>
                              </form>
                          </div>

                          <div class="divider"></div>

                          <div class="form-group text-center">
                              <form action="add-item" method="post">
                                    <div class="paddings">
                                        <button class="button-link">
                                            Click here to complete fast order
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="' . $this->model->getId() . '"/>
                                    <input type="hidden" name="original_name" value="' . $this->model->getOriginalName() . '"/>
                                    <input type="hidden" name="product_name" value="' . $this->model->getProductName() . '"/>
                                    <input type="hidden" name="category" value="' . $this->model->getCategory() . '"/>
                                    <input type="hidden" name="photo" value="' . $this->model->getPhoto() . '"/>
                                    <input type="hidden" name="table" value="' . $_GET['category'] . '"/>
                                    <input type="hidden" name="price" value="' . $this->model->getPrice() . '"/>
                                    <input type="hidden" name="one-click-order" value="1" />
                              </form>
                          </div>


                      </div>';
    }

    private function getAsideOtherSellers() {

        echo '<div class="aside" style="margin-top: 50px;">
                          <div class="other-sellers text-center">
                               <h>Other sellers on Amazon</h>
                          </div>';

        $i = 0;
        while ($i < $this->model->countSortPrice()) {

            echo '<div class="sellers-items">
                               <div class="pull-left">
                                    <h class="price-new" style="float: left">$' . sprintf("%0.2f", $this->model->getSortPrice($i)) . '</h><br />
                                    <p class="shipping-small" style="float: left">& FREE SHIPPING</p><br />
                                    <h><span class="sold-by">Sold by:</span> WodenS Inc.</h>
                               </div>
                               <div class="pull-right">
                                    <form action="add-item.php" method="post">
                                          <button class="btn btn-warning button-small">
                                               Add to cart
                                          </button>
                                          <input type="hidden" name="id" value="' . $this->model->getSortId($i) . '"/>
                                          <input type="hidden" name="original_name" value="' . $this->model->getOriginalName() . '"/>
                                          <input type="hidden" name="product_name" value="' . $this->model->getSortProductNames($i) . '"/>
                                          <input type="hidden" name="category" value="' . $this->model->getSortCategory($i) . '"/>
                                          <input type="hidden" name="photo" value="' . $this->model->getSortPhoto($i) . '"/>
                                          <input type="hidden" name="price" value="' . $this->model->getSortPrice($i) . '"/>
                                    </form>
                               </div>
                          </div>';

            $i++;
        }
    }

    private function getAsideAlsoInterested() {

        echo      '</div>
                   <div class="aside" style="margin-top: 50px;">
                        <div class="text-center maybe-main">
                             <h class="maybe">Maybe you are also <br />interested in ...</h>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/'. $this->model->getSequencePhoto() . '" width="85" height="86" class="random-photo" />

                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <form action="subdescription.php" method="post">
                                    <button class="random-name text-left">' . $this->model->getSequenceOriginalName() . '</button><br />
                                    <input type="hidden" name="id" value="' . $this->model->getSequenceId() . '" />
                                </form>
                                <h class="random-quantity">' . $this->model->getSequenceQuantity() . ' items</h><br />
                                <h class="random-price">$' . $this->model->getSequencePrice() . ' <span class="random-prev-price"><strike>$' . $this->model->getSequencePreviousPrice() . '</strike></span></h>
                            </div>
                        </div>
                   </div>

                  </div>
              </div>';
    }

    private function getProductDetails() {

        echo '<div class="divider"></div>
              <h class="tech-details">' . $this->model->getProductDetails(0) . '</h>
              <ul class="list-style-items-gl" style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countProductDetails()){
            echo '<li>' . $this->model->getProductDetails($u) . '</li>';

            $u++;
        }
        echo '</ul>
              <div class="divider"></div>';
    }

    private function actionGetComparisonTable() {

        echo '<h1 class="compare">Compare to similar items</h1>
              <div class="paddings-table">
              <table class="table table-bordered table-responsive">
                 <thead>
                    <tr>
                        <th style="border-top: 1px solid white; border-left: 1px solid white;"></th>';
        $i = 0;
        while($i < $this->model->countComparisonId()) {
            echo '<th style="width: 20%;">
                      <div class="text-center">
                          <img src="/' . $this->model->getComparisonPhoto( $i ) . '" width="60" height="80" />
                          <h class="name-margin">' . $this->model->getComparisonProductName($i) . '</h>
                      </div>

                  </th >';

            $i++;
        }

        echo        '</tr>
                 </thead>
                 <tbody>
                      <tr>
                          <th id="header">Full name</th>';

        $u = 0;
        while ( $u < $this->model->countComparisonId()) {
            echo '<th>
                      <div class="comparison">
                          <h class="original-name">' . $this->model->getComparisonOriginalName($u) . '</h>
                      </div>
                  </th>';

            $u++;
        }

    echo              '</tr>
                       <tr>
                            <th id="header">Price</th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th>
                  <div class="comparison">
                       <h class="cprice">$' .  sprintf("%0.2f", $this->model->getComparisonPrice($k)) . '<span id="striked">' . ' ' . '<strike>$' . $this->model->getComparisonPriviousPrice($k) . '</strike></span></h>
                  </div>
              </th>';

        $k++;
    }

    echo               '</tr>
                        <tr>
                            <th id="header">Shipping</th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th>
                  <div class="comparison">
                      <h class="shipping-comparison">FREE SHIPPING ( <span id="emph"><em>' . $this->model->getComparisonShipping($k) . ' days</em></span> )</h>
                  </div>
              </th>';

        $k++;
    }

    echo               '</tr>
                        <tr>
                            <th id="header">Sold by</th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th>
                  <div class="comparison">
                      <h class="shipping-comparison"><a href="http://vk.com/naisly" style="text-decoration: none">Woden S</a></h>
                  </div>
              </th>';

        $k++;
    }

    echo               '</tr>
                        <tr>
                            <th id="header">Short description</th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th>
                  <div class="comparison">
                      <h class="shipping-comparison">' . $this->model->getComparisonDescription($k) . '</h>
                  </div>
              </th>';

        $k++;
    }

    echo               '</tr>
                        <tr>
                            <th id="header">Manufacturer</th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th>
                  <div class="comparison">
                      <h class="shipping-comparison">by <a style="text-decoration: none" href="http://' . $this->model->getComparisonCategory($k) . '.com">' . $this->model->getComparisonCategory($k) . '</a></h>
                  </div>
              </th>';

        $k++;
    }

    echo               '</tr>
                        <tr>
                            <th id="header">Average price for this item:</th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th>
                  <div class="comparison">
                      <h class="cprice">$' . $this->model->getComparisonAverage($k) . '</h>
                  </div>
              </th>';

        $k++;
    }

    echo               '</tr>
                        <tr>
                            <th id="header">Product features</th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th>
                  <div class="comparison">
                      <h class="shipping-comparison">' . $this->model->getComparisonFeatures($k) . '</h>
                  </div>
              </th>';

        $k++;
    }

    echo               '</tr>
                        <tr>
                            <th id="header">Product Site Launch Date</th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th>
                  <div class="comparison">
                      <h class="shipping-comparison">' . $this->model->getComparisonTimeOfAdding($k) . '</h>
                  </div>
              </th>';

        $k++;
    }

    echo               '</tr>
                        <tr>
                            <th style="border-bottom: 1px solid white; border-left: 1px solid white; border-right: 1px solid white;"></th>';

    $k = 0;
    while ( $k < $this->model->countComparisonId()) {

        echo '<th style="border-bottom: 1px solid white; border-left: 1px solid white; border-right: 1px solid white;">
                  <div class="comparison">
                      <form action="add-item.php" method="post">
                          <button class="btn btn-warning color-black">Add to cart</button>
                          <input type="hidden" name="id" value="' . $this->model->getComparisonId( $k ) . '"/>
                          <input type="hidden" name="product_name" value="' . $this->model->getComparisonProductName( $k ) . '"/>
                          <input type="hidden" name="category" value="' . $this->model->getComparisonCategory( $k ) . '"/>
                          <input type="hidden" name="photo" value="' . $this->model->getComparisonPhoto( $k ) . '"/>
                          <input type="hidden" name="price" value="' . $this->model->getComparisonPrice( $k ) . '"/>
                      </form>
                  </div>
              </th>';

        $k++;
    }


    echo               '</tr>
                 </tbody>
              </table>
              </div>
              <div class="divider"></div>';
    }

    public function getAnswers()
    {

        echo '<form action="/FAQ/?" method="get">
                 <div class="container-fluid">
                      <div class="row">
                          <div class="col-lg-8">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                                <input type="text" class="form-control" placeholder="Have a question? Search for answers" id="q" name="q">
                            </div>
                          </div><!-- /.col-lg-6 -->
                      </div><!-- /.row -->

               </form>';

        if($this->model->getNoItems() !== '0' && $this->model->getNoItems() !== '1') {
            $this->getPopularRequets();
        }
    }

    public function getQuestions() {

        if($this->model->getNoItems() == '0') {
            $i = 0;
            while ($i < $this->model->countAskPerson()) {

                echo '<div class="row" style="margin-top: 60px;">
                      <div class="col-md-1" id="test">
                          <h class="question">Question:</h><br />
                          <h class="answer">Answer:</h>
                      </div>
                      <div class="col-md-4">
                               <h class="answer"><span id="question">' . $this->model->getQuestion($i) . '</span></h><br /></h>
                               <h class="answer"><span id="answer">' . $this->model->getAnswer($i) . '</span></h><br />
                               <h class="by-answer">By ' . $this->model->getAnswerPerson($i) . ' on ' . $this->model->getAnswerTime($i) . '</h>
                          </div>
                 </div>';

                $i++;
            }
        }

        //echo $this->model->getNoItems();
        if($this->model->getNoItems() == '1'){

            echo '<div class="row" style="margin-top: 10px; margin-left: 20px;">
                      <div class="col-md-5">
                          <h1 class="no-q-a">No Questions & Answers Found</h1>';

            $this->getPopularRequets();

            echo      '</div>
                  </div>';
        }

        echo '</div>
              <script>
                function goBack() {
                    window.history.back();
                }
              </script>';
    }

    private function getPopularRequets(){

        echo '<h1 class="popular">Most popular requests</h1>
                   <ul class="popular-nav">
                          <li class="p-links"><a href="/FAQ/?q=Does this will work in Ukraine?">Does this will work in Ukraine?</a></li>
                          <li class="p-links"><a href="/FAQ/?q=Can i use this Phone in Trinidad & Tobago">Can i use this Phone in Trinidad & Tobago</a></li>
                          <li class="p-links"><a href="/FAQ/?q=Will this phone work in Israel ? With an Israeli carrier">Will this phone work in Israel ? With an Israeli carrier</a></li>
                          <li class="p-links"><a href="/FAQ/?q=Can I use this phone in Russia?">Can I use this phone in Russia?</a></li>
                   </ul>';
    }
}