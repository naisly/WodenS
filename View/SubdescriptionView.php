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

    public function MainView( $category, $table ) {

        $this->model->setDifferentialBtwPrice();
        echo '<div class="image-margin">
                  <div class="col-md-9">
                      <div class="col-md-1"></div>
                      <div class="col-md-4">
                          <img src="' . $this->model->getProductPhoto() . '" width="230" height="550" />
                      </div>
                      <div class="col-md-7">
                           <h class="main-header">' . $this->model->getOriginalName() . '</h><br />
                           <h class="p-header">by <a style="text-decoration: none" href="' . $category . "-" . $table . ".php" . '">' . $this->model->getCategory() . '</a></h>

                           <div class="divider-main"></div>

                           <h class="prev-price">List Price: <strike>$' . $this->model->getPriviousPrice() . '</strike></h><br />
                           <h class="price">Price: <span id="price">$' . $this->model->getPrice() . '</span> <span id="bold">& FREE SHIPPING</span></h><br />
                           <h class="you-save">You Save: <span id="you-save">$' . $this->model->getDifferentialBtwPrice() . ' (' . $this->model->getDifferentialPercent() . '%)</span></h>';
            if($this->model->getQuantity() !== 0) {
                echo      '<p class="stock">In Stock</p>';
            } else {
                echo      '<h class="no-stock">Out of Stock</h>';
            }

            echo         '<h class="sold-by" style="float: left">Sold by <a href="apple.com" style="text-decoration: none">Apple</a> company. Gift-wrap available</h><br />

                          <div id="spacer"></div>

                          <h class="details">Product details:</h>
                          <ul style="margin-top: 35px;">';

            $i = 0;
            while ($i < $this->model->countDescription()){
                echo '<li>' . $this->model->getDescription($i) . '</li>';

                $i++;
            }

            echo         '</ul>
                          <div class="spacer">
                              <h class="quantity" style="padding-bottom: 30px;"><a style="text-decoration: none" href="' . $category . "-" . $table . ".php" . '">' . $this->model->getQuantity() . ' new</a> from $' . $this->model->getMinimum() . '</h>
                          </div>
                      </div>

                        <div class="divider"></div>
              <h class="tech-details">' . $this->model->getTechnicalDetails(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">';

                $k = 1;
                while ($k < $this->model->countTechnicalDetails()){
                    echo '<li>' . $this->model->getTechnicalDetails($k) . '</li>';

                    $k++;
                }
        $y = 2;

        echo '</ul>
              <div class="divider"></div>
              <h class="tech-details">' . $this->model->getTechnicalDetails1(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">
              <h class="header-details" style="margin-left: -25px">' . $this->model->getTechnicalDetails1(1) . '</h>

              <div class="spacer-35"></div>';


        while ($y < $this->model->countTechnicalDetails1()){
            echo '<li>' . $this->model->getTechnicalDetails1($y) . '</li>';

            $y++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails2(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">';

        while ($i < $this->model->countTechnicalDetails2()){
            echo '<li>' . $this->model->getTechnicalDetails2($i) . '</li>';

            $i++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails3(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countTechnicalDetails3()){
            echo '<li>' . $this->model->getTechnicalDetails3($u) . '</li>';

            $u++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails4(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countTechnicalDetails4()){
            echo '<li>' . $this->model->getTechnicalDetails4($u) . '</li>';

            $u++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails5(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countTechnicalDetails5()){
            echo '<li>' . $this->model->getTechnicalDetails5($u) . '</li>';

            $u++;
        }

        echo '</ul>
              <h class="header-details">' . $this->model->getTechnicalDetails6(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countTechnicalDetails6()){
            echo '<li>' . $this->model->getTechnicalDetails6($u) . '</li>';

            $u++;
        }

        echo          '</ul>
                  </div>

                  </div>
                  <div class="col-md-3">
                      <div class="social">
                          <a title="contact via VK" href="http://vk.com/naisly" class="contact">Contact </a>
                          <a href="http://vk.com/naisly"><img src="images/vk.png" width="30" height="30" /></a>
                          <a href="https://www.facebook.com/alexandr.serduk.7"><img src="images/facebook.png" width="30" height="30" /></a>
                          <a href="https://twitter.com/naislygg"><img src="images/twitter.png" width="30" height="30" /></a>
                      </div>
                      <div class="aside">
                          <div class="shopping-cart">
                              <img src="images/shopping-cart.png" />
                              <h class="buy-new">Buy new :</h>
                              <h class="price-new">$' . sprintf("%0.2f", $this->model->getPrice()) . '</h>
                          </div>
                          <div class="nova-poshta">
                              <h><input type="checkbox" name="free-shipping" value="1" /> Yes, I want <em>FREE shipping</em> that varies from
                              <b>two weeks</b> up to <b>one month</b> with <a href="https://novaposhta.ua/en">Nova Poshta</a></h>
                          </div>

                          <div class="qty">
                              <h id="qty">Quantity</h>
                              <select name="quantity">';
        $i = 0;
        while ( $i < $this->model->getQuantity()){
            echo                  '<option value="' . $i . '">' . $i . '</option>';

            $i++;
        }
        echo                  '</select>
                          </div>
                          <div class="form-group">
                              <form action="add-item.php" method="post">
                                    <div class="paddings">
                                        <button class="btn btn-default form-control">
                                            Add to cart
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="' . $this->model->getId() . '"/>
                                    <input type="hidden" name="product_name" value="' . $this->model->getProductName() . '"/>
                                    <input type="hidden" name="category" value="' . $this->model->getCategory() . '"/>
                                    <input type="hidden" name="photo" value="' . $this->model->getPhoto() . '"/>
                                    <input type="hidden" name="price" value="' . $this->model->getPrice() . '"/>
                              </form>
                          </div>

                          <div class="divider"></div>

                          <div class="form-group text-center">
                              <form action="add-item.php" method="post">
                                    <div class="paddings">
                                        <button class="button-link">
                                            Click here to complete fast order
                                        </button>
                                    </div>
                                    <input type="hidden" name="id" value="' . $this->model->getId() . '"/>
                                    <input type="hidden" name="product_name" value="' . $this->model->getProductName() . '"/>
                                    <input type="hidden" name="category" value="' . $this->model->getCategory() . '"/>
                                    <input type="hidden" name="photo" value="' . $this->model->getPhoto() . '"/>
                                    <input type="hidden" name="price" value="' . $this->model->getPrice() . '"/>
                                    <input type="hidden" name="one-click-order" value="1" />
                              </form>
                          </div>


                      </div>
                      <div class="aside" style="margin-top: 50px;">
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
                                          <input type="hidden" name="product_name" value="' . $this->model->getSortProductNames($i) . '"/>
                                          <input type="hidden" name="category" value="' . $this->model->getSortCategory($i) . '"/>
                                          <input type="hidden" name="photo" value="' . $this->model->getSortPhoto($i) . '"/>
                                          <input type="hidden" name="price" value="' . $this->model->getSortPrice($i) . '"/>
                                    </form>
                               </div>
                          </div>';

            $i++;
        }


        echo      '</div>


                  </div>
              </div>';

        echo '<div class="divider"></div>
              <h class="tech-details">' . $this->model->getProductDetails(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countProductDetails()){
            echo '<li>' . $this->model->getProductDetails($u) . '</li>';

            $u++;
        }
        echo '</ul>';

        /*
         * <form action="add-item.php" method="post">
                                                <button class="btn btn-warning button-small" style="margin-left: 64%; margin-top: -40px;">
                                                    Add to cart
                                                </button>
                                            <input type="hidden" name="id" value="' . $this->model->getId() . '"/>
                                            <input type="hidden" name="product_name" value="' . $this->model->getProductName() . '"/>
                                            <input type="hidden" name="category" value="' . $this->model->getCategory() . '"/>
                                            <input type="hidden" name="photo" value="' . $this->model->getPhoto() . '"/>
                                            <input type="hidden" name="price" value="' . $this->model->getPrice() . '"/>
                          </form>
         */
    }
}