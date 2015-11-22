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

                       <div class="divider"></div>

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

                          <div class="divider"></div>
                      </div>

                      </div>';
    }
}