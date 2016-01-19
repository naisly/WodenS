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

        echo '<div class="main-content-background">
                   <div class="container">
                       <div class="row" style="margin-top: 20px;">
                           <div class="col-md-3">
                                <h class="main-header">';

        echo $this->model->Translate('Contact Us');

        echo                   '</h>
                           </div>
                           <div class="col-md-5"></div>
                           <div class="col-md-4">
                                <ul class="sub-navigation" style="margin-left: -13px;">
                                    <li><a id="nav-links" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'support/">';

        echo $this->model->Translate('Support');

        echo                       '</a></li>
                                    <li><a id="nav-links" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'store/">';

        echo $this->model->Translate('Our offices');

        echo                   '</a></li>
                                </ul>
                           </div>
                       </div>
                   </div>
              </div>
              <div class="text-center">
                  <div class="contacting-woden-sims">
                       <h class="contact">';

        echo $this->model->Translate('Contacting Woden Sims');

        echo          '</h>
                  </div>
              </div>
              <div class="container">
                   <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-5">
                            <h class="header-category">';

        echo $this->model->Translate('Sales category');

        echo               '</h><br /><br />

                            <h class="sub-header-category">';

        echo $this->model->Translate('Woden Sims Online Store');

        echo               '</h><br />
                            <h class="content-header">';

        echo $this->model->Translate('The');

        echo '<a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo '">Woden Sims ';

        echo $this->model->Translate('Online Store');

        echo '</a>';

        echo $this->model->Translate('is a quit place to purchase any quality or any product category from Apple, Samsung and other manufacturers. You can buy online or by call +38 (095) 094 82 68 or other phones as follows on this page 7 days a week from 10 a.m. to 19 p.m. UTC');

        echo '<br /><br />';

        echo $this->model->Translate('You can get information about an order placed on Woden Sims Store by');

        echo '<a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'order-status/">';

        echo $this->model->Translate('Order Status');

        echo '</a>';

        echo $this->model->Translate('page. If you would prefer, you can also check the order status via Phone,');

        echo '<span style="color: #ac5050">';

        echo $this->model->Translate('all phones available for each country of our company is provided below.');

        echo '</span></h><br /><br />

                            <h class="sub-header-category">';

        echo $this->model->Translate('Get Financing for each of your device bought in our Store');

        echo               '</h><br />
                            <h class="content-header">';

        echo $this->model->Translate('Woden Sims Financial offers financing for every product you bought. It\'s available on categories:');

        echo '<a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'phones/">';

        echo $this->model->Translate('Phones');

        echo '</a>, <a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'laptops/">';

        echo $this->model->Translate('Laptops');

        echo '</a>,
                            <a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'tv/">';

        echo $this->model->Translate('TVs.');

        echo '</a> For each category, for <a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'education/">';

        echo $this->model->Translate('Education');

        echo '</a>,
                            for <a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/">';

        echo $this->model->Translate('Business');

        echo '</a>';

        echo $this->model->Translate('you can find out hot deals for each Area of work.');

        echo '</h><br /><br />

                            <h class="sub-header-category">';

        echo $this->model->Translate('Consult using Online Support Service');

        echo '</h><br />
                            <h class="content-header">';

        echo $this->model->Translate('Visit our');

        echo ' <a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'support/">';

        echo $this->model->Translate('Support');

        echo '</a>';

        echo $this->model->Translate('page to ask any questions that you want. We will respond you as soon as possible.');

        echo '</h>
                       </div>
                       <div class="col-md-5" style="margin-top: 70px;">
                            <h class="sub-header-category">';

        echo $this->model->Translate('Getting items for Business');

        echo               '</h><br />
                            <h class="content-header">';

        echo $this->model->Translate('If you want to get items for your');

        echo '<a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/">';

        echo $this->model->Translate('business');

        echo '</a>';

        echo $this->model->Translate('or be consulted in area of using it call +38 (095) 094 82 68 or other phones supported by Woden Sims.');

        echo '<span style="color: #ac5050">';

        echo $this->model->Translate('All phones available for each country of our company is provided below.');

        echo '</span></h><br /><br />

                            <h class="sub-header-category">';

        echo $this->model->Translate('Getting items for Education');

        echo               '</h><br />
                            <h class="content-header">';

        echo $this->model->Translate('If you want to get items for your');

        echo '<a id="default-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'education/">';

        echo $this->model->Translate('education');

        echo '</a>';

        echo $this->model->Translate('or be consulted in area of using it call +38 (095) 531 618 31 or other phones supported by Woden Sims.');

        echo '<span style="color: #ac5050">';

        echo $this->model->Translate('All phones available for each country of our company is provided below.');

        echo '</span></h><br /><br />
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
                            <img src="/images/czech-republic-small.jpg" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">';

        echo $this->model->Translate('Praha, Czech Republic');

        echo '</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">';

        echo $this->model->Translate('Rosmarin Business Center');

        echo                   '</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/images/rosmarin-business-center.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>';

        echo $this->model->Translate('Woden Sims Store');

        echo '<span id="default-link">+420 666 905 222</span></li>
                                        <li>';

        echo $this->model->Translate('Support Service');

        echo '<span id="default-link">+420 666 905 333</span></li>
                                        <li>';

        echo $this->model->Translate('Office');

        echo '<span id="default-link">+420 666 905 444</span></li>
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
                            <img src="/images/poland-small.jpg" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">';

        echo $this->model->Translate('Warsaw, Poland');

        echo                '</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">';

        echo $this->model->Translate('International Business Center');

        echo                   '</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/images/poland-business-center.JPG" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>';

        echo $this->model->Translate('Woden Sims Store');

        echo '<span id="default-link">+48 454 999 123</span></li>
                                        <li>';

        echo $this->model->Translate('Support Service');

        echo '<span id="default-link">+48 454 888 123</span></li>
                                        <li>';

        echo $this->model->Translate('Office');

        echo '<span id="default-link">+48 454 888 123</span></li>
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
                            <img src="/images/lithuania-small.jpg" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">';

        echo $this->model->Translate('Vilnius, Lithuania');

        echo               '</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">';

        echo $this->model->Translate('Vilnius International Business Center');

        echo                    '</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/images/vilnius-business-center.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>';

        echo $this->model->Translate('Woden Sims Store');

        echo '<span id="default-link">+370 567 888 90</span></li>
                                        <li>';

        echo $this->model->Translate('Support Service');

        echo '<span id="default-link">+370 678 888 90</span></li>
                                        <li>';

        echo $this->model->Translate('Office');

        echo '<span id="default-link">+370 444 888 90</span></li>
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
                            <img src="/images/ukraine-small.png" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">';

        echo $this->model->Translate('Lviv, Ukraine');

        echo               '</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">';

        echo $this->model->Translate('King Cross Leopolis');

        echo                   '</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/images/lviv-king-cross-leopolis.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>';

        echo $this->model->Translate('Woden Sims Store');

        echo '<span id="default-link">+38 095 666 77 77</span></li>
                                        <li>';

        echo $this->model->Translate('Support Service');

        echo '<span id="default-link">+38 066 666 77 77</span></li>
                                        <li>';

        echo $this->model->Translate('Office');

        echo '<span id="default-link">+38 063 666 77 77</span></li>
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
                            <img src="/images/ukraine-small.png" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">';

        echo $this->model->Translate('Kiev, Ukraine');

        echo               '</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">';

        echo $this->model->Translate('Gulliver Business Center');

        echo                    '</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/images/kiev-gulliver.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>';

        echo $this->model->Translate('Woden Sims Store');

        echo '<span id="default-link">+38 095 094 82 68</span></li>
                                        <li>';

        echo $this->model->Translate('Support Service');

        echo '<span id="default-link">+38 095 094 82 86</span></li>
                                        <li>';

        echo $this->model->Translate('Office');

        echo '<span id="default-link">+38 095 094 82 77</span></li>
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
                            <img src="/images/russia-small.jpg" width="30" height="30" style="margin-bottom: 17px;"/>
                            <h class="header-category">';

        echo $this->model->Translate('Moscow, Russia');

        echo               '</h><br /><br />

                            <div class="area-name">
                                <h class="area-header">';

        echo $this->model->Translate('Moscow International Business Center Facto');

        echo                    '</h>
                            </div>

                            <div id="warning">
                                <h class="warning">';

        echo $this->model->Translate('Important! Due to political tensions Communicational personal leaved');

        echo '<br />';

        echo $this->model->Translate('Moscow and unfortunately, the Open Line not working now!');

        echo                    '</h>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="/images/kharkiv-sun-mall.jpg" id="business-center" />
                                </div>
                                <div class="col-md-6">
                                    <ul class="contact-data">
                                        <li>';

        echo $this->model->Translate('Woden Sims Store');

        echo '<span id="default-link">+7 499 095 666 77</span></li>
                                        <li>';

        echo $this->model->Translate('Support Service');

        echo '<span style="color: #ac5050;">Not Available</span></li>
                                        <li>';

        echo $this->model->Translate('Office');

        echo '<span style="color: #ac5050;">Not Available</span></li>
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