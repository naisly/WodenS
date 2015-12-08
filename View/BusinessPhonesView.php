<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 08.12.2015
 * Time: 15:26
 */

include_once('DefaultView.php');

class BusinessPhonesView extends DefaultView
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

    public function getBusinessPhonesPage() {

        $this->DoctypeView( 'business-phones' );
        $this->headerView( 'business' );

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    private function getMain() {

        echo '<div class="main-fixed-container">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <div class="fixed-main pull-left">
                                  <h class="fixed-header">Phones in Business</h>
                              </div>
                              <div class="buy-main pull-right">
                                  <a style="color: white" class="btn btn-primary button-buy buy-phones" href="../../phones.php">Buy</a>
                              </div>
                          </div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>
              </div>';
        echo '<div class="container">
                  <div class="text-center">
                      <div class="main-container">
                          <h class="moving-forward">Moving in lockstep with business</h><br />
                      </div>
                      <div class="sub-container">
                          <h class="sub-main-header">When you use IOS or Android technology as one of the main business skills, <br /> new
                          possibilities are available. As many people that have phone, they love their work, <br /> productivity is increasing
                          in a simple working day. Phones enable your mind with <br /> skills that never ever thought about before and operate
                          with them in random tasks.</h>
                      </div>
                  </div>
              </div>

              <div class="business-content">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-4">
                              <div class="better-phones">
                                  <div class="text-left">
                                      <h class="better-than-imagine">Better than you can <br /> just imagine</h><br />

                                      <div style="margin-top: 30px">
                                          <h class="sub-better">With new tools for IT in IOS, great security you can hold any data in your Iphone.
                                          Powerful productivity features are pretty useful for your users needs and to make your workday more
                                          productive.<br /><br /> With Iphone, you are not going to miss any note for your business and stay up-to-date everywhere
                                          </h>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <img src="../../images/business-phones3.png" id="business-phone" />
                          </div>
                      </div>
                  </div>
              </div>

              <div class="business-photo">
                   <div class="container">
                       <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <div class="business-in-action">
                                  <div class="text-left">
                                      <h class="better-than-imagine">Apps for Everything</h><br />

                                      <div style="margin-top: 30px">
                                          <h class="sub-better">The suite of electronic tools a business needs to conduct daily operations is shifting.
                                          At one time, a business owner needed an Office suite, e-mail, and industry-specific software to open for business.
                                          <br /><br />Everything from billing and scheduling to project management may be moved to Cloud-based apps, allowing
                                          small businesses with small budgets to compete against much larger companies.
                                          </h>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>

                   </div>
              </div>

              <div class="business-content" style="margin-top: 0px;">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-4">
                              <div class="better-phones">
                                  <div class="text-left">
                                      <h class="better-than-imagine">Reimagine your life with Iphone and Apps</h><br />

                                      <div style="margin-top: 30px">
                                          <h class="sub-better">Be in touch with others by using in country calls. For non-resident calls
                                          Cell phones have <a id="apps-link" href="http://skype.com">Skype</a> or <a id="apps-link" href="http://skyp.com">Viber</a> for free calls. In addition, social networks are available with
                                          fast 3G like <a id="apps-link" href="http://twitter.com">Twitter</a>, <a id="apps-link" href="http://facebook.com">Facebook</a>, <a id="apps-link" href="http://vk.com">VK</a>.
                                          </h><br /><br />
                                          <h class="sub-better">Make your photos available for everyone for likes or dislikes, like <a id="apps-link" href="http://instagram.com">Instagram</a>.
                                          For each photo, available <a href="www.appstore.com" id="apps-link">Apple Store</a> App called <a id="apps-link" href="www.instaphoto.ru">Instaphoto</a> to share your photos instantly.
                                          </h><br />
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <img src="../../images/business-phones5.png" id="business-phone-full" />
                          </div>
                      </div>
                  </div>
              </div>

              <div class="business-photo-container">
                   <div class="container">
                       <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <div class="business-in-action">
                                  <div class="text-left">
                                      <h class="better-than-imagine">A lot of Cloud Apps</h><br />

                                      <div style="margin-top: 30px">
                                          <h class="sub-better">Cloud providers who provide connectivity from any approved device
                                          will be at an advantage as businesses begin to troubleshoot ways they can continue
                                          to do business in a mobile-preferred workplace. <br /><br /> When a new solution is needed,
                                          businesses will be able to immediately find and download that solution without having to pay
                                          a team of software developers to create one.
                                          </h>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-7"></div>
                        </div>

                   </div>
              </div>

              <div class="text-center">
                  <div class="search-for">
                      <a href="../../phones.php" id="search">Search phone for business ></a>
                  </div>
              </div>';
    }
}