<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 12:31
 */

include_once('IndexView.php');

class DevicesView extends IndexView
{
    private $model;

    /**
     * @param DefaultModel $model
     */
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getDevicesPage() {

        $this->DoctypeView( 'Devices' );
        $this->headerView( 'devices' );
        $this->getMain();
        $this->getDescription();
        $this->actionGetFooter( 'Devices' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="container text-center">
                  <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                          <h1 class="main-h">Devices</h1>
                          <p class="main-p-lead">Thin, capable that you have never ever seen before</p>
                          <p class="sub-main-lead">Never worry about where to place this incredible thing.</p>

                          <a class="links" id="main-link" href="/shop/business/devices/" style="text-decoration: none;">For business <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                          <a id="main-link" href="/shop/shop/buy-device/" style="text-decoration: none;">Buy <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                      </div>
                  </div>
              </div>';
    }

    private function getDescription() {

        echo '<img src="/shop/images/devices-main.png" class="full-image-cascade" id="marger-for-small"/>

              <div class="container">
                   <div class="divider-main"></div>
              </div>

              <div class="container">
                  <div class="text-center" style="padding-bottom: 5%;">
                      <h1 class="main-h">Powerful, minimalistic form</h1>
                      <p class="main-p">Lots of Ipads have 64-bit arhitecture that makes performance</p>
                      <p class="main-p">to be the perfect in a comparison with others.</p>
                      <a id="main-link" href="/shop/shop/buy-device/" style="text-decoration: none;">Buy <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                  </div>

                  <div class="row">
                      <div class="col-md-4" style="margin-top: 13%;">
                          <h class="sub-main-h">Battery for performance</h>

                          <div class="divider" style="margin-top: 25px; margin-bottom: 25px;"></div>

                          <h class="sub-main-22">With new edition Apple made graphics in a 2.5 times
                          faster than in a previous With new battery life, that equals to 10 hours of work you will
                          forgive about charging your device for all day long!</h>
                      </div>
                      <div class="col-md-7">
                          <img src="/shop/images/devices-drop.jpg" id="image-small" class="full-image-cascade" />
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>

              <div class="container">
                   <div class="divider-main"></div>
              </div>

              <div class="container">
                  <div class="row text-center" style="padding-bottom: 5%;">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                          <h1 class="main-h">Awesome thin, best performance</h1>
                          <p class="main-p">There is lots to meet your eye.
                          Developing the most user common interface, thin, productive</p>
                          <a class="links" id="main-link" href="/shop/business/devices/" style="text-decoration: none">For business <img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-2"></div>
                  </div>

                  <div class="row">
                      <div class="col-md-8">
                          <img src="/shop/images/devices-many.png" id="image-small" class="full-image-cascade" />
                      </div>
                      <div class="col-md-4" style="margin-top: 15%;">
                          <h class="sub-main-h">Take Photos and Record Video</h><br /><br />

                          <h class="sub-main-22">The back-facing camera on the iPad is surprisingly good.  It\'s not quite as good as the
                          iPhone 6, but the iPad Air 2\'s 8 megapixel camera can compete with most smartphone cameras. You\'ll know you have a great shot lined up
                          on it, and you don\'t have to miss the action because you are staring at a tiny screen.  </h>

                          <div class="divider" style="margin-top: 25px; margin-bottom: 25px;"></div>

                          <h class="sub-main-h">Family Entertainment</h><br /><br />

                          <h class="sub-main-22">When you combine Apple\'s rigorous inspection of each app with the parental controls
                          found in their iOS devices and the thousands of great games and apps on the iPad, you get the perfect
                          family entertainment system.</h>
                      </div>
                  </div>
              </div>

              <div class="container">
                   <div class="divider-main"></div>
              </div>

              <div class="text-center">
                  <div class="container" style="padding-bottom: 5%;">
                      <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                              <h1 class="main-h">Interactive performance with other devices</h1>
                              <p class="main-p">Now, using of Icloud as well as OneDrive is actual much</p>

                          </div>
                          <div class="col-md-2"></div>
                      </div>
                  </div>
              </div>

              <div class="container" style="padding-bottom: 3%;">
                  <div class="row">
                      <div class="col-md-6 text-left" style="border-right: 1px solid #e4e4e4;">
                           <div class="row">
                               <div class="col-md-2"></div>
                               <div class="col-md-8">
                                   <h class="main-p text-left">Icloud. Connect with Apple TV. Share Data.</h><br /><br />

                                   <div class="divider-default"></div>

                                   <p class="sub-main-22 text-left">Using of Icloud you can share Photos, Videos, apps with another devices such
                                   as Iphones, Imac, Macbook that is really useful. You can send an request for your Apple TV
                                   to see the Full HD video on your TV. The same works for all devices that are compatible
                                   and uses Windows
                                   </p>
                               </div>
                               <div class="col-md-2"></div>
                           </div>
                      </div>
                      <div class="col-md-6 text-left">
                           <div class="row">
                               <div class="col-md-2"></div>
                               <div class="col-md-8">
                                   <h class="main-p">Thin. Incredible. Useful for day-to-day life.</h><br /><br />

                                   <div class="divider-default"></div>

                                   <p class="sub-main-22 text-left">Apple designed and made 6.1 mm thin device for your needs. Now, you will never be
                                   worry about where to place this incredible thing. Newly, developed Ipad weight only 1 pound that is
                                   really useful for teenth, day-to-day life.
                                   </p>
                               </div>
                               <div class="col-md-2"></div>
                           </div>
                      </div>
                  </div>
              </div>

              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-6 no-division-for-category" style="border-right: 1px solid white; border-bottom: 2px solid white;">
                          <a href="/shop/shop/buy-device/"><img src="/shop/images/ipad-usage1-w-text.jpg" class="full-image-cascade" /></a>
                      </div>
                      <div class="col-md-6 no-division-for-category" style="border-bottom: 2px solid white;">
                          <a href="/shop/business/devices/"><img src="/shop/images/ipad-usage2-w-text.jpg" class="full-image-cascade" /></a>
                      </div>
                  </div>
              </div>';
    }
}