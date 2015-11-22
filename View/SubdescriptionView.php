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
        echo '<div class="container image-margin">
                  <div class="col-md-4">
                      <img src="' . $this->model->getProductPhoto() . '" width="230" height="550" />
                  </div>
                  <div class="col-md-6">
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
                          <h class="quantity"><a style="text-decoration: none" href="' . $category . "-" . $table . ".php" . '">' . $this->model->getQuantity() . ' new</a> from $' . $this->model->getMinimum() . '</h>

                      </div>

                  </div>
                  <div class="col-md-2"></div>
              </div>';

        echo '<div class="divider"></div>
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

        echo '</ul>
              <div class="divider"></div>
              <h class="tech-details">' . $this->model->getProductDetails(0) . '</h>
              <ul style="margin-top: 35px; margin-left: 30px;">';

        $u = 1;
        while ($u < $this->model->countProductDetails()){
            echo '<li>' . $this->model->getProductDetails($u) . '</li>';

            $u++;
        }
        echo '</ul>';

    }
}