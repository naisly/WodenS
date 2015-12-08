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

        $this->DoctypeView( 'education-laptops' );
        $this->headerView( 'education' );

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    public function getMain() {

        echo '<div class="main-fixed-container">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                              <div class="fixed-main pull-left">
                                  <h class="fixed-header">Laptops in Education</h>
                              </div>
                              <div class="buy-main pull-right">
                                  <a style="color: white" class="btn btn-primary button-buy" href="../Notebooks.php">Buy</a>
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
                                    <h id="main">Expand your skills of usage Laptops to improve your knowledge <br /> in area of education</h><br />

                                    <div class="content-phones">
                                        <h id="sub-every-phones">Laptop computers are becoming <em>increasingly prevalent</em> in education<br /> Great part of
                                        skills required to maintain the device became <b>readily to know all the special</b>. <br /> While laptops may present opportunities
                                        for <b>distraction</b>, <b>utilizing portable</b> computers in <br /> classrooms can yield <b>several significant benefits</b>.
                                        </h>
                                    </div>

                                    <img src="../../images/education-laptops.jpg" id="education-laptop" />

                                    <div id="education-divider"></div>

                                    <div class="usefull-apps">
                                        <h id="main">A lot of fun for Students & Teachers</h><br />

                                        <div class="content-phones">
                                            <h id="sub-every-phones">Laptops can provide a <em>high level of interactivity between students</em>, teachers and subject matter.
                                            For instance, a teacher could challenge students to find the answer to a question about history or some other subject
                                            using their laptops online. This would force students to conduct <b>quick research</b> and <b>use creativity</b> to find the answer, rather
                                            than paging through a dense textbook.
                                            </h>
                                        </div>
                                    </div>

                                    <img src="../../images/macbook-pro.jpg" id="macbook-pro" />

                                    <div class="content-phones">
                                        <h id="sub-every-phones">Another <em>potential benefit of using laptops</em> in classrooms is that using computers is <b>more fun</b> for students
                                        than simply sitting at a desk and listening to a lecture with a pad of paper and a pen. Students that have fun in
                                        the classroom <b>are more likely to come to school.</b></h>
                                    </div>

                                    <img src="../../images/macbook-air.jpg" id="macbook-air" /><br />

                                    <div id="education-divider"></div>

                                    <div class="delivering">
                                        <h id="main">Stay organized and remember all work</h>

                                        <div class="content-phones">
                                            <h id="sub-every-phones">When you have six or more classes, it is <em>easy to misplace a worksheet or forget about an assignment</em>. If
                                            teachers distribute assignments digitally, students can <b>easily review their work all in one place</b>.
                                            Digital copies of work also help students by <b>making it easy to edit or change work.</b></h>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="delivering">
                                            <div class="col-md-4">
                                                <h class=main-sub-every" style="font-size: 20px;">All data in one place</h><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">Control your schedule via Macbook\'s Apps like <em>Clocks</em> or <em>Calendar</em>. Its really easy to make <b>important marks</b>
                                                and <b>control your time</b>. Windows provide either those Apps whats make your life absolutely <b>complete</b></h>
                                            </div>
                                            <div class="col-md-4">
                                                <h class=main-sub-every" style="font-size: 20px;">Collect / Compare all projects</h><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">It\'s really easy to <em>compare</em> your projects with your mates or <em>send</em> your task to your teacher for review.
                                                Every project can <b>be saved</b> in one place for an reason <b>to collect all data</b> and <b>rewrite</b> them into another
                                                one.</h>
                                            </div>
                                            <div class="col-md-4">
                                                <h class=main-sub-every" style="font-size: 20px;">Edit / Change everywhere</h><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones"> If someone wants to make any <em>significant improvements</em> into your work you can make it just in your
                                                own laptop <b>without correcting</b> the whole assignment paper.</h>
                                            </div>

                                        </div>
                                    </div>

                                    <img src="../../images/macbook.jpg" id="education-laptop" />

                                    <div id="education-divider"></div>

                                    <h id="main">Useful device for teachers as well</h>

                                    <div class="row">
                                        <div class="delivering">
                                            <div class="col-md-4">
                                                <h class=main-sub-every" style="font-size: 20px;">Usability with collection and sorting</h><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">Having students turn work in <em>via email or another digital system</em> is easier than collecting and sorting through
                                                stacks of physical paper.</h>
                                            </div>
                                            <div class="col-md-4">
                                                <h class=main-sub-every" style="font-size: 20px;">Work remotely, increasing productivity</h><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones">Whats more, digital assignments allow students that have to miss school to turn in <b>work remotely</b>, reducing the inequity
                                                of allowing students extensions on assignments for missing class.</h>
                                            </div>
                                            <div class="col-md-4">
                                                <h class=main-sub-every" style="font-size: 20px;">The best result for the same time</h><br />

                                                <div id="education-divider"></div>

                                                <h id="sub-every-phones"> Additionally, typewritten assignments are <b>much easier
                                            to read</b> than those written by hand. Thats why, this will decrease spending time of students
                                            and teachers either</h>
                                            </div>

                                        </div>
                                    </div>

                                    <img src="../../images/devices.jpg" id="education-laptop" />
                                </div>
                           </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>';
    }
}