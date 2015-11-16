<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 15.11.2015
 * Time: 0:28
 */

include_once('DefaultView.php');

class SupportView extends DefaultView
{
    private $model;
    public function __construct(SupportModel $model){
        parent::__construct($model);
        $this->model = $model;
    }

    public function thanksMessage() {

        echo '<div class="well" style="margin-top: -20px;">
                  <h2>Thanks!</h2>
                  For sending an request. We will help you with your issue as much as it is possible! <br />
                  Our employees will do utmost to make you pleased
              </div>';
    }

    public function getFooter() {

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

    public function getSupport() {

        echo '      <div class="col-xs-12 panel-body" >
                        <div>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>';
        $i = 0;

        while ($i < $this->model->countItems()) {
            echo '<tr>
                      <td>' . $this->model->getId($i) . '</td>
                      <td>' . $this->model->getName($i) . '</td>
                      <td>' . $this->model->getEmail($i) . '</td>
                      <td>' . $this->model->getSubject($i) . '</td>
                      <td>' . $this->model->getMessage($i) . '</td>
                  </tr>';

            $i++;
        }


        echo      '    </tbody>
                    </table>
              </div>
        </div>';
    }
}