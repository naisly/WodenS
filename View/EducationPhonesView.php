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

        $this->DoctypeView( 'Phones - Education' );
        $this->headerView();

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    private function getMain() {

        echo '<div class="container middle">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                           <div class="bordered-middle">
                                <div class="text-center">
                                    <h id="main">';

        echo $this->model->Translate('Useful cells in education to increase quality of received knowledge');

        echo                       '</h><br />

                                    <div class="content-phones">
                                        <h id="sub-every-phones">';

        echo $this->model->Translate('Every phone is packed and designed for usability with software, built-in applications that makes you greater productive. And in this era of technological development, increased compound between laptops and TVs. With easy up-to-day tasks, it makes your life absolutely complete and plain');

        echo                           '</h>
                                    </div>

                                    <img src="/images/education-phones3.jpg" id="education-phone" />

                                    <div class="usefull-apps">
                                        <h id="main">';

        echo $this->model->Translate('Awesome Student and Teacher Apps');

        echo                           '</h><br />

                                        <div class="content-phones">
                                            <h id="sub-every-phones"><a style="color: #1b6d85; text-decoration: none" href="http://dropbox.com">Dropbox</a>: ';

        echo $this->model->Translate('One of my most beloved apps is dropbox. Dropbox allows all my computers and my phone to interact together. So the photo I take on my cell phone can be put in my Dropbox app and now it is available on all my devices, love it!');

        echo                                '</h>
                                        </div>
                                    </div>

                                    <img src="/images/dropbox.png" width="170" height="170" id="dropbox" />

                                    <div class="content-phones">
                                        <h id="sub-every-phones"><a style="color: #1b6d85; text-decoration: none" href="http://www.adobe.com/ru/products/photoshop.html">Photoshop</a>: ';

        echo $this->model->Translate('Next, in line is going app is photoshop. Photoshop allows you to improve photos and interact lots of items together. Its now available on phones based on Windows OS');

        echo                            '</h>
                                    </div>

                                    <img src="/images/education-phones1.jpg" id="photoshop" /><br />

                                    <div class="delivering">
                                        <h id="main">';

        echo $this->model->Translate('Delivering Materials via Phone using developed cross usage platforms');

        echo                           '</h>

                                        <div class="content-phones">
                                            <h id="sub-every-phones">';

        echo $this->model->Translate('As more curriculum materials are delivered digitally creative teachers are delivering materials directly to students on their personal cell phones. One such platform is');

        echo ' <a href="http://schooltown.net">School Town</a>.';

        echo $this->model->Translate('This learning platform makes it possible for teachers and students to collaborate in discussion areas and chat with each other making blended learning a real possibility.');

        echo                               '</h>
                                        </div>
                                    </div>

                                    <img src="/images/education-phones.jpg" id="delivering" />

                                    <h id="main">';

        echo $this->model->Translate('Usage of phones through adults nowadays');

        echo                        '</h>

                                    <div class="delivering">
                                        <h id="sub-every-phones">';

        echo $this->model->Translate('Today, over 85% of people use mobile phones to stay connected (to get homework tasks, getting data, compare answers etc.) organized (clocks, calculator) and entertained. And, now that mobile phones are capable of doing much more than simply calling and texting, they have started to replace other devices like cameras and desktop computers.');

        echo                            '</h>
                                    </div>

                                    <img src="/images/education-phones4.jpg" id="chart" />
                                </div>
                           </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>';
    }
}