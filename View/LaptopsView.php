<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 12:23
 */

include_once('IndexView.php');

class LaptopsView extends IndexView
{

    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getLaptopsPage() {

        $this->DoctypeView( 'Laptops' );
        $this->headerView( 'notebooks' );
        $this->getMain();
        $this->getDesciprition();
        $this->actionGetFooter( 'notebooks' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="text-center">
                  <h1 class="macbook-header">Laptops</h1>
                  <p class="macbook-p">Thin, stunning display makes your heart beat faster.</p>
                  <p class="macbook-p" style="font-size: 28px;">All the power you want. All day long.</p>
                  <div style="margin-top: 15px; margin-bottom: 30px;">
                      <a class="links" id="main-link" href="/shop/education/laptops/" style="text-decoration: none">For education <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                      <a class="links" id="main-link" href="/shop/business/laptops/" style="text-decoration: none">For business <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                      <a id="main-link" href="/shop/laptops/buy-laptop/" style="text-decoration: none;">Buy <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                  </div>

              </div>

              <div class="container">
                  <img src="../images/macbook-pro.png" class="full-image" />
              </div>

              <div class="container">
                  <div class="divider-block"></div>
              </div>';
    }

    private function getDesciprition() {

        echo '<div class="text-center">
                   <h1 class="header-laptops">Build your life as easy as it could be</h1>
                   <h2 class="macbook-p" style="font-size: 28px;">Powerful apps included</h2>
                   <a class="links" id="default-link" href="/shop/education/laptops/" style="text-decoration: none">For education <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
              </div>

              <div class="container" style="margin-top: 60px;">
                  <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                           <div class="row">
                               <!--<div class="col-md-4">
                                   <h class="header-for-category">Apps</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">Really useful apps for Windows 10 like Live Table Calendar, Mail with build-in
                                   system sign up. Every new Mac comes with Photos, iMovie, GarageBand, Pages, Numbers, and Keynote. </p>
                               </div>
                               <div class="col-md-4" style="border-right: 1px solid #e4e4e4; border-left: 1px solid #e4e4e4;">
                                   <h class="header-for-category">Anywhere you want</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">So you can be creative and productive right from the start. You also get great
                                   apps for email, sending texts, and making FaceTime calls, there even an app for new apps. Be connected to the social networks.</p>
                               </div>
                               <div class="col-md-4">
                                   <h class="header-for-category">Share data for free</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">Be connected worldwide with new apps like Skype, Viber for free. Share for free of charge your
                                   documents, photos, tasks and get instant messages by online chat.
                                   </p>
                               </div>-->
                               <div class="col-md-4" style="margin-top: 8%;">
                                   <h class="header-for-category">Apps</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">Really useful apps for Windows 10 like Live Table Calendar, Mail with build-in
                                   system sign up. Every new Mac comes with Photos, iMovie, GarageBand, Pages, Numbers, and Keynote. </p>

                                   <div class="divider" style="margin-top: 25px; margin-bottom: 25px;"></div>

                                   <h class="header-for-category">Anywhere you want</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">So you can be creative and productive right from the start. You also get great
                                   apps for email, sending texts, and making FaceTime calls, there even an app for new apps. Be connected to the social networks.</p>
                               </div>
                               <div class="col-md-1"></div>
                               <div class="col-md-7">
                                   <img src="/shop/images/macbook-drop.png" class="full-image-cascade" id="for-small-cascade"/>
                               </div>

                           </div>
                       </div>
                       <div class="col-md-1"></div>
                  </div>
              </div>

              <div class="container">
                  <div class="divider-block"></div>
              </div>

              <div class="text-center" style="padding-bottom: 40px;">
                  <h1 class="header-laptops">The best design. For the best performance</h1>
                  <h2 class="macbook-p" style="font-size: 28px;">Special All-day battery life</h2>
                  <a class="links" id="default-link" href="/shop/business/laptops/" style="text-decoration: none">For business <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
              </div>

              <div class="container">
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                           <div class="row">
                               <div class="col-md-4">
                                   <h class="header-for-category">Usability</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">With the usability and high performance of
                                   each newly developed Laptop, you\'re going to change your mind as well as fundamental
                                   principals at all.</p>
                               </div>
                               <div class="col-md-4" style="border-right: 1px solid #e4e4e4; border-left: 1px solid #e4e4e4;">
                                   <h class="header-for-category">Be connected</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">Nowadays, despite all most casual situations,
                                   every person from Kid up to Businessman must be connected to the world. With newly developed
                                   24 hours battery you\'re going to forget about lack of power in general.
                                   </p>
                               </div>
                               <div class="col-md-4">
                                   <h class="header-for-category">High Performance</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">The entire internal structure was built to keep
                                   the very best high-performance components: all-flash storage, the latest processors,
                                   powerful discrete graphics, massive amounts of memory, autonomy.</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-1"></div>
                   </div>
              </div>

              <div class="text-center" style="margin-top: 40px;">
                  <img src="../images/macbook-air.jpg" class="part-image" />
              </div>

              <!--<div class="text-center">
                  <img src="../images/macbook-real.jpg" class="part-image"/>
              </div>-->

              <div class="container">
                  <div class="divider-block"></div>
              </div>

              <div class="text-center">
                   <h1 class="header-laptops">Stunning display</h1>
                   <h2 class="macbook-p" style="font-size: 28px;">Best quality for your performance</h2>
                   <a id="default-link" href="/shop/shop/buy-laptop/" style="text-decoration: none;">Buy <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
              </div>

              <div class="container" style="margin-top: 40px;">
                  <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                           <div class="row">
                               <div class="col-md-4">
                                   <h class="header-for-category">Latest developments</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">Latest technologies
                                   give you a wide, 178-degree view of everything on the screen, so you\'ll see
                                   the difference at practically any angle.</p>
                               </div>
                               <div class="col-md-4" style="border-right: 1px solid #e4e4e4; border-left: 1px solid #e4e4e4;">
                                   <h class="header-for-category">Retina display</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">
                                   The Retina display also reduces glare while maintaining incredible color and quality. In fact,
                                   it has a 29 percent higher contrast ratio than a standard laptop from Apple display.</p>
                               </div>
                               <div class="col-md-4">
                                   <h class="header-for-category">Graphics elaboration</h><br /><br />
                                   <p class="sub-h" style="text-align: left;">With new graphics cards from NVIDIA or Intel
                                   you can not look away from the screen at maximum resolution, not to mention the 5K video.
                                   </p>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-1"></div>
                  </div>
              </div>

              <div class="text-center main-footer">
                   <div class="header-footer" style="padding-top: 15px; padding-bottom: 15px; margin-top: 50px;">
                       <h1>Powerful. Thin. Awesome.</h1>
                   </div>
                   <img src="../images/macbook-different.jpg" class="full-image-cascade"/>
              </div>
              <div class="footer-bg-xs">
                  <h1 class="powerful">Powerful</h1>
                  <h1 class="thin">Thin</h1>
                  <h1 class="awesome">Awesome</h1>
              </div>

              ';
    }
}