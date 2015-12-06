<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 12:23
 */

include_once('IndexView.php');

class LaptopsView extends IndexView
{

    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getLaptopsPage() {

        $this->DoctypeView( 'notebooks' );
        $this->headerView( 'notebooks' );
        $this->getMain();
        $this->getDesciprition();
        $this->getOrder();
        $this->actionGetFooter( 'notebooks' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="text-center">
                  <h1 class="macbook-header">Macbooks</h1>
                  <p class="macbook-p sub-white">The most powerfull, powerfull up to 12 hours of work!<br/>
                     Thin as well as the best Wi-Fi injector
                  </p>
                  <p><a class="order" href="notebooks.php" style="text-decoration: none">Search laptop for your choice ></a></p>
              </div>

              <div class="bg-overlay"></div>

              <div class="container">
                  <div class="divider-block"></div>
              </div>';
    }

    private function getDesciprition() {

        echo '<div class="text-center">
                  <h1>The best design. For the best performance</h1>
                  <h2 class="sub-white">Same all-day battery life</h2>
                  <p class="sub-h">The best design. For the best performance We designed every aspect of the all-new MacBook Pro with
                   performance in mind. The entire <br />internal structure was built to house the very best high-performance
                   components: all-flash storage, the latest quad-core processors, powerful <br /> discrete graphics, massive
                   amounts of memory. Yet despite packing such an enormous amount of power into such a slim design, we still
                   achieved an <br /> astonishing 7-hour battery life. Together, they make this MacBook Pro the worlds most advanced notebook.
                   <a href="#">Learn more ></a>
                  </p>
              </div>

              <div class="bg-image"></div>

              <div class="container">
                  <div class="divider-block"></div>
              </div>

              <div class="bg-picture"></div>


              <div class="container">
                  <div class="text-center">
                      <h1>Build your life as easy as it could be</h1>
                      <h2 class="sub-white">Powerful apps included</h2>
                      <p class="sub-h">Really usefull apps for Windows 10 like Live Table Calendar, Mail with build-in system sign up.
                       Every new Mac comes with Photos, iMovie, GarageBand, Pages, Numbers, and Keynote. So you can be
                       creative and productive right from the start. You also get great apps for email, sur?ng the
                        web, sending texts, and making FaceTime calls - there even an app for ?nding new apps. <a href="#">Learn more ></a>
                      </p>
                  </div>
              </div>

              <div class="container">
                  <div class="divider-block"></div>
              </div>

              <div class="text-center">
                   <h1>Stunning retina display</h1>
                   <h2 class="sub-white">Best quality for your performance</h2>

                   <p class="sub-h">The Retina display also reduces glare while maintaining incredible color and quality. In fact, <br/>
                   it has a 29 percent higher contrast ratio than a standard MacBook Pro display. IPS technology <br/>
                   gives you a wide, 178-degree view of everything on the screen, so youll see <br/>
                   the difference at practically any angle.
                   </p>
              </div>';
    }

    private function getOrder() {

        echo '<div class="bg-footer"></div>

              <div class="text-center">
                  <a href="notebooks.php" style="text-decoration: none" class="order-now">Order it now ></a>
              </div>';
    }
}