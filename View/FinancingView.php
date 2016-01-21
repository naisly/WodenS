<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 03.12.2015
 * Time: 19:56
 */

include_once('DefaultView.php');

class FinancingView extends DefaultView
{
    /*
     * MVC constructor
     * with ProfileModel
     *
     * @private $model
     */
    private $model;
    public function __construct(DefaultModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getFinancingPage() {
        $this->DoctypeView( 'Financing' );
        $this->headerView( 'Financing' );
        $this->getMenu();
        $this->actionGetFooter( 'Financing' );
    }

    private function getMenu() {

        echo '<div class="container middle">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                          <div class="bordered-middle">
                              <div class="text-center">
                                  <h id="main">';

        echo $this->model->Translate('Get additional prices and financing getting items with Woden Sims');

        echo                      '</h><br />

                                  <div class="content">
                                      <h id="sub-main">';

        echo $this->model->Translate('If you use VISA or MASTERCARD payment methods to pay online you are going to earn points each time. For every 250$ you will earn 10% sale for next item');

        echo                          '</h>
                                  </div>

                                  <img src="/images/devices.jpg" class="image-main" />

                                  <div id="divider-main"></div>

                                  <div id="apply">
                                      <h class="apply-for">';

        echo $this->model->Translate('Apply for financing with Card usage by getting an Woden Sims shopping card');

        echo                          '</h>
                                  </div>
                              </div>

                                  <div class="row" id="margin-spacer">
                                      <div class="col-md-4">
                                          <h class="lead-header">';

        echo $this->model->Translate('Earn reward for every dollar spent');

        echo                              '</h><br />

                                          <div class="spacer-min"></div>

                                          <h class="sub-header">';

        echo $this->model->Translate('For every purchase that is greater than 250$ you will earn 10% sale for next item. Earn 5% discount by getting old-phones.');

        echo                              '</h>
                                      </div>
                                      <div class="col-md-4 margin-sm" id="border-both">
                                          <h class="lead-header">';

        echo $this->model->Translate('Accumulate each dollar into your cart');

        echo                              '</h><br />

                                          <div class="spacer-min"></div>

                                          <h class="sub-header">';

        echo $this->model->Translate('Every 1$ of check you are going to accumulate dollars in your Woden Sims card. While this sum is greater than 5, 000$ you are going to get discount amount of 7%.');

        echo                              '</h>

                                      </div>
                                      <div class="col-md-4 margin-sm">
                                          <h class="lead-header">';

        echo $this->model->Translate('Make order online, get discount for each product');

        echo                             '</h><br />

                                          <div class="spacer"></div>

                                          <h class="sub-header">';

        echo $this->model->Translate('Getting payed online, you are going to save your time, getting 3% discount for the sum order');

        echo                             '</h>
                                      </div>
                                  </div>
                                  <div style="height: 130px;"></div>
                              </div>
                                      <div class="tax">
                                          <h1 class="tax-header">';

        echo $this->model->Translate('Taxes in Poland are levied by both the federal and regional governments. Tax revenue in Poland is 31.7% of the country\'s GDP in 2009. The most important revenue sources include the income tax, Social Security, corporate tax and the value added tax, which are all applied on the national level. Income earned is generally subject to a progressive income tax, which apply to all who are in the workforce. For the year 2014, two different tax rates on income apply.');

        echo                              '</h>
                                          <h1 class="tax-header">';

        echo $this->model->Translate('The Code is designed as a complete national system for federal, regional and local taxes but excludes customs tariffs. Rules and rates of regional and local taxation must conform to the framework established by the Code. Taxes or levies not listed explicitly by the Code or enacted in violation of its specific provisions are deemed illegal and void.');

        echo                              '</h>
                                          <h1 class="tax-header">';

        echo $this->model->Translate('Many direct and indirect taxes exist in Germany; income tax and VAT are the most significant. The German word for tax is die Steuer which originates from the Old High German word stiura meaning help. The Financial Secrecy Index ranks Germany as the 8th safest tax haven in the world, ahead of Jersey but behind Lebanon.');

        echo                              '</h>
                                          <h1 class="tax-header">';

        echo $this->model->Translate('According to the NKY 167.5.1 NDS was delivered as 20%. Plus, according to the military tax 1.5% of each sale is going as objective tax. Thus, 21.5% is the main tax The amount of tax calculated from the amount of interest accrued on the account and debited on a monthly basis.');

        echo                             '</h><br />
                                      </div>





                          </div>
                      </div>
                      <div class="col-md-1"></div>
                  </div>

              </div>';
    }
}