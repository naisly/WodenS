<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.12.2015
 * Time: 0:06
 */

include_once('DefaultView.php');

class EducationLaptopsView extends DefaultView
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

    public function getEducationLaptops() {

        $this->DoctypeView( 'Laptops - Education' );
        $this->headerView();

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    public function getMain() {

        echo '<div class="container middle">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                           <div class="bordered-middle">
                                <div class="text-center">
                                    <h id="main">';

        echo $this->model->Translate('Expand your skills of usage Laptops to improve your knowledge in area of education');

        echo                       '</h><br />

                                    <div class="content-phones">
                                        <h id="sub-every-phones">';

        echo $this->model->Translate('Laptop computers are becoming increasingly prevalent in education. Great part of skills required to maintain the device became readily to know all the special. While laptops may present opportunities for distraction, utilizing portable computers in classrooms can yield several significant benefits.');

        echo                           '</h>
                                    </div>

                                    <img src="/images/laptops-falling.png" id="education-laptop" />

                                    <div id="education-divider"></div>

                                    <div class="usefull-apps">
                                        <h id="main">';

        echo $this->model->Translate('A lot of fun for Students & Teachers');

        echo                           '</h><br />

                                        <div class="content-phones">
                                            <h id="sub-every-phones">';

        echo $this->model->Translate('Laptops can provide a high level of interactivity between students, teachers and subject matter. For instance, a teacher could challenge students to find the answer to a question about history or some other subject using their laptops online. This would force students to conduct quick research and use creativity to find the answer than paging through a dense textbook.');

        echo                                    '</h>
                                        </div>
                                    </div>

                                    <img src="/images/laptop-gold.jpg" id="macbook-pro" />

                                    <div class="content-phones">
                                        <h id="sub-every-phones">';

        echo $this->model->Translate('Another potential benefit of using laptops in classrooms is that using computers is more fun for students than simply sitting at a desk and listening to a lecture with a pad of paper and a pen. Students that have fun in the classroom are more likely to come to school.') . '</h>
                                    </div>

                                    <img src="/images/macbook-air.jpg" id="macbook-air" /><br />

                                    <div id="education-divider"></div>

                                    <div class="delivering">
                                        <h id="main">';

        echo $this->model->Translate('Stay organized and remember all work');

        echo                            '</h>

                                        <div class="content-phones">
                                            <h id="sub-every-phones">';

        echo $this->model->Translate('When you have six or more classes, it is easy to misplace a worksheet or forget about an assignment. If teachers distribute assignments digitally, students can easily review their work all in one place. Digital copies of work also help students by making it easy to edit or change work.');

        echo                               '</h>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="delivering">
                                            <div class="col-md-4">
                                                <div class="h-height-every">
                                                    <h class=main-sub-every" style="font-size: 20px;">';

        echo $this->model->Translate('All data in one place');

        echo                                   '</h>
                                            </div><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">';

        echo $this->model->Translate('Control your schedule via Macbook\'s Apps like Clocks or Calendar. Its really easy to make important marks and control your time. Windows provide either those Apps whats make your life absolutely complete');

        echo                                    '</h>
                                            </div>
                                            <div class="col-md-4 margin-for-small-devices">
                                                <div class="h-height-every">
                                                    <h class=main-sub-every" style="font-size: 20px;">';

        echo $this->model->Translate('Collect / Compare all projects');

        echo                                   '</h>
                                            </div><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">';

        echo $this->model->Translate('It\'s really easy to compare your projects with your mates or send your task to your teacher for review. Every project can be saved in one place for an reason to collect all data and rewrite them into another one.');

        echo                                    '</h>
                                            </div>
                                            <div class="col-md-4 margin-for-small-devices">
                                                <div class="h-height-every">
                                                    <h class=main-sub-every" style="font-size: 20px;">';

        echo $this->model->Translate('Edit / Change everywhere');

        echo                                   '</h>
                                            </div><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">';

        echo $this->model->Translate('If someone wants to make any significant improvements into your work you can make it just in your own laptop without correcting the whole assignment paper.');

        echo                                    '</h>
                                            </div>

                                        </div>
                                    </div>

                                    <img src="/images/laptops-thin.png" id="education-laptop" />

                                    <div id="education-divider"></div>

                                    <h id="main">';

        echo $this->model->Translate('Useful device for teachers as well');

        echo                       '</h>

                                    <div class="row">
                                        <div class="delivering">
                                            <div class="col-md-4">
                                                <div class="h-height-every">
                                                    <h class=main-sub-every" style="font-size: 20px;">';

        echo $this->model->Translate('Usability with collection and sorting');

        echo                                   '</h>
                                            </div><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">';

        echo $this->model->Translate('Having students turn work in via email or another digital system is easier than collecting and sorting through stacks of physical paper.');

        echo                                    '</h>
                                            </div>
                                            <div class="col-md-4 margin-for-small-devices">
                                                <div class="h-height-every">
                                                    <h class=main-sub-every" style="font-size: 20px;">';

        echo $this->model->Translate('Work remotely, increasing productivity');

        echo                                   '</h>
                                            </div><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">';

        echo $this->model->Translate('Whats more, digital assignments allow students that have to miss school to turn in work remotely, reducing the inequity of allowing students extensions on assignments for missing class.');

        echo                                   '</h>
                                            </div>
                                            <div class="col-md-4 margin-for-small-devices">
                                                <div class="h-height-every">
                                                    <h class=main-sub-every" style="font-size: 20px;">';

        echo $this->model->Translate('The best result for the same time');

        echo                                   '</h>
                                            </div><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">';

        echo $this->model->Translate('Additionally, typewritten assignments are much easier to read than those written by hand. Thats why, this will decrease spending time of students and teachers either');

        echo                                   '</h>
                                            </div>

                                        </div>
                                    </div>

                                    <img src="/images/devices.jpg" id="education-laptop" />
                                </div>
                           </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>';
    }
}