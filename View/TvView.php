<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 12:37
 */

include_once('IndexView.php');

class TvView extends IndexView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getTVPage() {

        $this->DoctypeView( 'TV' );
        $this->headerView();
        $this->getMain();
        $this->getDescription();
        $this->getOrder();
        $this->actionGetFooter( 'TV' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="text-center">
                  <h1 class="future-main">The future of television is here now!</h1>
                  <p><a href="television.php" class="link-nav">Search TV for your choice ></a></p>
                  <p class="sub-future">And thats where TV on your big screen is headed. The new Apple TV is designed around this reality.<br />
                   And the Siri Remote with Touch surface takes the effort out of searching through all these <br/>
                   apps to find something great to watch. Its really easy to use with most popular apps <br />
                   like Netflix, HBO. Amazing HD will catch your eyes
                   </p>
              </div>
              <div class="main-overlay"></div>

              <div class="sub-overlay"></div>';
    }

    private function getDescription() {

        echo '<div class="text-center">
                  <h1 class="future-main">Technical support and the Apple TV warranty</h1>
                  <p class="sub-h">Get the longest guarantee</p>
                  <p class="sub-future">Every Apple TV comes with complimentary telephone technical support within 90 days of your Apple TV <br />
                  purchase. In addition, Apple TV and all accessories are covered against defects for one <br />
                  year from the original purchase date by a limited hardware warranty.
                  </p>
              </div>

              <div class="mid-overlay"></div>

              <div class="container">
                  <div class="divider-main"></div>
              </div>';
    }

    private function getOrder() {

        echo '<div class="text-center">
                  <h1 class="order-margin"><a href="television.php" class="order-nav">Order it now ></a></h1>
                  <p class="sub-future">Free shipping available!</p>
              </div>

              <div class="footer-overlay"></div>';
    }
}