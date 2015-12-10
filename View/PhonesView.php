<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 12:09
 */

include_once('IndexView.php');

class PhonesView extends IndexView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getPhonesPage() {

        $this->DoctypeView( 'phones' );
        $this->headerView( 'phones' );
        $this->getMain();
        $this->getBlocks();
        $this->getOrder();
        $this->actionGetFooter( 'phones' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="background text-center" style="margin-top: 100px;">
   			      <h1 class="header">Phones</h1>
			      <p class="the-only">The only thing that can change your life absolutely</p>
			      <a class="links" id="main-link" href="/learn-more" style="text-decoration: none">Learn more ></a> <a id="main-link" style="font-size: 20px; text-decoration: none" href="phones.php" style="text-decoration: none;">Get it now ></a>
			      <p class="adding">In business from 2010, opened mainly in Kiev</p>

	          </div>

              <div class="container">
                  <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-12">
                          <ul class="nav nav-list">
                              <li class="divider"></li>
                          </ul>
                      </div>
                      <div class="col-sm-1"></div>
                  </div>
              </div>


	          <div class="space"></div>';
    }

    private function getBlocks() {

        echo '<div class="iphone">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-3">
                      <h1 id="iphone" class="fc">Most people have at least a simple, if not sophisticated, mobile phone. These devices are convenient to carry around and you can use them on the go as long as there is network coverage wherever you are.Mobile phones have clearly made it easier to communicate.</h1>
                  </div>
                  <div class="col-sm-5"><img src="images/iphones.jpg" style="width: 100%"></div>
                  <div class="col-sm-2"></div>
              </div>

              <div class="container">
                  <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-12">
                          <ul class="nav nav-list">
                              <li class="divider"></li>
                          </ul>
                      </div>
                      <div class="col-sm-1"></div>
                  </div>
              </div>


              <div class="iphone">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-6"><img src="images/galaxy.png" style="width: 100%"></div>
                  <div class="col-sm-5">
                      <h1 id="iphone" class="fc">With the upgrades made year in, year out, mobile phones are becoming more like computers with the added benefit of portability. One can receive and send emails, browse websites, download games and videos, book flight tickets,  and even chat with friends.</h1>
                  </div>
              </div>

              <div class="container">
                  <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-12">
                          <ul class="nav nav-list">
                              <li class="divider"></li>
                          </ul>
                      </div>
                      <div class="col-sm-1"></div>
                  </div>
              </div>

              <div class="iphone">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-3">
                      <h1 id="iphone" class="fc">Although the mobile phone doesnt guarantee safety, you can use it to make calls whenever there is an emergency. Travelling with your phone is very important. In case you have an accident, you can always contact someone who will help you.</h1>
                  </div>
                  <div class="col-sm-5"><img src="images/galaxy.jpg" style="width: 100%"></div>
                  <div class="col-sm-2"></div>
              </div>

              <div class="container">
                  <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-12">
                          <ul class="nav nav-list">
                              <li class="divider"></li>
                          </ul>
                      </div>
                      <div class="col-sm-1"></div>
                  </div>
              </div>';
    }

    private function getOrder() {

        echo '<div>
                  <div class="col-sm-2"></div>
                  <div class="col-sm-12 header text-center">
                      <h1 class="fc">Usefull, practical, as well as, pleasurable
                          <br /> and much more!</h1>

                      <h1 style="margin-bottom: 100px;"><a href="index.php" id="phones">Order it now ></a></h1>
                  </div>
              </div>


              <div>
                  <div class="col-xs-1"></div>
                  <div class="col-sm-4">
                      <img src="images/left-photo.jpg" style="width: 100%">
                  </div>
                  <div class="col-xs-1"></div>
                  <div class="col-sm-4">
                      <img src="images/right-photo.png" style="width: 100%">
                  </div>
              </div>';
    }
}