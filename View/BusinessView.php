<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 14.12.2015
 * Time: 0:31
 */

include_once('DefaultView.php');

class BusinessView extends DefaultView
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

    public function getBusinessPage() {

        $this->DoctypeView( 'Education' );
        $this->headerView( 'education' );

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    private function getMain() {


    }
}