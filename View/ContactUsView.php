<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.12.2015
 * Time: 17:15
 */

include_once('DefaultView.php');

class ContactUsView extends DefaultView
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

    public function getContactPage() {

        $this->DoctypeView( 'Contact Us' );
        $this->headerView( 'daughter' );

        $this->getPage();
        $this->actionGetFooter( 'daughter' );
    }

    private function getPage() {

        echo '<div class="main-fixed-container">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <div class="fixed-main pull-left">
                                  <h class="fixed-header">Contact Us</h>
                              </div>
                              <div class="buy-main pull-right">
                                  <a style="color: white;" class="btn btn-primary button-buy buy-phones" href="/shop/support.php">Support</a>
                              </div>
                          </div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>
              </div>';
        echo '<div class="main-content-background">
                   <div class="container">
                       <div class="row" style="margin-top: 20px;">
                           <div class="col-md-3">
                                <h class="main-header">Contact Us</h>
                           </div>
                           <div class="col-md-5"></div>
                           <div class="col-md-4">
                                <ul class="sub-navigation" style="margin-left: -13px;">
                                    <li><a id="nav-links" href="/shop/support.php">Support</a></li>
                                    <li><a id="nav-links" href="/shop/financing.php">Our offices</a></li>
                                </ul>
                           </div>
                       </div>
                   </div>
              </div>
              <div class="text-center">
                  <div class="contacting-woden-sims">
                       <h class="contact">Contacting Woden Sims</h>
                  </div>
              </div>
              <div class="container">
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-5">
                            <h class="header-category">Sales category</h><br /><br />

                            <h class="sub-header-category">Woden Sims Online Store</h><br />
                            <h class="content-header">The <a id="default-link" href="/shop/">Woden Sims Online Store</a> is a quit place to
                            purchase any quality or any product category from Apple, Samsung and other manufacturers. You can buy online
                            or by call +38 (095) 094 82 68 or other phones as follows on this page 7 days a week from 10 a.m. to
                            19 p.m. UTC <br /><br /> You can get information about an order placed on Woden Sims Store by <a id="default-link" href="/store/order.php">
                            Order Status</a> page. If you would prefer, you can also check the order status via Phone, <span style="color: #ac5050">all phones available
                            for each country of our company is provided below.</span></h><br /><br />

                            <h class="sub-header-category">Get Financing for each of your device bought in our Store</h><br />
                            <h class="content-header">Woden Sims Financial offers financing for every product you bought. It\'s
                            available on categories: <a id="default-link" href="/shop/phones.php">Phones</a>, <a id="default-link" href="/shop/laptops.php">Laptops</a>,
                            <a id="default-link" href="/shop/television.php">TVs.</a> For each category, for <a id="default-link" href="/shop/education/">Education</a>,
                            for <a id="default-link" href="/shop/business">Business</a> you can find out hot deals for each Area of work.</h><br /><br />

                            <h class="sub-header-category">Consult using Online Support Service</h><br />
                            <h class="content-header">Visit our <a id="default-link" href="/shop/support.php">Support</a> page to ask any questions that you want. We will respond you as soon as possible</h>
                       </div>
                       <div class="col-md-5" style="margin-top: 70px;">
                            <h class="sub-header-category">Getting items for Business</h><br />
                            <h class="content-header">If you want to get items for your <a id="default-link" href="/shop/business/">business</a>
                            or be consulted in area of using it call +38 (095) 094 82 68 or other phones supported by Woden Sims.<span style="color: #ac5050">All phones available
                            for each country of our company is provided below.</span></h><br /><br />

                            <h class="sub-header-category">Getting items for Education</h><br />
                            <h class="content-header">If you want to get items for your <a id="default-link" href="/shop/education/">education</a>
                            or be consulted in area of using it call +38 (095) 531 618 31 or other phones supported by Woden Sims.<span style="color: #ac5050">All phones available
                            for each country of our company is provided below.</span></h><br /><br />
                       </div>
                       <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                            <div id="contact-divider"></div>
                       </div>
                       <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <img src="../images/czech-republic-small.jpg" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">Praha, Czech Republic</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">Rosmarin Business Center</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/rosmarin-business-center.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>Woden Sims Store <span id="default-link">+420 666 905 222</span></li>
                                        <li>Support Service <span id="default-link">+420 666 905 333</span></li>
                                        <li>Office <span id="default-link">+420 666 905 444</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                            <div id="contact-divider"></div>
                       </div>
                       <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <img src="../images/poland-small.jpg" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">Warsaw, Poland</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">International Business Center</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/poland-business-center.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>Woden Sims Store <span id="default-link">+48 454 999 123</span></li>
                                        <li>Support Service <span id="default-link">+48 454 888 123</span></li>
                                        <li>Office <span id="default-link">+48 454 888 123</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                            <div id="contact-divider"></div>
                       </div>
                       <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <img src="../images/lithuania-small.jpg" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">Vilnius, Lithuania</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">Vilnius International Business Center</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/vilnius-business-center.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>Woden Sims Store <span id="default-link">+370 567 888 90</span></li>
                                        <li>Support Service <span id="default-link">+370 678 888 90</span></li>
                                        <li>Office <span id="default-link">+370 444 888 90</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                            <div id="contact-divider"></div>
                       </div>
                       <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <img src="../images/ukraine-small.png" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">Lviv, Ukraine</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">King Cross Leopolis</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/lviv-king-cross-leopolis.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>Woden Sims Store <span id="default-link">+38 095 666 77 77</span></li>
                                        <li>Support Service <span id="default-link">+38 066 666 77 77</span></li>
                                        <li>Office <span id="default-link">+38 063 666 77 77</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                            <div id="contact-divider"></div>
                       </div>
                       <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <img src="../images/ukraine-small.png" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">Kiev, Ukraine</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">Gulliver Business Center</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/kiev-gulliver.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>Woden Sims Store <span id="default-link">+38 095 094 82 68</span></li>
                                        <li>Support Service <span id="default-link">+38 095 094 82 86</span></li>
                                        <li>Office <span id="default-link">+38 095 094 82 77</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                            <div id="contact-divider"></div>
                       </div>
                       <div class="col-md-1"></div>
                   </div>

                   <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <img src="../images/russia-small.jpg" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">Moscow, Russia</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">Moscow International Business Center Facto</h>
                            </div>

                            <div id="warning">
                                <h class="warning">Important! Due to <b>political tensions</b> Communicational personal leaved <br />Moscow
                                and unfortunately, the Open Line not working now!</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="../images/kharkiv-sun-mall.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>Woden Sims Store <span id="default-link">+7 499 095 666 77</span></li>
                                        <li>Support Service <span style="color: #ac5050;">Not Available</span></li>
                                        <li>Office <span style="color: #ac5050;">Not Available</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                   </div>



              </div>

              ';
    }
}