<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 16.11.2015
 * Time: 23:14
 */

include_once('View.php');

class DefaultView extends View
{
    public function DoctypeView( $page ){

        View::DoctypeFile( $page );
    }

    public function headerView() {

        View::headerPart();
    }

    public function getItemsNames() {

        View::ItemsNamesPart();
    }

    public function getFilterMenu( $item ) {

        View::FilterMenuPart( $item );
    }

    public function getItems() {

        View::ItemsPart();
    }

    public function actionGetFooter( $page ) {

        View::GetFooterPart( $page );
    }
}