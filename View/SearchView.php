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
    public function __construct(DefaultModel $model)
    {
        parent::__construct( $model );
        $this->model = $model;
    }

    public function getResults() {

    }

}