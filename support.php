<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 13.11.2015
 * Time: 16:33
 */

include_once('Controllers\DefaultController.php');
include_once('Model\DefaultModel.php');
include_once('View\DefaultView.php');
//initiate the triad

$model = new DefaultModel();

//It is important that the controller and the view share the model

$controller = new DefaultController($model);

$view = new DefaultView($model);

$controller->actionGetSumOfItems();
$controller->actionGetQuantityOfItems();

$view->DoctypeView( 'support' );

$view->headerView();

echo   '<div class="support-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="com-md-4">
                    <div class="text-center">
                        <h1 class="lead-h">Welcome to our support service!</h1>
                        <p class="sub-h">We are here to help you</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="spacer"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <img src="images/communication.png" />
            </div>
            <div class="col-md-6">
                <div class="txt">
                    <h1>Our support community: </h1>

                    <div class="divider"></div>

                    <p class="lead-p"><b>Email:</b> serdiuk-it@gmail.com</p><br />
                    <p class="sub-p"><b>Phone:</b> (095) 094 82 68</p><br />
                    <p class="sub-p"><b>Address:</b> 5 Knyajiy zaton, Kyiv, Ukraine 02095</p>
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
                    <img src="images/contact.png" style="width: 300px;" class="img-contact" />
                    <h1>Contact us</h1>
                    <p class="contact-p">We are going to help you with any issues with products, shipping details, orders and much more!
                      You could get support by Phone, email, contact form or just in our product
                      center with our costumers
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center">
                    <img src="images/order.png" style="width: 80px;" class="img-contact" />
                    <h1>Find your order</h1>
                    <p class="contact-p">Check the status of your Order <br />
                      See if the product approved and <br />
                      much more!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/support-2.jpg" class="img-contact" />
            </div>
            <div class="col-md-6" style="margin-top: 80px;">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-8">
                        <form role="form" action="get-support.php" method="post">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" name="name" required />
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" required />
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" required />
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary form-control">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </div>';

    $view->actionGetFooter( 'Support' );


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
    </script>
    </body>
    </html>';
