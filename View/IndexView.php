<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 11:57
 */

include_once('DefaultView.php');

class IndexView extends DefaultView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getIndexPage() {

        $this->DoctypeView( 'Index' );
        $this->headerView( 'index' );
        $this->getSlider();
        $this->getColumns();
        $this->getSliderScript();
        $this->actionGetFooter( 'Index' );
        $this->endHTML();
    }

    private function getSlider() {

        echo '<div id="slider">
                  <ul class="bxslider">
                      <li><a href="notebooks.php"><img src="images/laptop1.jpg"></a></li>
                      <li><a href="phones-all.php"><img src="images/i6.jpeg"></a></li>
                      <li><a href="devices.php"><img src="images/skimn-ipad.png"></a></li>
                      <li><a href="tv.php"><img src="images/imac.png"></a></li>
                  </ul>
              </div>';
    }

    private function getColumns() {

        echo '<div class="container margin-top">
              <h1>Devices</h1>
              <p id="only">The only thing thats changed is everything.</p>
              <div class="row">
                  <div class="col-sm-3">
                      <a href="notebooks.php"><img src="images/laptop.png" style="display: block; margin-left: auto; margin-right: auto"></a>
                      <p>Now available with Windows 10, 7, XP, DOS, Linux. </p>
                  </div>
                  <div class="col-sm-3">
                      <a href="phones-all.php"><img src="images/htc.png" style="display: block; margin-left: auto; margin-right: auto"></a>
                      <p>Great Android OS</p>
                  </div>
                  <div class="col-sm-3">
                      <a href="phones-all.php"><img src="images/smartphone.png" style="display: block; margin-left: auto; margin-right: auto"></a>
                      <p>Nobody knows whats tommorrows technology are going to be</p>
                  </div>
                  <div class="col-sm-3">
                      <a href="devices.php"><img src="images/apple-watch.jpg" style="display: block; margin-left: auto; margin-right: auto"></a>
                      <p>Perfect watches with built-in functions</p>
                  </div>
              </div>
          </div>';
    }

    private function getSliderScript() {

        echo '<script>
              $(document).ready(function(){
                  $(".bxslider").bxSlider({
                      auto: true,
                      pause: 4000,
                      controls: false,
                  });
              });
              </script>';
    }

    protected function endHTML() {

        echo        '</body>
                </html>';
    }
}