<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 10.01.2016
 * Time: 22:18
 */

include_once('DefaultModel.php');

class ForgotModel extends DefaultModel
{
    private $question1;
    private $question2;
    private $question3;

    public function setQuestion1( $question1 ){

        $this->question1 = $question1;
    }

    public function getQuestion1() {

        return $this->question1;
    }

    public function setQuestion2( $question2 ){

        $this->question2 = $question2;
    }

    public function getQuestion2() {

        return $this->question2;
    }

    public function setQuestion3( $question3 ){

        $this->question3 = $question3;
    }

    public function getQuestion3() {

        return $this->question3;
    }
}