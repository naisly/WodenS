<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 02.01.2016
 * Time: 1:31
 */

include_once('DefaultView.php');

class CompanyView extends DefaultView
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

    public function getCompanyPage() {

        $this->DoctypeView( 'Our Company' );
        $this->headerView( 'Our Company' );

        $this->getPage();
        $this->actionGetFooter( 'Our Company' );
    }

    private function getPage() {

        echo '<div class="container text-center woden-sims-xl">
                  <h1>Woden Sims</h1>
                  <h2>Reliable personal tested by time. Award-store.</h2>
                  <h3>Walking in lockstep with new technologies</h3>
              </div>
              <div class="container">
                  <div class="row text-center">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">

                          <div id="divider-e4"></div>

                          <h1 class="header-ws-xl">Since 1984, world has seen a great many changes in its business, its
                          products, its services. Change always comes with opportunity. And Deere has always been ready
                          and willing to embrace it. By the time, Woden Sims never forgotten core values thanks to
                          which the Store became real, such as lightweight prices, high quality of provided items.</h1>

                          <h1 class="header-ws-xl">Those values determine the way we work, the quality we offer, and the
                          unsurpassed treatment you get as a customer, investor, employee.</h1>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>

              <img src="/images/company.jpg" class="full-image-cascade image-xl" />

              <div class="container text-center" style="margin-top: 4%;">
                  <h1 class="career">Career opportunities</h1>
                  <h2 id="sub-career" style="padding-bottom: 1%;">Make your routine day as diverse as it could be.</h2>
                  <a class="links" id="main-link" href="/jobs/" style="text-decoration: none; margin-right: 0;">';

        echo $this->model->Translate('Join our team');

        echo      '<img src="/images/arrow-blue.png" width="20" height="20"/></a>

                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">

                          <div id="divider-e4"></div>

                          <h1 class="header-ws-md text-center">If you have friendly and engaging personality, responsive manners as well as
                          helpful and polite, that all you need to growth in our team</h1>

                          <div class="row" style="margin-top: 5%;">
                              <div class="col-md-6 border-right-row">
                                  <h1 class="main-row text-left">What we offer</h1>

                                  <h1 class="desc-row text-left">Our founder was best known for his manners, business not
                                  really straightforward steps to achieve company goals on the world stage. We\'re
                                  developing company with internet as well as live stores. </h1>

                                  <h1 class="desc-row text-left">We also starting developing
                                  new devices for simplifying routine day life. Our main task is to help people
                                  with achieving their personal goals in this era of technological expansion,
                                  consulting and selling.</h1>
                              </div>
                              <div class="col-md-6">
                                  <h1 class="main-row text-left">What you can expect</h1>

                                  <h1 class="desc-row text-left">You might expect Woden Sims to have the highest ethics,
                                  rigorous regulatory compliance, and the deepest desire to develop and promote fairness
                                  in public policies and practices. You would be right on all accounts. And if you have
                                  a relationship with Woden Sims - as a customer, employee, dealer, or supplier - you
                                  would expect Woden Sims to offer an inclusive environment. One that would welcome
                                  <em>diversity</em>. You would be right again.</h1>
                              </div>
                          </div>


                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>

              <img src="/images/company-work.jpg" class="full-image-cascade image-xl" />

              <div class="container text-center" style="margin-top: 3%;">
                  <h1 class="career">Investors</h1>

                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                          <h1 class="header-ws-md">On the one hand, Woden Sims is a store located at more than
                          seven countries <a href="/store/" style="text-decoration: none; color: #08b;">primary in Europe</a>. On the other hand, our Company
                          provides software in the industry of IT. We are developing Apps for Android as well as IOS, web-sites.</h1>
                      </div>
                      <div class="col-md-1"></div>
                  </div>
              </div>

              <div class="container" style="margin-top: 3%;">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-5 text-center">
                          <img src="/images/team.png" height="90" width="90" />
                          <h1 class="main-row text-left" style="font-size: 30px; font-family: RobotoLight; color: rgb(236, 0, 140);">Our development team</h1>

                          <h1 class="desc-row text-left">Woden Sims\'s own software development team model is a great choice for
                          companies that are looking to grow their development resources without the cost and manpower
                          of recruiting, hiring, Housing, and retaining a team at your location. With our approach to
                          building your own software team, you get the expertise of Woden Sims\'s in-house recruitment
                          professionals with software development cost savings of up 60%.</h1>

                      </div>
                      <div class="col-md-5 text-center" style="border-left: 1px solid #e4e4e4;">
                          <img src="/images/bulb.png" height="90" width="90" />
                          <h1 class="main-row text-left" style="font-size: 30px; font-family: RobotoLight; color: rgb(236, 0, 140);">Custom Software Development</h1>

                          <h1 class="desc-row text-left">Woden Sims employs a staff of talented developers who are ready to
                          tackle your next development project. Our custom software development is ideal for short-term
                          projects with a quick turnaround. Our custom software engineering services offer access to
                          top developers experienced in a variety technologies and platforms, as well as Woden Sims consultants
                          and project managers ready to handle all aspects of your development. Our outsourced project
                          development can serve as a supplement to your Woden Sims Own Software Team, or as a
                          standalone solution.</h1>
                      </div>
                  </div>
              </div>

              <img src="/images/inverstors.jpg" class="full-image-cascade" style="margin-top: 4%;"/>';
    }
}