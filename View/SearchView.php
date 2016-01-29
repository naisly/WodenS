<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 18.01.2016
 * Time: 20:31
 */

include_once('DefaultView.php');

class SearchView extends DefaultView
{
    private $model;
    public function __construct(SearchModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getResults() {
        $this->DoctypeView( 'Search' );
        $this->headerView( 'Search' );

        $this->getSearch();
        $this->actionGetFooter( 'Search' );
    }

    private function getSearch() {

        echo '<div class="container">
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-5">
                          <form action="" method="get">
                              <div class="right-inner-addon">
                                  <i class="glyphicon glyphicon-search"></i>
                                  <input type="search" class="form-control" name="generalnav" placeholder="' . $this->model->Translate('Search') . '" value="';

        if(isset($_GET['generalnav'])){
            echo $_GET['generalnav'];
        }

        echo '" />
                <input type="hidden" value="1" name="page" />
                              </div>
                          </form>
                      </div>
                      <div class="col-md-6"></div>
                  </div>
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10" style="margin-top: 15px;">
                          <h1 class="search">' . $this->model->Translate('Search') . ' woden-sims.hol.es</h1>

                          <div class="search-divider"></div>';

        if(!isset($_GET['generalnav'])){
            echo '<h1 class="results">0 ' . $this->model->Translate('results found') . '</h1>';
            $this->noDataFound();
        } else {
            echo '<h1 class="results">' . $this->model->getCountResults() . ' ' . $this->model->Translate('results found') . '</h1>';

            if($this->model->getCountResults() !== 0) {

                if(isset($_GET['page'])){
                    $page = $_GET['page'];

                    $i = ($page - 1)*13;
                } else {
                    $i = 0;
                }

                if($this->model->getCountResults() > 13) {
                    if(($i + 13) < $this->model->getCountResults()) {
                        $k = $i + 13;
                    } else {
                        $k = $this->model->getCountResults();
                    }
                } else {
                    $k = $this->model->getCountResults();
                }

                //echo $k;

                while ($i < $k) {
                    echo '<h1 class="title"><a class="title-link" href="' . $this->model->getUrl($i) . '">' . $this->model->getTitle($i) . '</a></h1>
                      <h1 class="description">' . $this->model->getDescription($i) . '</h1>
                      <h1 class="url"><a class="url" href="' . $this->model->getUrl($i) . '">' . $this->model->getUrl($i) . '</a></h1>';

                    $i++;
                }

                if($this->model->getCountResults() > 13){
                    echo '<div class="search-divider"></div>';

                    echo '<div class="row" style="margin-top: 40px;">
                              <div class="col-md-3"></div>
                              <div class="col-md-6">
                                  <div class="pull-left">';

                    if(isset($_GET['page']) && $_GET['page'] !== '1') {
                        echo '<a href="';

                        if (isset($_GET['page']) && $_GET['page'] > 1) {
                            echo '/search/result?generalnav=' . $_GET['generalnav'] . '&page=' . ($_GET['page']-1);
                        }

                        echo '">';
                    }

                    echo '<img src="/images/arrow-right-pages.png" width="15" height="30" class="nav-image" />';

                    if(isset($_GET['page']) && $_GET['page'] !== '1') {
                        echo '</a>';
                    }

                    echo              '</div>
                                  <div style="margin-left: 42%;">
                                      <form action="" method="get">
                                          <input type="hidden" name="generalnav" id="generalnav" value="' . $_GET['generalnav'] . '" />
                                          <input type="text" name="page" id="page" class="form-control" style="padding-top: 20px !important; padding-bottom: 20px !important;" onkeypress="return event.charCode >= 48 && event.charCode <= 57" value="';

                    if(isset($_GET['page'])){
                        echo $_GET['page'];
                    } else {
                        echo '1';
                    }

                    echo '" />
                          <input type="submit" />
                               </form>
                               <h1 class="pages"> of ' . $this->model->getCountPages() . '</h1>
                                  </div>
                                  <div class="pull-right">';


                    if(!isset($_GET['page']) || $_GET['page'] != $this->model->getCountPages()) {


                        echo '<a href="';

                        if(isset($_GET['page']) && $_GET['page'] < $this->model->getCountPages()){
                            echo '/search/result?generalnav=' . $_GET['generalnav'] . '&page=' . ($_GET['page']+1);
                        } else {
                            echo '/search/result?generalnav=' . $_GET['generalnav'] . '&page=2';
                        }

                        echo '">';
                    }


                    echo '<img src="/images/arrow-left-pages.png" width="15" height="30" class="nav-image" />';

                    if(!isset($_GET['page']) || $_GET['page'] !== $this->model->getCountPages()) {
                        echo '</a>';
                    }

                    echo '                </div>
                              </div>
                              <div class="col-md-3"></div>
                          </div>';
                }
            } else {
                $this->noDataFound();
            }
        }



        echo              '</div>
                           <div class="col-md-1"></div>
                      </div>
                  </div>';

    }

    private function noDataFound() {

        echo '<div class="no-data-found">
                   <h1 class="no-results"><b>' . $this->model->Translate('Sorry, no results found.') . '</b></h1>
                   <h1 class="check">' . $this->model->Translate('Please, make sure all words are spelled correctly or try different keywords.') . '</h1>
              </div>';
    }

}