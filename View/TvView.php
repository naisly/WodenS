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
        $this->headerView( 'TV' );
        $this->getMain();
        $this->getDescription();
        $this->getOrder();
        $this->actionGetFooter( 'TV' );
        $this->endHTML();
    }

    private function getMain() {

        /*echo '<div class="full-background">
                  <div class="text-center">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-2"></div>
                              <div class="col-md-8">
                                  <h class="main-header-gl">Our development future is mainly focused on TV</h>
                              </div>
                              <div class="col-md-2"></div>
                          </div>
                      </div>
                  </div>
             </div>';*/
        echo '<div class="container abs-pos-for-xs">
                  <div class="row text-center">
                      <div class="col-md-1"></div>
                      <div class="col-md-5">
                          <h class="main-header">iMac</h><br />
                          <h class="sub-main-header">Thin, powerful.</h>
                          <h class="sub-main-header">Retina <br />development is vaste</h><br />
                          <a id="main-link" href="/tv/buy-tv/Imac" style="text-decoration: none; margin-right: 0px;">Buy <img src="/images/arrow-blue.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-6"></div>
                  </div>
              </div>
              <img src="/images/imac-tv2.png" class="full-image-cs" />';

        echo '<img src="/images/apple-tv-concept.jpg" class="full-image-cascade" style="margin-top: 30px;"/>
              <div class="text-center">
                  <h1 class="future-main">Apple TV</h1>
                  <h1 class="future-main" style="margin-top: 0px; font-size: 32px;">Moving in lockstep with future</h1>
                  <a id="main-link" href="/tv/buy-tv/AppleTV" style="text-decoration: none; margin-right: 0px;">Buy <img src="/images/arrow-blue.png" width="20" height="20"/></a>
                  <div class="container">
                      <div class="row">
                          <div class="col-md-6" style="margin-top: 50px;">
                              <img src="/images/apple-tv-pult1.jpg" class="full-image-cascade" />
                          </div>
                          <div class="col-md-4" style="margin-top: 65px;">
                              <p class="header-future text-left">Something great to watch</p>
                              <p class="sub-future text-left">And thats where TV on your big screen is headed. The new Apple TV is designed around this reality.
                              And the Siri Remote with Touch surface takes the effort out of searching through all these Apps to find something great to watch.</p>

                              <p class="header-future text-left">Easy to use</p>
                              <p class="sub-future text-left">Its really easy to use with most popular apps
                              like Netflix, HBO. Amazing HD will catch your eyes</p>
                          </div>
                      </div>
                  </div>
              </div>
              <img src="/images/avengers.jpg" class="full-image-cascade" style="margin-top: 50px;" />';
    }

    private function getDescription() {

        echo '<div class="container">
                  <!--<p class="future-main">Apple TV and awesome</p>
                  <p class="sub-future" style="font-size: 32px;">Games and Apps on TV gonna be excited</p>
                  <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                          <p style="font-size: 22px;">Lets look at big, high resolution games that makes you feel excited, thrilled. Apps
                          can absolutely flip your life from routine, dreary to entire, outright way of being.</p>
                      </div>
                      <div class="col-md-2"></div>
                  </div>-->
                  <div class="row" style="margin-top: 50px;">
                      <div class="col-md-5 border-box">
                          <p class="future-main text-left" style="font-size: 26px;">Apple TV and awesome</p>
                          <p class="sub-future text-left" style="font-size: 44px;">Games and Apps on TV gonna be excited</p>
                          <p class="text-left" style="font-size: 22px;">Lets look at big, high resolution games that makes you feel excited, thrilled. Apps
                          can absolutely flip your life from routine, dreary to entire, outright way of being.</p>

                          <a id="main-link" href="/tv/buy-tv/ShowTop" style="text-decoration: none; margin-right: 0px;">Also, you might be interested in ShowTop <img src="/images/arrow-blue.png" width="20" height="20"/></a>
                          <div style="margin-bottom: 100px;"></div>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-4">
                          <img src="/images/apple-tv-in-hand.jpg" class="full-image-responsive" style="margin-top: 20px;" />
                      </div>
                      <div class=col-md-1"></div>
                  </div>
              </div>
              <img src="/images/games1.jpg" class="full-image-cascade" style="margin-top: 100px;"/>';

    }

    private function getOrder() {

        echo '<div class="text-center" style="margin-top: 40px;">
                  <a id="main-link" href="/tv/buy-tv/" style="text-decoration: none; margin-right: 0px;">Buy <img src="/images/arrow-blue.png" width="20" height="20"/></a>
                  <p class="sub-future">Free shipping available!</p>
              </div>';
    }
}