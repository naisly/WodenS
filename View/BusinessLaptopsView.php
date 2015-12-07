<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.12.2015
 * Time: 17:48
 */

include_once('DefaultView.php');

class BusinessLaptopsView extends DefaultView
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

    public function getBusinessLaptopsPage() {

        $this->DoctypeView( 'business-laptops' );
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
                                  <h class="fixed-header">Laptops in Business</h>
                              </div>
                              <div class="buy-main pull-right">
                                  <a style="color: white" class="btn btn-primary button-buy" href="../../Notebooks.php">Buy</a>
                              </div>
                          </div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>
              </div>
              <div class="container middle">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                           <div class="bordered-middle">
                                <div class="text-center">
                                    <h id="main">Laptops were developed to make your life <br /> as complicated as possible</h><br />

                                    <div class="content-phones">
                                        <h id="sub-every-phones">When weighing up the <em>advantages</em> and <em>disadvantages</em> of laptop computers,
                                        its important to bear in mind <b>what</b> youre comparing them
                                        to and how you <b>plan to use</b> them for your business. Laptops give you the <b>power and flexibility</b> of a
                                        desktop computer, where tablets may be limited in these areas.
                                        </h>
                                    </div>

                                    <img src="../../images/macbook-pro.jpg" id="business-laptop" />

                                    <div id="education-divider"></div>

                                    <div class="usefull-apps">
                                        <h id="main">Use it everywhere that you want. Portability</h><br />

                                        <div class="content-phones">
                                            <h id="sub-every-phones">Working on the move, away from the office or at a different desk is a lot more <br />
                                            convenient when using a laptop than a desktop. However, in terms of size and weight, tablets <br />
                                            offer even more portability than laptops.
                                            </h>
                                        </div>
                                    </div>

                                    <img src="../../images/macbook-air.jpg" id="business-laptop" />

                                    <div class="content-phones">
                                        <h id="sub-every-phones">Generally speaking, laptops are still significantly more powerful than tablets and <br />
                                        almost up to the level of desktops in capabilities. If you need the most powerful computers <br />
                                        possible -- for video editing, game development or larger screens, for example -- <br/>
                                        then desktops are probably the way to go, but high-end laptops are almost equally capable.</b></h>
                                    </div>

                                    <img src="../../images/business-laptops5.jpg" id="business-laptop" />

                                    <div id="education-divider"></div>

                                    <div class="delivering">
                                        <h id="main">Make your life easier. Flexibility</h>

                                        <div class="content-phones">
                                            <h id="sub-every-phones">There is also the keyboard and optional mouse input methods, making it much easier
                                            to type for extended periods on a laptop than it is on a tablet. Laptops are
                                            typically much faster than tablets, which run only basic operating systems.</b></h>
                                        </div>
                                    </div>

                                    <img src="../../images/business-laptops6.png" id="business-laptop" />

                                    <div id="education-divider"></div>

                                    <h id="main">Feel free with battery life of 8 up to 10 hours. Battery life</h>

                                    <div class="delivering">
                                        <h id="sub-every-phones">There is also the keyboard and optional mouse input methods, making it much easier to type
                                        for extended periods on a laptop than it is on a tablet. Laptops are typically much faster
                                        than tablets, which run only basic operating systems. Laptops can now boast similar battery
                                        performance to tablets, with Apples 2013 MacBook Air offering a 12-hour battery life,
                                        significantly more than the 10 hours offered by the most recent iPad.</h>
                                        </h>
                                    </div>

                                    <img src="../../images/laptops.jpg" id="business-laptop" />
                                </div>
                           </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>';
    }
}