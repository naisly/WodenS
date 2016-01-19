<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 12:42
 */

include_once('IndexView.php');

class SupView extends IndexView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getSupportPage() {

        $this->DoctypeView( 'Support' );
        $this->headerView( 'support' );
        $this->getMain();
        $this->getContactInfo();
        $this->getContactForm();
        $this->actionGetFooter( 'Support' );
        $this->getGoogleMapsScript();
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="support-bg">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="com-md-4">
                              <div class="text-center">
                                  <h1 class="lead-h">' . $this->model->Translate('Welcome to our support service') . '!</h1>
                                  <p class="sub-h">' . $this->model->Translate('We are here to help you') . '</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="spacer"></div>';
    }

    private function getContactInfo() {

        echo '<div class="container">
                  <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-4">
                          <img src="/images/communication.png" />
                      </div>
                      <div class="col-md-6">
                          <div class="txt">
                              <h1>' . $this->model->Translate('Our Main support community') . ': </h1>

                              <div class="divider" style="width: 100%;"></div>

                              <p class="lead-p"><b>' . $this->model->Translate('Email') . ':</b> serdiuk-it@gmail.com</p><br />
                              <p class="sub-p"><b>' . $this->model->Translate('Phone') . ':</b> (095) 094 82 68</p><br />
                              <p class="sub-p"><b>' . $this->model->Translate('Address') . ':</b> 5 Knyajiy zaton, Kyiv, Ukraine 02095</p>
                          </div>

                      </div>
                  </div>
              </div>

              <div class="divider"></div>

              <div id="map"></div>

              <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="text-center">
                              <a class="main-nav" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'contact/"><img src="/images/contact.png" style="width: 300px;" class="img-contact" />
                              <h1 style="color: #444;">' . $this->model->Translate('Contact us') . '</h1></a>
                              <p class="contact-p">' . $this->model->Translate('We are going to help you with any issues with products, shipping details, orders and much more! You could get support by Phone, email, contact form or just in our product center with our costumers') . '
                              </p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="text-center">
                              <a class="main-nav" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'order-status/"><img src="/images/order.png" style="width: 80px;" class="img-contact" />
                              <h1 style="color: #444;">' . $this->model->Translate('Find your order') . '</h1></a>
                              <p class="contact-p">' . $this->model->Translate('Check the status of your Order') . '<br />' .
                              $this->model->Translate('See if the product approved and') . '<br />' .
                              $this->model->Translate('much more') . '!<br />
                              </p>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="divider"></div>';
    }

    private function getContactForm() {

        echo '<div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          <img src="/images/support-2.jpg" class="full-image-cascade img-contact" />
                      </div>
                      <div class="col-md-6" style="margin-top: 80px;">
                          <div class="row">
                              <div class="col-md-3"></div>
                              <div class="col-md-8" id="main-form">
                                  <form role="form" action="get-support" method="post">
                                      <div class="form-group">
                                          <label for="name">' . $this->model->Translate('Your Name') . '</label>
                                          <input type="text" class="form-control" name="name" required />
                                      </div>
                                      <div class="form-group">
                                          <label for="email">' . $this->model->Translate('Your Email') . '</label>
                                          <input type="email" class="form-control" name="email" required />
                                      </div>
                                      <div class="form-group">
                                          <label for="subject">' . $this->model->Translate('Subject') . '</label>
                                          <input type="text" class="form-control" name="subject" required />
                                      </div>
                                      <div class="form-group">
                                          <textarea name="message" class="form-control" rows="10"></textarea>
                                      </div>
                                      <div class="form-group">
                                          <button class="btn btn-primary form-control">' . $this->model->Translate('Submit') . '</button>
                                      </div>
                                  </form>
                              </div>
                              <div class="col-md-1"></div>
                          </div>
                      </div>
                  </div>
              </div>';
    }

    private function getGoogleMapsScript() {

        echo  '<script type="text/javascript">

               var map;
               function initMap() {
                     var myLatLng = {lat: 50.4018575010069, lng: 30.6265022835628};

                     // Create a map object and specify the DOM element for display.
                     var map = new google.maps.Map(document.getElementById("map"), {
                        center: myLatLng,
                        scrollwheel: false,
                        zoom: 14
                     });

                     // Create a marker and set its position.
                     var marker = new google.maps.Marker({
                        map: map,
                        position: {lat: 50.4018575010069, lng: 30.6265022835628},
                        title: "Hello World!"
                     });
               }

            </script>
            <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYh1m89QdvogaeeaJyNuLBsX0ljdxmuK4&callback=initMap">
            </script>';

        if(isset($_POST['shopping_help'])){
            echo '<script>
                      document.getElementById("main-form").scrollIntoView()
                  </script>';
        }
    }
}