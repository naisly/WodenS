<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 24.12.2015
 * Time: 23:35
 */

include_once('DefaultView.php');

class PageNotFoundView extends DefaultView
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

    public function getNotFoundPage() {

        $this->DoctypeView( 'Page Not Found' );
        $this->headerView( 'Page Not Found' );
        $this->getMainHeader();
        $this->actionGetFooter( 'Page Not Found' );
    }

    private function getMainHeader() {

        echo '<div class="overlay-main">';
        echo '<div class="container text-center">
                  <div class="row" style="margin-top: 15%; padding-bottom: 8%;">
                      <div class="col-md-3"></div>
                      <div class="col-md-6">
                          <h class="not-found-h">The page that you are looking can not be found</h>

                          <div style="margin-top: 3%;">
                              <h class="search-for-choice">Search items for your choice</h>
                          </div>

                          <a onclick="toggle_categories();" style="cursor: pointer;"><img alt="not-found" src="/images/plus1.png" style="margin-top: 5%;" id="image-get-data-gl"/></a>
                      </div>
                      <div class="col-md-3"></div>
                  </div>
              </div>';

        echo          '<div id="toggleCategories">
                      <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-6 no-division-for-category">
                              <a href="/phones/" style="text-decoration: none">
                                  <div class="bg-phones">
                                      <div style="margin-top: -10px;">
                                          <h1 class="sub-decision-for-xs">';

        echo $this->model->Translate("There's nothing quite like this.");

        echo                              '</h1>
                                      </div>
                                  </div>
                              </a>

                              <a href="/devices/" style="text-decoration: none">
                                  <div class="bg-ipad">
                                      <h1 class="sub-decision-for-xs">';

        echo $this->model->Translate('Devices.') . "<br />";
        echo $this->model->Translate('Thin. Lightweight. Epic.');

        echo                         '</h1>
                                  </div>
                              </a>
                          </div>
                          <div class="col-md-6 no-division-for-category">

                              <a href="/laptops/" style="text-decoration: none">
                                  <div class="bg-laptops">
                                      <h1 class="sub-decision-for-xs">';

        echo $this->model->Translate('Laptops. Change your way of thinking.') . '<br />';
        echo $this->model->Translate('Powerful as never before.');

        echo                         '</h1>
                                  </div>
                              </a>

                              <a href="/tv/" style="text-decoration: none">
                                  <div class="bg-tv">
                                      <h1 class="sub-decision-for-xs">';

        echo $this->model->Translate('Gorgeous. Marvelous.');

        echo                         '</h1>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
                      </div>
                  </div>
                  <script src="/js/not-found.js"></script>';
    }
}