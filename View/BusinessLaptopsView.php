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
                                        <h id="sub-every-phones">When weighing up the advantages and disadvantages of laptop computers,
                                        its important to bear in mind what you\'re comparing them
                                        to and how you plan to use them for your business. Laptops give you the power and flexibility of a
                                        desktop computer, where tablets may be limited in these areas.
                                        </h>
                                    </div>

                                    <img src="../../images/business-laptops7.jpg" id="business-laptop" />

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

                                    <div class="delivering">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h id="main-every-phones">Lightweight, small, practical device to use everywhere</h>

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">Laptops were developed to be used in any place, in any time
                                                with the least possible expenditure of energy and problems. Contact your friends by <a id="link-laptops" href="http://www.apple.com/ios/facetime/">Facetime</a>,
                                                make a lot of photos and instantly throw it to <a id="link-laptops" href="https://www.instagram.com/">Instagram.</a></h>
                                            </div>
                                            <div class="col-md-4">
                                                <h id="main-every-phones">Usability of newest Apple MAC OS X</h>

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">Newly released <a id="link-laptops" href="http://www.apple.com/osx/">MAC OS X</a> developed for usability, high performance thats makes your communication
                                                with laptops instant. Developed <a id="link-laptops" href="https://www.apple.com/support/ios/">IOS Apps</a> makes your schedule perfect, games to be multi-tasking, highly performed.</h>
                                            </div>
                                            <div class="col-md-4">
                                                <h id="main-every-phones">Multi-platform, highly productive Windows 10</h>

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">In our era of rapid technological development, every time is going to be done new innovations.
                                                Microsoft has released <a id="link-laptops" href="https://www.microsoft.com/uk-ua/software-download/windows10">Windows 10</a> to make your life lightweight with newly developed Apps like VK, Calendar, Clocks.
                                                Interactive keyboard was made to do your work naturally without using native keyboard</h>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="../../images/business-laptops6.png" id="business-laptop" />

                                    <div id="education-divider"></div>

                                    <h id="main">Feel free with battery life of 8 up to 10 hours. Battery life</h>

                                    <div class="delivering">

                                        <img src="../../images/laptops.jpg" id="business-laptop-no-margin" />

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h id="main-every-phones">Speed & Performance</h>

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">There is also the keyboard and optional mouse input methods, making it much easier to type
                                                for extended periods on a laptop than it is on a tablet. Laptops are typically much faster
                                                than tablets, which run only basic operating systems.
                                            </div>
                                            <div class="col-md-4">
                                                <h id="main-every-phones">Optional Battery life</h>

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">Laptops can now boast similar battery
                                                performance to tablets, with Apples 2013 MacBook Air offering a 12-hour battery life,
                                                significantly more than the 10 hours offered by the most recent devices.</h>
                                            </div>
                                            <div class="col-md-4">
                                                <h id="main-every-phones">Usability / Contact abilities</h>

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">Laptops are really useful in a day-to-day life
                                                Every cafe has wi-fi, so you can speak up with your supervisor or
                                                employees using <a id="link-laptops" href="http://www.skype.com">Skype</a>, <a id="link-laptops" href="http://www.viber.com">Viber</a> for free. By this, you can internationally
                                                communicate with each other from lots of countries!</h>
                                            </div>
                                        </div>

                                        <div style="margin-bottom: 70px;"></div>
                                    </div>

                                </div>
                           </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>';
    }
}