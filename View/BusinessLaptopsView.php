<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 07.12.2015
 * Time: 17:48
 */

include_once('DefaultView.php');

class BusinessLaptopsView extends DefaultView
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

    public function getBusinessLaptopsPage() {

        $this->DoctypeView( 'business-laptops' );
        $this->headerView( 'business' );

        $this->getMain();
        $this->actionGetFooter( 'sub-daughter' );
    }

    private function getMain() {

    }
}