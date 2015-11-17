<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 17.11.2015
 * Time: 15:44
 */
abstract class Test
{
    public $model;

    public function __construct( $model ){

        $this->model = $model;
    }

    private function Output() {

        echo $this->model;
    }

    final public function Eho() {
        $this->Output();
        $this->Nothing();
    }

    final protected function Nothing() {

        echo $this->model . '1';
    }
}

class Problem extends Test {
    public function Eho() {

    }
}

$test = new Problem(' Alex ');

$test->Eho();


