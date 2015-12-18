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

        $this->DoctypeView( 'Phones' );
        $this->headerView( 'phones' );
        $this->getMain();
        $this->getBlocks();
        #$this->getOrder();
        $this->actionGetFooter( 'Phones' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="text-center" style="margin-top: 100px;">
   			      <h1 class="header">Phones</h1>
			      <p class="the-only">The only thing that can change your life absolutely</p>
			      <h class="describe">Describe new possibilities</h><br />
			      <div style="margin-top: 15px; margin-bottom: 30px;">
                      <a class="links" id="main-link" href="/shop/education/phones/" style="text-decoration: none">For education <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                      <a class="links" id="main-link" href="/shop/business/phones/" style="text-decoration: none">For business <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                      <a id="main-link" href="/shop/shop/buy-phone/" style="text-decoration: none;">Buy <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                  </div>
	          </div>

	          <img src="/shop/images/phones-category-white.png" class="full-image-cascade" />

              <div class="container">
	              <div class="divider-phones"></div>
	          </div>';
    }

    private function getBlocks() {

        echo '<div class="container">
                  <div class="row" style="margin-top: 8%; margin-bottom: 8%;">
                      <div class="col-sm-4 text-left" style="margin-top: 10%;">
                          <h1 id="iphone" class="fc">Most people have at least a simple, if not sophisticated,
                          mobile phone. These devices are convenient to carry around and you can use them on
                          the go as long as there is network coverage wherever you are.Mobile phones have
                          clearly made it easier to communicate.<br /><br />
                          Although the mobile phone doesnt guarantee safety, you can use it to make
                          calls whenever there is an emergency.</h1>
                      </div>
                      <div class="col-sm-8"><img src="/shop/images/phones-three-pos-gl.png" class="full-image-cascade"></div>
                  </div>
              </div>

              <div class="phones-category-gl container">
                  <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-4" style="margin-top: 47%; margin-bottom: 8%;" id="for-small-drop-up">
                              <h class="sub-education" style="font-size: 30px;">Thin, powerful and awesome.</h><br /><br />
                              <h class="sub-education">Change your way of thinking. Interact with each other.
                              Awesome Apps for your needs</h><br /><br />

                          <a id="main-link" href="/shop/education/phones/" style="text-decoration: none" class="search-education">Search for education <img src="/shop/images/arrow-blue-f1.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
              </div>


              <div class="container" id="for-small-margin">
                  <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-3" style="margin-top: 15%;">
                          <h1 id="iphone" class="fc">With the upgrades made year in, year out, mobile phones are becoming
                          more like computers with the added benefit of portability.<br /><br /> One can receive and send emails,
                          browse websites, download games and videos, book flight tickets,  and even chat with friends.</h1>
                      </div>
                      <div class="col-sm-6">
                          <img src="/shop/images/phones-iphone-desc.png" class="full-image-cascade" />
                      </div>
                      <div class="col-sm-2"></div>
                  </div>
              </div>

              <!--<img src="/shop/images/phones-bg.png" class="full-image-cascade" />-->
              <div class="phones-category-xs container">
                  <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4 high-resolution-gl-xs-margin" id="sub-for-small-drop-up">
                          <h class="sub-education" style="font-size: 30px;">Be productive, move forward</h><br /><br />
                          <h class="sub-education">Reimagine work and tasks with next-generation Apps.
                          Transform your business strategy. Be mobile as much as possible.
                          Go in lockstep with future</h><br /><br />

                          <a id="main-link" href="/shop/education/phones/" style="text-decoration: none" class="search-education">Search for business <img src="/shop/images/arrow-blue-f1.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-4"></div>
                  </div>
              </div>';
    }

    /*private function getOrder() {

        echo '<div>
                  <div class="col-sm-2"></div>
                  <div class="col-sm-12 header text-center">
                      <h1 class="fc">Usefull, practical, as well as, pleasurable
                          <br /> and much more!</h1>

                      <h1 style="margin-bottom: 100px;"><a href="/shop/shop/buy-phone" id="phones">Order it now ></a></h1>
                  </div>
              </div>


              <div>
                  <div class="col-xs-1"></div>
                  <div class="col-sm-4">
                      <img src="/shop/images/left-photo.jpg" style="width: 100%">
                  </div>
                  <div class="col-xs-1"></div>
                  <div class="col-sm-4">
                      <img src="/shop/images/right-photo.png" style="width: 100%">
                  </div>
              </div>
              <div class="container">
                  <iframe style="width: 100%; height: 600px;" src="https://www.youtube.com/embed/aBYWGjIzvyw" frameborder="0" allowfullscreen></iframe>
              </div>';
    }*/
}