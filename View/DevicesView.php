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

        $this->DoctypeView( 'devices' );
        $this->headerView();
        $this->getMain();
        $this->getDescription();
        $this->getOrder();
        $this->actionGetFooter( 'devices' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="text-center">
                  <h1 class="main-h">Devices</h1>
                  <p class="main-p">Thin, capable that you have never ever seen before</p>
                  <p class="sub-main">Apple designed and made 6.1 mm thin device for your needs. Now, you will never be <br />
                  worry about where to place this incredible thing. Newly, developed Ipad weight only 1 pound that is <br />
                  really usefull for teenth, day-to-day life.
                  </p>
                  <p><a href="gadgets.php" class="link-items">Search device for your choice ></a></p>
              </div>';
    }

    private function getDescription() {

        echo '<div class="overlay"></div>

              <div class="text-center">
                  <h1 class="main-h">Powerful, minimalistic form</h1>
                  <p class="sub-main">Lots of Ipads have 64-bit arhitecture that makes performance to be the perfect in<br />
                  a comparison with others. With new edition Apple made graphics in a 2.5 times <br />
                  faster than in a previous With new battery life, that equals to 10 HOURS of work you will <br />
                  forgive about charging your device  for all day long!
                  </p>
              </div>

              <div class="overlay-middle"></div>

              <div class="container">
                   <div class="divider-main"></div>
              </div>

              <div class="text-center">
                  <h1 class="main-h">Interactive performance with other devices</h1>
                  <p class="main-p">Now, using of Icloud as well as OneDrive is actual much</p>
                  <p class="sub-main">Using of Icloud you can share Photos, Videos, apps with another devices such <br />
                  as Iphones, Imac, Macbook that is really useful. You can send an request for your Apple TV <br/>
                  to see the Full HD video on your TV. The same works for all devices that are compatible <br />
                  and uses Windows
                  </p>
              </div>

              <div class="devices"></div>

              <div class="container">
                   <div class="divider-main"></div>
              </div>';
    }

    private function getOrder() {

        echo '<div class="text-center">
                  <p><a href="gadgets.php" class="order-now">Order it now ></a></p>
              </div>

              <div class="footer-bg"></div>';
    }
}