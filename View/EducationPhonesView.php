<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 06.12.2015
 * Time: 21:00
 */

include_once('DefaultView.php');

class EducationPhonesView extends DefaultView
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

    public function getEducationPhones() {

        $this->DoctypeView( 'education-phones' );
        $this->headerView( 'education' );

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
                                  <h class="fixed-header">Phones in Education</h>
                              </div>
                              <div class="buy-main pull-right">
                                  <a class="btn btn-primary button-buy" href="../index.php">Buy</a>
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
                                    <h id="main">Useful cells in education to increase quality of received knowledge</h><br />

                                    <div class="content-phones">
                                        <h id="sub-every-phones">Every phone is packed and designed for usability with software, built-in <br /> applications
                                        that makes you greater productive. And in this era of technological <br /> development, increased compound
                                        between laptops and TVs. With easy up-to-day tasks, <br /> it makes your life absolutely complete and plain
                                        </h>
                                    </div>

                                    <img src="../../images/education-phones3.jpg" id="education-phone" />

                                    <div class="usefull-apps">
                                        <h id="main">Awesome Student & Teacher Apps</h><br />

                                        <div class="content-phones">
                                            <h id="sub-every-phones"><a href="http://dropbox.com">Dropbox</a>: One of my most beloved apps is dropbox. Dropbox allows all my computers
                                            and my phone to interact together. So the photo I take on my cell phone can be put in my Dropbox app and
                                            now it is available on all my devices, love it!
                                            </h>
                                        </div>
                                    </div>

                                    <img src="../../images/dropbox.png" width="170" height="170" id="dropbox" />

                                    <div class="content-phones">
                                        <h id="sub-every-phones"><a href="http://www.adobe.com/ru/products/photoshop.html">Photoshop</a>:  Next, in line is going app is photoshop. Photoshop
                                        allows you to improve photos and interact lots of items together. Its now available on phones based on Windows OS</h>
                                    </div>

                                    <img src="../../images/education-phones1.jpg" id="photoshop" /><br />

                                    <div class="delivering">
                                        <h id="main">Delivering Materials via Phone using developed cross usage platforms</h>

                                        <div class="content-phones">
                                            <h id="sub-every-phones">As more curriculum materials are delivered digitally creative teachers are delivering materials directly to students on their
                                            personal cell phones. One such platform is <a href="http://schooltown.net">School Town</a>. This learning platform makes it possible for teachers and
                                            students to collaborate in discussion areas and chat with each other making blended learning a real possibility.</h>
                                        </div>
                                    </div>

                                    <img src="../../images/education-phones.jpg" id="delivering" />

                                    <h id="main">Usage of phones through adults nowadays</h>

                                    <div class="delivering">
                                        <h id="sub-every-phones">Today, over 85% of people use mobile phones to stay connected (to get homework tasks, getting data, compare answers etc.)
                                        organized (clocks, calculator) and entertained. And, now that mobile phones are capable of doing much more than simply calling and texting, they
                                        have started to replace other devices like cameras and desktop computers.</h>
                                    </div>

                                    <img src="../../images/education-phones4.jpg" id="chart" />
                                </div>
                           </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>';
    }
}