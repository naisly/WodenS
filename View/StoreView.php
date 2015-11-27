<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 18:57
 */

include_once('DefaultView.php');

class StoreView extends DefaultView
{

    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getStorePage() {

        $this->DoctypeView( 'store' );
        $this->headerView();
        $this->getGoogleMap();
        $this->getSlider();
        $this->getBlocks();
        $this->orderOnline();
        $this->actionGetFooter( 'Index' );
    }

    private function getGoogleMap() {

        include('store_map.html');
    }

    private function getSlider() {

        echo '<div id="slideshow">
               <div>
                 <img class="images-slideshow" src="images/office1.jpg">
               </div>
               <div>
                 <img class="images-slideshow" src="images/office2.jpg">
               </div>
               <div>
                 <img class="images-slideshow" src="images/office4.jpg">
               </div>
            </div>
            <script>
            $("#slideshow > div:gt(0)").hide();

                setInterval(function() {
                  $("#slideshow > div:first")
                            .fadeOut(0)
                            .next()
                            .fadeIn(1500)
                            .end()
                            .appendTo("#slideshow");
                    },  6000);
                </script>';
    }

    private function getBlocks() {

        echo '<div class="margin-space"></div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-4">
                          <h1 class="store-h">Ask what you want</h1>
                          <p class="text-left">Join us for free explains that covers all answers for your questions, like
                          the basic tricks about the bought product up to professional skills. Come to our
                          shop to use the product, see all the pros and cons as well as getting lots of advices.
                          </p>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-7">
                          <img class="images-slideshow" src="images/store_support1.jpg" />
                      </div>
                  </div>
                  <div class="margin-space"></div>
                  <div class="row">
                      <div class="col-md-4">
                          <h1 class="store-h">Get the help you need</h1>
                          <p class="text-left">Ask us about what you should do about repairing. In each of our stores we have
                          some professionals that are experts in an area of software.
                          </p>

                          <p class="text-left">In order to get help as fast as possible, contact us by phone</p>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-7">
                          <img class="images-slideshow" src="images/store_support2.jpg" />
                      </div>
                  </div>
              </div>';
    }

    private function orderOnline() {

        echo '<div class="margin-space"></div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="divider"></div>
                          <div class="margin-space"></div>
                          <div class="text-center">
                              <h1 class="header-buy">Buy online. Then, pick up at our store</h1>

                              <p class="p-buy">Make up an online order using the internet-shop and pick <br />
                              up in the store near you.
                              </p>

                              <a href="phones.php"><img style="margin-right: 40px" src="images/icon-phones.png" width="120" height="120" /></a>
                              <a href="notebooks.php"><img style="margin-right: 40px" src="images/icon-laptop.png" width="120" height="120" /></a>
                              <a href="gadgets.php"><img style="margin-right: 40px" src="images/icon-devices.png" width="120" height="120" /></a>
                              <a href="television.php"><img style="margin-right: 40px" src="images/icon-tv.png" width="120" height="120" /></a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="margin-space"></div>';
    }
}