<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 25.11.2015
 * Time: 20:40
 */

include_once('SubdescriptionView.php');

class SearchAnswersView extends SubdescriptionView
{
    private $model;
    public function __construct(SubdescriptionModel $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    public function getSearchAnswersPage() {

        $this->DoctypeView( 'search' );
        $this->headerView( 'search' );
        $this->getAnswers();
        $this->getQuestions();

        if( $this->model->countAskPerson() < 3) {
            $this->GetFooter();
        } else
            $this->actionGetFooter( 'search' );
    }

    public function GetFooter() {

        echo '<div class="bottom-spacer">
               <div class="row">
                   <div class="col-md-12 text-center">
                        <ul class="hor_nav">
                            <li><a class="items" href="/privacy">Privacy</a></li>
                            <li><a class="items" href="/refunds">Refunds</a></li>
                            <li><a class="items" href="/sales">Sales</a></li>
                            <li><a class="items" href="site-map">Site map</a></li>
                        </ul>
                            <p id="copyright"> &copy; Woden S Inc. All rights reserved.</p>
                   </div>
               </div>
              </div>
              <script src="js/jquery-min.js"></script>
              <script src="js/bootstrap.min.js"></script>';
    }
}