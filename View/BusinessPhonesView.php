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

        $this->DoctypeView( 'Phones - Business' );
        $this->headerView( 'business' );

        $this->getMain();
        $this->actionGetFooter( 'Phones - Business' );
    }

    private function getMain() {

        echo '<div class="container">
                  <div class="text-center">
                      <div class="main-container">
                          <h class="moving-forward">';

        echo $this->model->Translate('Moving in lockstep with business');

        echo '</h><br />
                      </div>
                      <div class="row sub-container">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                              <h class="sub-main-header">';

        echo $this->model->Translate('When you use IOS or Android technology as one of the main business skills, new possibilities are available. As many people that have phone, they love their work, productivity is increasing in a simple working day. Phones enable your mind with skills that never ever thought about before and operate with them in random tasks.');

        echo                 '</h>
                          </div>
                          <div class="col-md-2"></div>
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
                                      <h class="better-than-imagine">';

        echo $this->model->Translate('Better than you can just imagine');

        echo                          '</h><br />

                                      <div style="margin-top: 30px">
                                          <h class="sub-better">';

        echo $this->model->Translate('With new tools for IT in IOS, great security you can hold any data in your Iphone.Powerful productivity features are pretty useful for your users needs and to make your workday mo productive.');

        echo '<br /><br />';

        echo $this->model->Translate('With Iphone, you are not going to miss any note for your business and stay up-to-date everywhere');

        echo                              '</h>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <img src="/images/business-phones3.png" id="business-phone" />
                          </div>
                      </div>
                  </div>
              </div>

              <div class="business-photo">
                   <div class="container">
                       <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <div class="business-in-action">
                                  <div class="text-left for-small-devices-text">
                                      <h class="better-than-imagine" style="color: #ac5050">';

        echo $this->model->Translate('Apps for Everything');

        echo                         '</h><br />

                                      <div style="margin-top: 30px">
                                          <h class="sub-better">';

        echo $this->model->Translate('The suite of electronic tools a business needs to conduct daily operations is shifting. At one time, a business owner needed an Office suite, e-mail, and industry-specific software to open for business.');

        echo                             '<br /><br />';

        echo $this->model->Translate('Everything from billing and scheduling to project management may be moved to Cloud-based apps, allowing small businesses with small budgets to compete against much larger companies.');

        echo                              '</h>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-7"></div>
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
                                      <h class="better-than-imagine">';

        echo $this->model->Translate('Reimagine your life with Iphone and Apps');

        echo '</h><br />

                                      <h class="sub-better">';

        echo $this->model->Translate('Be in touch with others by using phone. For non-resident calls IOS or Android phones have');

        echo '<a id="apps-link" href="http://skype.com">Skype</a>';

        echo $this->model->Translate('or');

        echo '<a id="apps-link" href="http://skyp.com">Viber</a>';

        echo $this->model->Translate('for free calls. In addition, social networks are available with fast 3G like');

        echo '<a id="apps-link" href="http://twitter.com">Twitter</a>, <a id="apps-link" href="http://facebook.com">Facebook</a>, <a id="apps-link" href="http://vk.com">VK</a>.
                                          </h><br /><br />
                                          <h class="sub-better">';

        echo $this->model->Translate('Make your photos available for everyone for likes or dislikes, like');

        echo '<a id="apps-link" href="http://instagram.com">Instagram</a>.';

        echo $this->model->Translate('For each photo, available');

        echo '<a href="www.appstore.com" id="apps-link">Apple Store</a>';

        echo $this->model->Translate('App called');

        echo '<a id="apps-link" href="www.instaphoto.ru">Instaphoto</a>';

        echo $this->model->Translate('to share your photos instantly.');

        echo                             '</h><br />
                                      </div>
                                  </div>
                              </div>
                          <div class="col-md-6">
                              <img src="/images/business-phones5.png" id="business-phone-full" />
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
                                  <div class="text-left for-small-devices-text">
                                      <h class="better-than-imagine" style="color: #ac5050">';

        echo $this->model->Translate('A lot of Cloud Apps');

        echo '</h><br />

                                      <div style="margin-top: 30px">
                                          <h class="sub-better">';

        echo $this->model->Translate('Cloud providers who provide connectivity from any approved device will be at an advantage as businesses begin to troubleshoot ways they can continue to do business in a mobile-preferred workplace.');

        echo '<br /><br />';

        echo $this->model->Translate('When a new solution is needed, businesses will be able to immediately find and download that solution without having to pay a team of software developers to create one.');

        echo                              '</h>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-7"></div>
                        </div>

                   </div>
              </div>';
    }
}