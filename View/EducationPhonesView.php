<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 06.12.2015
 * Time: 21:00
 */

include_once('DefaultView.php');

class EducationPhonesView extends DefaultView
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

    public function getMain() {

        echo '<div class=""';
    }
}