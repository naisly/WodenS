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
                          <h1 class="main-h">';

        echo $this->model->Translate('Devices');

        echo             '</h1>
                          <p class="main-p-lead">';

        echo $this->model->Translate('Thin, capable that you have never ever seen before.');

        echo             '</p>
                          <p class="sub-main-lead">';

        echo $this->model->Translate('Never worry about where to place this incredible thing.');

        echo              '</p>

                          <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }
        echo 'business/devices/" style="text-decoration: none;">';

        echo $this->model->Translate('For business');

        echo '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                          <a id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'devices/buy-device/" style="text-decoration: none;">';

        echo $this->model->Translate('Buy');

        echo '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                      </div>
                  </div>
              </div>';
    }

    private function getDescription() {

        echo '<img src="/images/devices-main.png" class="full-image-cascade" id="marger-for-small"/>

              <div class="container">
                   <div class="divider-main"></div>
              </div>

              <div class="container">
                  <div class="text-center" style="padding-bottom: 5%;">
                      <h1 class="main-h">';

        echo $this->model->Translate('Powerful, minimalistic form');

        echo         '</h1>
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <p class="main-p">';

        echo $this->model->Translate('Lots of Ipads have 64-bit arhitecture that makes performance to be the perfect in a comparison with others.');

        echo                 '</p>
                          </div>
                          <div class="col-md-1"></div>
                      </div>
                      <a id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'devices/buy-device/" style="text-decoration: none;">';

        echo $this->model->Translate('Buy');

        echo '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                  </div>

                  <div class="row">
                      <div class="col-md-4" style="margin-top: 13%;">
                          <h class="sub-main-h">';

        echo $this->model->Translate('Battery for performance');

        echo             '</h>

                          <div class="divider" style="margin-top: 25px; margin-bottom: 25px;"></div>

                          <h class="sub-main-22">';

        echo $this->model->Translate('With new edition Apple made graphics in a 2.5 times faster than in a previous With new battery life, that equals to 10 hours of work you will forgive about charging your device for all day long.');

        echo              '</h>
                      </div>
                      <div class="col-md-7">
                          <img src="/images/devices-drop.jpg" id="image-small" class="full-image-cascade" />
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
                          <h1 class="main-h">';

        echo $this->model->Translate('Awesome thin, best performance');

        echo             '</h1>
                          <p class="main-p">';

        echo $this->model->Translate('There is lots to meet your eye. Developing the most user common interface, thin, productive');

        echo             '</p>
                          <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/devices/" style="text-decoration: none">';

        echo $this->model->Translate('For business');

        echo '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-2"></div>
                  </div>

                  <div class="row">
                      <div class="col-md-8">
                          <img src="/images/devices-many.png" id="image-small" class="full-image-cascade" />
                      </div>
                      <div class="col-md-4" style="margin-top: 15%;">
                          <h class="sub-main-h">';

        echo $this->model->Translate('Take Photos and Record Video');

        echo             '</h><br /><br />

                          <h class="sub-main-22">';

        echo $this->model->Translate('The back-facing camera on the iPad is surprisingly good.  It\'s not quite as good as the iPhone 6, but the iPad Air 2\'s 8 megapixel camera can compete with most smartphone cameras. You\'ll know you have a great shot lined up on it, and you don\'t have to miss the action because you are staring at a tiny screen.');

        echo             '</h>

                          <div class="divider" style="margin-top: 25px; margin-bottom: 25px;"></div>

                          <h class="sub-main-h">';

        echo $this->model->Translate('Family Entertainment');

        echo             '</h><br /><br />

                          <h class="sub-main-22">';

        echo $this->model->Translate('When you combine Apple\'s rigorous inspection of each app with the parental controls found in their iOS devices and the thousands of great games and apps on the iPad, you get the perfect family entertainment system.');

        echo              '</h>
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
                              <h1 class="main-h">';

        echo $this->model->Translate('Interactive performance with other devices');

        echo '</h1>
                              <p class="main-p">';

        echo $this->model->Translate('Now, using of Icloud as well as OneDrive is actual much');

        echo '</p>

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
                                   <h class="main-p text-left">';

        echo $this->model->Translate('Icloud. Connect with Apple TV. Share Data.');

        echo                       '</h><br /><br />

                                   <div class="divider-default"></div>

                                   <p class="sub-main-22 text-left">';

        echo $this->model->Translate('Using of Icloud you can share Photos, Videos, apps with another devices such as Iphones, Imac, Macbook that is really useful. You can send an request for your Apple TV to see the Full HD video on your TV. The same works for all devices that are compatible and uses Windows');

        echo                      '</p>
                               </div>
                               <div class="col-md-2"></div>
                           </div>
                      </div>
                      <div class="col-md-6 text-left">
                           <div class="row">
                               <div class="col-md-2"></div>
                               <div class="col-md-8">
                                   <h class="main-p">';

        echo $this->model->Translate('Thin. Incredible. Useful for day-to-day life.');

        echo                      '</h><br /><br />

                                   <div class="divider-default"></div>

                                   <p class="sub-main-22 text-left">';

        echo $this->model->Translate('Apple designed and made 6.1 mm thin device for your needs. Now, you will never be worry about where to place this incredible thing. Newly, developed Ipad weight only 1 pound that is really useful for teenth, day-to-day life.');

        echo                       '</p>
                               </div>
                               <div class="col-md-2"></div>
                           </div>
                      </div>
                  </div>
              </div>

              <div class="container-fluid">
                  <div class="row col-md-6 no-division-for-category">
                          <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'devices/buy-device/" style="text-decoration: none;"><div class="ipad-usage">
                              <h1 class="main-ipad">';

        echo $this->model->Translate('Thin. Productive. Practical.');

        echo                 '</h1>
                              <h1 class="sub-ipad"">';

        echo $this->model->Translate('Order it now');

        echo                 '</h1>
                          </div>
                      </div>
                      <div class="col-md-6 no-division-for-category">
                          <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/devices/" style="text-decoration: none;"><div class="ipad-usage-next">
                              <h1 class="reimagine-main">';

        echo $this->model->Translate('Reimagine your life with new technology');

        echo                 '</h1>
                              <h1 class="reimagine-sub" style="color: black;">';

        echo $this->model->Translate('Discover for business');

        echo                 '</h1>
                          </div></a>
                      </div>

                      <div class="container invisible-for-xs" style="padding-left: 0 !important; padding-right: 0 !important;">
                          <h1 class="header-ipad">';

        echo $this->model->Translate('Thin. Productive. Practical.');

        echo             '</h1>
                          <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'education/phones/" style="text-decoration: none;">';

        echo $this->model->Translate('Order it now');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                          <div class="col-md-6 no-division-for-category" style="border-right: 1px solid white; border-bottom: 2px solid white;">
                              <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'devices/buy-device/"><img src="/images/ipad-usage1.jpg" class="full-image-cascade" style="margin-top: 15px;" /></a>
                          </div>

                          <h1 class="header-ipad">';

        echo $this->model->Translate('Reimagine your life with new technology') . '</h1>
                          <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/devices/" style="text-decoration: none;">';

        echo $this->model->Translate('Discover for business');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                          <div class="col-md-6 no-division-for-category" style="border-bottom: 2px solid white;">
                              <a href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/devices/"><img src="/images/ipad-usage2.jpg" class="full-image-cascade" style="margin-top: 15px;" /></a>
                          </div>
                      </div>
                  </div>
              </div>';
    }
}