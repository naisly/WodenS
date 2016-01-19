<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 27.11.2015
 * Time: 12:09
 */

include_once('IndexView.php');

class PhonesView extends IndexView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getPhonesPage() {

        $this->DoctypeView( 'Phones' );
        $this->headerView( 'phones' );
        $this->getMain();
        $this->getBlocks();
        $this->actionGetFooter( 'Phones' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="text-center" style="margin-top: 100px;">
   			      <h1 class="header">';

        echo $this->model->Translate('Phones');

        echo       '</h1>
			      <p class="the-only">';

        echo $this->model->Translate('The only thing that can change your life absolutely.');

        echo     '</p>
			      <h class="describe">';

        echo $this->model->Translate('Describe new possibilities.');

        echo     '</h><br />
			      <div style="margin-top: 15px; margin-bottom: 30px;">
                      <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'education/phones/" style="text-decoration: none">';

        echo $this->model->Translate('For education');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                      <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'business/phones/" style="text-decoration: none">';

        echo $this->model->Translate('For business');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                      <a id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'phones/buy-phone/" style="text-decoration: none;">';

        echo $this->model->Translate('Buy');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                  </div>
	          </div>

	          <img src="/images/phones-category-white.png" class="full-image-cascade" />

              <div class="container">
	              <div class="divider-phones"></div>
	          </div>';
    }

    private function getBlocks() {

        echo '<div class="container">
                  <div class="row" style="margin-top: 8%; margin-bottom: 8%;">
                      <div class="col-sm-4 text-left" style="margin-top: 5%;">
                          <h1 id="iphone" class="fc">';

        echo $this->model->Translate('Most people have at least a simple, if not sophisticated, mobile phone. These devices are convenient to carry around and you can use them on the go as long as there is network coverage wherever you are. Mobile phones have clearly made it easier to communicate.') . "<br />" . "<br />";

        echo $this->model->Translate("Although the mobile phone doesn't guarantee safety, you can use it to make calls whenever there is an emergency.");

        echo             '</h1>
                      </div>
                      <div class="col-sm-8"><img src="/images/phones-three-pos-gl.png" class="full-image-cascade"></div>
                  </div>
              </div>

              <div class="phones-category-gl container">
                  <div class="row">
                      <div class="col-md-6"></div>
                      <div class="col-md-4" style="margin-top: 47%; margin-bottom: 8%;" id="for-small-drop-up">
                              <h class="sub-education" style="font-size: 30px;">';

        echo $this->model->Translate('Thin, powerful and awesome.');

        echo                 '</h><br /><br />
                              <h class="sub-education">';

        echo $this->model->Translate('Change your way of thinking. Interact with each other. Awesome Apps for your needs.');

        echo             '</h><br /><br />

                          <a id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'education/phones/" style="text-decoration: none" class="search-education">';

        echo $this->model->Translate('Search for education');

        echo         ' ' . '<img src="/images/arrow-blue-f1.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
              </div>


              <div class="container" id="for-small-margin">
                  <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-3" style="margin-top: 15%;">
                          <h1 id="iphone" class="fc">';

        echo $this->model->Translate('With the upgrades made year in, year out, mobile phones are becoming more like computers with the added benefit of portability.') . "<br />" . "<br />";

        echo $this->model->Translate('One can receive and send emails, browse websites, download games and videos, book flight tickets, and even chat with friends.');

        echo             '</h1>
                      </div>
                      <div class="col-sm-6">
                          <img src="/images/phones-iphone-desc.png" class="full-image-cascade" />
                      </div>
                      <div class="col-sm-2"></div>
                  </div>
              </div>

              <div class="phones-category-xs container">
                  <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4 high-resolution-gl-xs-margin" id="sub-for-small-drop-up">
                          <h class="sub-education" style="font-size: 30px;">';

        echo $this->model->Translate('Be productive, move forward.');

        echo             '</h><br /><br />
                          <h class="sub-education">';

        echo $this->model->Translate('Reimagine work and tasks with next-generation Apps. Transform your business strategy. Be mobile as much as possible. Go in lockstep with future.');

        echo              '</h><br /><br />

                          <a id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'education/phones/" style="text-decoration: none" class="search-education">Search for business <img src="/images/arrow-blue-f1.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-4"></div>
                  </div>
              </div>';
    }
}