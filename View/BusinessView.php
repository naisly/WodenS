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
                                  <h class="main-header-content">We believe that there\'re lots to transform your business in complex manner</h>

                                  <br /><br />

                                  <h class="with-devices">With usability, free to use apps in Phones, easy to use, thin Devices,
                                  powerful as well as practical Laptops, you have everything to transform your personal life, change your
                                  way of thinking, not to mention even on business.</h>

                               </div>
                           <div class="col-md-2"></div>
                       </div>
                       <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                               <img src="../images/laptops.jpg" class="full-image" />
                           </div>
                           <div class="col-md-1"></div>
                       </div>

                       <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-10">
                               <div class="row">
                                   <div class="col-md-4">
                                       <h class="category-main">Laptops in business</h><br /><br />

                                       <h class="sub-category">Being powerful and thin laptop, It gives you an advantage over opponents.
                                       Whether your data can be stored in
                                       one place, it also protected for unwanted eyes</h><br /><br />

                                       <a class="links" id="main-link" href="/shop/business/laptops/" style="text-decoration: none">';

        echo $this->model->Translate('Learn more');

        echo         ' ' . '<img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                                   </div>
                                   <div class="col-md-4 spacer-for-small-devices">
                                       <h class="category-main">Phones in business</h><br /><br />

                                       <h class="sub-category">Phones have powerful battery to still be connected to worldwide
                                       with complex and flex apps. Be always equipped with information about every area
                                       of business</h><br /><br />

                                       <a class="links" id="main-link" href="/shop/business/phones/" style="text-decoration: none">';

        echo $this->model->Translate('Learn more');

        echo         ' ' . '<img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                                   </div>
                                   <div class="col-md-4 spacer-for-small-devices">
                                       <h class="category-main">Devices in business</h><br /><br />

                                       <h class="sub-category">Devices change the way of your work with yours partners by using
                                       thousands of different apps for business, that makes your productivity non-catchable.</h><br /><br />

                                       <a class="links" id="main-link" href="/shop/business/devices/" style="text-decoration: none">';

        echo $this->model->Translate('Learn more');

        echo         ' ' . '<img src="/shop/images/arrow-blue.png" width="20" height="20"/></a>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-1"></div>
                       </div>
                  </div>

             </div>';
    }
}