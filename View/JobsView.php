<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 31.12.2015
 * Time: 21:59
 */

include_once('DefaultView.php');

class JobsView extends DefaultView
{
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getJobsPage() {

        $this->DoctypeView( 'Jobs' );
        $this->headerView( 'Jobs' );
        $this->getMain();
        $this->actionGetFooter( 'Jobs' );
        $this->endHTML();
    }

    private function getMain() {

        echo '<div class="visible-for-small text-center">
                   <h1>Woden Sims Jobs</h1>
                   <ul class="navigation">
                       <li><a class="sales-assistant" href="#" style="color: black;">Sales Assistant</a></li>
                       <li><a class="consultant" href="#" style="color: black;">Consultant</a></li>
                       <li><a class="director" href="#" style="color: black;">Director</a></li>
                   </ul>
              </div>';
        echo '<div class="default-overlay">
                  <div class="container text-center">
                          <div class="row display-none-for-small">
                              <div class="pull-left">
                                  <h1 class="jobs">Jobs</h1>
                              </div>
                              <div class="pull-right">
                                  <ul class="navigation">
                                      <li><a class="sales-assistant" href="#">Sales Assistant</a></li>
                                      <li><a class="consultant" href="#">Consultant</a></li>
                                      <li><a class="director" href="#">Director</a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="main-content text-center">
                          <h1 class="main-job-sub">Love your job working here.</h1>
                          <div class="margin-for-sm-job">
                              <h1 class="main-job-sub">Hardworking, pleasant atmosphere</h1>
                          </div>
                      </div>
                  </div>
              </div>';

        echo '<div class="text-center" id="sales-assistant">
                  <h1 class="main-job-main">Sales Assistant</h1>
                  <p class="sub-job-main">Make your routine day as diverse as it could be.</p>
                  <p class="sub-job-main" style="padding-bottom: 20px;">Be part of our team.</p>
              </div>

              <div class="container">
                  <div class="row">
                      <div class="col-md-6 job-border-right">
                          <h1 class="responsibilities">Your responsibilities</h1>

                          <ul class="listed-group-sm-gl">
                              <li>Be involved in stock control and management.</li>
                              <li>Assisting shoppers to find the goods and products they are looking for.</li>
                              <li>Being responsible for processing cash and card payments.</li>
                              <li>Stocking shelves with merchandise.</li>
                              <li>Answering queries from customers.</li>
                              <li>Reporting discrepancies and problems to the supervisor.</li>
                              <li>Giving advice and guidance on product selection to customers.</li>
                          </ul>
                      </div>
                      <div class="col-md-6">
                          <h1 class="skills">Optional Personal skills</h1>

                          <ul class="listed-group-sm-gl">
                              <li>Having a friendly and engaging personality.</li>
                              <li>Comfortable working with members of the public.</li>
                              <li>Should have a confident manner.</li>
                              <li>Must be helpful and polite.</li>
                              <li>Assistants should be physically fit as they will be on their feet for most of the
                              day and may be required to lift large amounts of stock.</li>
                          </ul>
                      </div>
                  </div>
                  <div class="row" style="margin-top: 60px;">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                          <div class="text-center">
                              <!--<h1>If you think that it is You that we are looking for, please Contact Us</h1>-->
                              <h1 style="font-size: 27px;">The job requires a high level of customer interaction, meaning sales assistants should
                              have good customer facing and communication skills.</h1>

                              <div id="white-divider-md"></div>

                              <h1 style="font-size: 27px;">If you are considering a career in this field
                              then bear in mind that some retail outlets require staff to meet sales targets. If these targets
                              are not met then their job may be on the line.</h1>
                          </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>

              <img src="/images/jobs-store-hq.jpeg" class="full-image-cascade" style="margin-top: 60px;" />';

        echo '<div class="text-center" id="consultant">
                  <h1 class="main-job-main">Consultant</h1>
                  <p class="sub-job-main">Take responsibility. Show professionalism.</p>
                  <p class="sub-job-main" style="font-size: 22px; padding-bottom: 30px;">Every step you take, going for your future.</p>
              </div>

              <div class="container">
                      <div class="row">
                          <div class="col-md-6">
                              <h1 class="responsibilities">Your responsibilities</h1>

                              <ul class="listed-group-sm-gl">
                                  <li>Attend sales meetings, conferences and events </li>
                                  <li>Handle clients in a professional manner </li>
                                  <li>Deal with customer issues</li>
                                  <li>Process customer orders</li>
                                  <li>Keep up to date with product developments </li>
                                  <li>Call clientele</li>
                                  <li>Devise new sales or marketing strategies</li>
                                  <li>Work with other departments</li>
                                  <li>Schedule appointments, calls, and meetings</li>
                              </ul>
                          </div>
                          <div class="col-md-6 job-border-left">
                              <h1 class="skills">Optional Personal skills</h1>

                              <ul class="listed-group-sm-gl">
                                  <li>Be self motivated</li>
                                  <li>Be professional</li>
                                  <li>Be passionate about the sales industry</li>
                                  <li>Have superior expertise in sales</li>
                                  <li>Have quality customer service expertise</li>
                                  <li>Possess creative and innovative sales ideas</li>
                                  <li>Possess first-class time and project management capabilities</li>
                                  <li>Be able to do extremely well at internet and web marketing</li>
                                  <li>Have a driving record of accomplishments</li>
                                  <li>Be able to absorb information in a timely manner</li>
                                  <li>Have first-rate interpersonal skills</li>
                                  <li>Be able to network and negotiate</li>
                              </ul>
                          </div>
                      </div>
                      <div class="row" style="border-top: 1px solid white;">
                          <div class="col-md-6">
                              <h1 class="responsibilities">Education</h1>

                              <ul class="listed-group-sm-gl">
                                  <li>Sales consultants have at least a bachelors degree.</li>
                                  <li>This degree is typically in a business related field such as marketing,
                                  finance or communications.</li>
                                  <li>Having a higher-level degree is valuable for professionals hoping to acquire
                                  higher managerial positions.</li>
                              </ul>
                          </div>
                          <div class="col-md-6 job-border-left">
                              <h1 class="skills">All in All</h1>

                              <ul class="listed-group-sm-gl">
                                  <li>Sales consultants are the middlemen between companies and clients, promoting
                                  products and services and building long-term commercial relationships.</li>
                                  <li>They may work on either an employed or self-employed basis. </li>
                                  <li>Those working for employers often receive benefits and bonuses on top of a set
                                  salary, while self-employed consultants work independently, setting their own
                                  hours and level of income </li>
                                  <li>Key responsibilities include identifying and meeting customer needs within their
                                  allotted sales territory, maintaining good after-sales relationships, keeping records
                                  of customer appointments and completed sales, and providing detailed information on the
                                  products they are selling.</li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  <img src="/images/sales-assistant.jpg" class="full-image-cascade" style="margin-top: 50px;"/>';

        echo '<div class="text-center" id="director">
                  <h1 class="main-job-main">Store Director</h1>
                  <p class="sub-job-main">Take control in your hands.</p>
                  <p class="sub-job-main" style="font-size: 22px; padding-bottom: 30px;">Show your leave-taking business. Be persistent.</p>
              </div>

              <div class="container">
                  <div class="row">
                      <div class="col-md-6">
                          <h1 class="responsibilities">Qualification</h1>

                          <ul class="listed-group-sm-gl">
                              <li>Must be at least 21 years of age.</li>
                              <li>High school education with some college background preferred or equivalent
                              combination of education and experience.</li>
                              <li>Must successfully pass cashier training after hire.</li>
                          </ul>

                          <h1 class="responsibilities">Education</h1>

                          <ul class="listed-group-sm-gl">
                              <li>Because of the increasing amounts of responsibility placed on store managers,
                              many employers prefer to hire employees with a bachelor\'s degree or other formal
                              education in a business-related field. </li>
                              <li>A bachelor\'s in business administration degree program provides students
                              with the skills necessary to become effective store managers through coursework
                              in such subjects as marketing, accounting, business ethics and management strategy. </li>
                              <li>Employees with a degree are most likely to be promoted to a higher level of management
                              and administration in larger retail companies.</li>
                          </ul>
                      </div>
                      <div class="col-md-6 job-border-left">
                          <h1 class="skills">Job Description</h1>

                          <ul class="listed-group-sm-gl">
                              <li>Responsible for all aspects of the store\'s operation including its financial results.</li>
                              <li>Director must plan, organize, direct, and control all store activities and operations
                              plus make effective and objective decisions regarding operational choices in work
                              procedures, inventory allocations, ordering, scheduling and other situations where
                              multiple factors must be considered and weighed to maximize operating results.</li>
                              <li>The Store Director must observe and enforce all store rules and company policies
                              and ensure all employees adhere to company procedures.</li>
                              <li>They emphasize and role model company customer service standards and maintain a neat,
                              well-groomed personal appearance, observing company dress code.</li>
                              <li>This position must prepare store projections and store operating budgets and is
                              responsible for employee schedules and controlling labor and other overhead costs.</li>
                              <li>Possess creative and innovative sales ideas</li>
                          </ul>
                      </div>
                  </div>

                  <div class="row" style="margin-top: 60px;">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                          <div class="text-center">
                              <!--<h1>If you think that it is You that we are looking for, please Contact Us</h1>-->
                              <h1 style="font-size: 27px;">Stock up strong leadership, interpersonal and multitasking skills.</h1>

                              <div id="white-divider-md" style="width: 80%;"></div>

                              <h1 style="font-size: 27px;">Work in office environments while performing
                              administrative duties and on the sales floor while addressing staffing, customer,
                              and merchandising needs.</h1>
                          </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>

              <img src="/images/job-director.jpg" style="margin-top: 50px; margin-bottom: 50px;" class="full-image-cascade" />

              <div class="text-center">
                  <h1 class="looking-for">If you think that you\'re a person that we are looking for, please</h1>

                  <a class="links" id="main-link" href="/contact/" style="text-decoration: none">';

        echo $this->model->Translate('Contact Us');

        echo         ' ' . '<img src="/images/arrow-blue-f1.png" width="20" height="20"/></a>

              </div>

              <script src="/js/jobs-scroll.js"></script>';
    }
}