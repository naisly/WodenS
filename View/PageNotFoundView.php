<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 24.12.2015
 * Time: 23:35
 */

include_once('View/DefaultView.php');

class PageNotFoundView extends DefaultView
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @private $model
     */
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getNotFoundPage() {

        $this->DoctypeView( 'Page Not Found' );
        $this->headerView( 'Page Not Found' );
        $this->getMainHeader();
        $this->actionGetFooter( 'Page Not Found' );
    }

    private function getMainHeader() {

        echo '<div class="overlay-main">';
        echo '<div class="container text-center">
                  <div class="row" style="margin-top: 15%; padding-bottom: 10%;">
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                          <h class="not-found-h">The page that you are looking can not be found</h>

                          <div style="margin-top: 3%;">
                              <h class="search-for-choice">Search items for your choice</h>
                          </div>
                      </div>
                      <div class="col-md-3"></div>
                  </div>
              </div>';

        echo      '<div class="container-fluid">
                      <div class="row">
                          <div class="col-md-6 no-division-for-category">
                              <a href="/shop/phones/"><img src="/shop/images/phones-category-w-text.png" class="full-image-cascade border-left" /></a>

                              <a href="/shop/devices/"><img src="/shop/images/ipad-category-w-text.jpg" class="full-image-cascade border-top" /></a>
                          </div>
                          <div class="col-md-6 no-division-for-category">
                              <a href="/shop/laptops/"><img src="/shop/images/laptops-category-w-text.jpg" class="full-image-cascade border-right" /></a>

                              <a href="/shop/tv/"><img src="/shop/images/tv-category.jpg" class="full-image-cascade border-bottom" /></a>
                          </div>
                      </div>
                  </div>
              </div>';
    }
}