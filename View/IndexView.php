<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 11:57
 */

include_once('DefaultView.php');

class IndexView extends DefaultView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getIndexPage() {

        $this->DoctypeView( 'Index' );
        $this->headerView( 'index' );
        $this->getSlider();
        $this->getColumns();
        $this->getSliderScript();
        $this->actionGetFooter( 'Index' );
        $this->endHTML();
    }

    private function getSlider() {

        echo '<div class="overlay-main-page">
                  <div id="slider" style="margin-top: -44px;">
                      <ul class="bxslider">
                          <li><a href="/shop/phones/"><img src="images/laptops-main-page.jpg" class="full-image-main-content"></a></li>
                          <li><a href="/shop/television/"><img src="images/tv-main-page.jpg" class="full-image-main-content"></a></li>
                          <li><a href="/shop/laptops/"><img src="images/laptops-main.jpg" class="full-image-main-content"></a></li>
                          <li><a href="/shop/devices/"><img src="images/devices-main-img.jpg" class="full-image-main-content"></a></li>
                      </ul>
                  </div>';
    }

    private function getColumns() {

        echo     '<div class="container text-center container-gl-for-sub-header">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <h1 class="header-for-category-sub-gl">';

        echo $this->model->Translate('Thin, powerful devices are developing to make your life as complex as possible. Productive, easy-to-use desktop computers going to flip absolutely your way of thinking at all.');

        echo                 '</h1>
                          </div>
                          <div class="col-md-1"></div>
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
                  </div>';

        echo     '<div class="container text-center container-gl-header">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <h1 class="header-for-category-sub-gl">';

        echo $this->model->Translate('Moving in lockstep with Business. Increase your productivity in area of Education. Get new possibilities for your day-to-day life');

        echo                  '</h1>
                          </div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>';

        echo      '<div class="container-fluid">
                      <div class="row">
                          <div class="col-md-6 no-division-for-category">
                              <a href="/shop/education/"><img src="images/main-education-category.jpg" class="full-image-cascade border-left" /></a>

                          </div>
                          <div class="col-md-6 no-division-for-category">
                              <a href="/shop/business/"><img src="images/main-business-category.jpg" class="full-image-cascade border-top-and-bottom" /></a>

                          </div>
                      </div>
                  </div>';

        echo     '<div class="container text-center container-gl-header">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <h1 class="header-for-category-sub-gl">';

        echo $this->model->Translate('Visit our online store. Place orders, then wait for shipping or pick up at any store.');

        echo                 '</h1>

                              <div class="divider-main-for-gl-devices" style="margin-top: 25px; margin-bottom: 25px;"></div>

                          </div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>';

        echo      '<div class="container text-center" style="padding-bottom: 40px;">
                      <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-2">
                              <h class="category-small-for-store">';

        echo $this->model->Translate('Phones');

        echo                 '</h>

                              <a href="/shop/shop/buy-phone/"><img src="images/logo-phones-small.png" id="full-logo" /></a>
                          </div>
                          <div class="col-md-2">
                              <h class="category-small-for-store">';

        echo $this->model->Translate('Laptops');

        echo                 '</h>

                              <a href="/shop/shop/buy-laptop/"><img src="images/logo-laptops-small.png" id="full-logo" /></a>
                          </div>
                          <div class="col-md-2">
                              <h class="category-small-for-store">';

        echo $this->model->Translate('Devices');

        echo                 '</h>

                              <a href="/shop/shop/buy-device/"><img src="images/logo-devices-small.png" id="full-logo" /></a>
                          </div>
                          <div class="col-md-2">
                              <h class="category-small-for-store margin-tv-for-small">';

        echo $this->model->Translate('TV');

        echo                 '</h>

                              <a href="/shop/shop/buy-tv/"><img src="images/logo-tv-small.png" id="full-logo" /></a>
                          </div>
                          <div class="col-md-2"></div>
                      </div>
                   </div>';




        echo '<div class="divider-main-for-gl-devices"></div>';
    }

    private function getSliderScript() {

        echo '<script>

              $(document).ready(function(){
                  $(".bxslider").bxSlider({
                      auto: true,
                      pause: 4000,
                      controls: false
                  });
              });
              </script>';
    }

    protected function endHTML() {

        echo '</body>
                </html>';
    }
}