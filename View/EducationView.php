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
        $this->headerView( 'education' );

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    private function getMain() {

        echo '<div class="overlay">
                  <div class="content">
                      <div class="text-center content-header">
                           <h class="lots-of-ways">Even lots of ways to make your <br /> education more convenient</h>
                      </div>
                  </div>
              </div>
              <div class="text-center">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8 container-content">
                               <h class="main-header">With usability, handy Phones, powerful as well as practical, comfortable and
                               easy to use Laptops, you have everything to start thinking in a new way that gonna change your mind
                               in more productive, practical way.</h>
                          </div>
                          <div class="col-md-2"></div>
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-4 container-content">
                          <h class="category-main">Phones in education</h><br /><br />

                          <h class="sub-category">Phones have powerful, reusable, complex apps and features to make your schedule
                          flexible as well as precise, lightly usable together with many devices.</h><br /><br />

                          <h><a class="learn-more" href="phones/">Learn more ></a></h>
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-4 container-content">
                          <h class="category-main">Laptops in education</h><br /><br />

                          <h class="sub-category">Meanwhile its thin and powerful handy computer, the Laptop consider every detail
                          to make your study exciting as well as pleasurable. </h><br /><br />

                          <h><a class="learn-more" href="laptops/">Learn more ></a></h>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>';
    }
}