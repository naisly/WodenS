<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 14.12.2015
 * Time: 0:35
 */

include_once('DefaultView.php');

class EducationView extends DefaultView
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

    public function getEducationPage() {

        $this->DoctypeView( 'Education' );
        $this->headerView();

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    private function getMain() {

        echo '<div class="container">
                  <div class="row text-center content-header">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                          <h class="lots-of-ways">';

        echo $this->model->Translate('Even lots of ways to make your education more convenient');

        echo              '</h>
                      </div>
                      <div class="col-md-2"></div>
                  </div>
              </div>
              <img src="/images/education-xs.png" class="full-image-cascade" />
              <div class="text-center">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8 container-content">
                               <h class="main-header">';

        echo $this->model->Translate('With usability, handy Phones, powerful as well as practical, comfortable and easy to use Laptops, you have everything to start thinking in a new way that gonna change your mind in more productive, practical way.');

        echo                   '</h>

                               <div id="content-divider"></div>

                          </div>
                          <div class="col-md-2"></div>
                      </div>
                  </div>
              </div>

              <div class="container">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-4 container-content">
                          <h class="category-main">';

        echo $this->model->Translate('Phones in education');

        echo             '</h><br /><br />

                          <h class="sub-category">';

        echo $this->model->Translate('Phones have powerful, reusable, complex apps and features to make your schedule flexible as well as precise, lightly usable together with many devices.');

        echo              '</h><br /><br />

                          <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'education/phones/" style="text-decoration: none">';

        echo $this->model->Translate('Learn more');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-4 container-content">
                          <h class="category-main">';

        echo $this->model->Translate('Laptops in education');

        echo              '</h><br /><br />

                          <h class="sub-category">';

        echo $this->model->Translate('Meanwhile its thin and powerful handy computer, the Laptop consider every detail to make your study exciting as well as pleasurable. Describe new possibilities.');

        echo              '</h><br /><br />

                          <a class="links" id="main-link" href="/';

        if ($_SESSION['language'] !== 'us') {
            echo $_SESSION['language'] . '/';
        }

        echo 'education/laptops/" style="text-decoration: none">';

        echo $this->model->Translate('Learn more');

        echo         ' ' . '<img src="/images/arrow-blue.png" width="20" height="20"/></a>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>';
    }
}