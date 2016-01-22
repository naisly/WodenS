<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 14.12.2015
 * Time: 0:31
 */

include_once('DefaultView.php');

class BusinessView extends DefaultView
{
    /*
     * MVC constructor
     * with AdminModel
     *
     * @private $model
     */
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getBusinessPage() {

        $this->DoctypeView( 'Business' );
        $this->headerView( 'business' );

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    private function getMain() {

        echo '<div class="overlay">
                  <div class="container">
                       <div class="row text-center">
                           <div class="col-md-2"></div>
                               <div class="col-md-8 marger">
                                  <h class="main-header-content">';

        echo $this->model->Translate('We believe that there are lots to transform your business in gentle manner');

        echo                      '</h>

                                  <br /><br />

                                  <h class="with-devices">';

        echo $this->model->Translate('With usability, free to use apps in Phones, easy to use, thin Devices, powerful as well as practical Laptops, you have everything to transform your personal life, change your way of thinking, not to mention even on business.');

        echo                      '</h>

                               </div>
                           <div class="col-md-2"></div>
                       </div>
                       <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                               <img src="/images/laptops.jpg" class="full-image" />
                           </div>
                           <div class="col-md-1"></div>
                       </div>

                       <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                               <div class="row">
                                   <div class="col-md-4">
                                       <div class="height-for-h">
                                           <h class="category-main">';

        echo $this->model->Translate('Laptops in business');

        echo                          '</div>
                                    </h><br /><br />

                                    <div class="height-for-sm-h">
                                       <h class="sub-category">';

        echo $this->model->Translate('Being powerful and thin laptop, It gives you an advantage over opponents. Whether your data can be stored in one place, it also protected for unwanted eyes');

        echo                          '</h>
                                    </div><br /><br />

                                       <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/laptops/" style="text-decoration: none">';

        echo $this->model->Translate('Learn more');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                                   </div>
                                   <div class="col-md-4 spacer-for-small-devices">
                                       <div class="height-for-h">
                                            <h class="category-main">';

        echo $this->model->Translate('Phones in business');

        echo                          '</div>
                                    </h><br /><br />

                                    <div class="height-for-sm-h">
                                       <h class="sub-category">';

        echo $this->model->Translate('Phones have powerful battery to still be connected to worldwide with complex and flex apps. Be always equipped with information about every a of business');

        echo                          '</h>
                                    </div><br /><br />

                                       <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/phones/" style="text-decoration: none">';

        echo $this->model->Translate('Learn more');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                                   </div>
                                   <div class="col-md-4 spacer-for-small-devices">
                                       <div class="height-for-h">
                                           <h class="category-main">';

        echo $this->model->Translate('Devices in business');

        echo                          '</div>
                                    </h><br /><br />

                                    <div class="height-for-sm-h">
                                       <h class="sub-category">';

        echo $this->model->Translate('Devices change the way of your work with yours partners by using thousands of different apps for business, that makes your productivity non-catchable.');

        echo                          '</h>
                                    </div><br /><br />

                                       <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/devices/" style="text-decoration: none">';

        echo $this->model->Translate('Learn more');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-1"></div>
                       </div>
                  </div>

             </div>';
    }
}