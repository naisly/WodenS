<?php

/**
 * Created by PhpStorm.
 * User: Home
 * Date: 22.11.2015
 * Time: 16:06
 */

include_once('AssocModel.php');

class SubdescriptionModel extends AssocModel
{

    private $ask_person;
    private $question;
    private $answer;
    private $answer_person;
    private $answer_time;

    private $date;

    private $no_items;
    private $count_pages;

    public function setAskPerson( $ask_person ) {

        $this->ask_person = $ask_person;
    }

    public function getAskPerson( $i ) {

        return $this->ask_person[$i];
    }

    public function countAskPerson() {

        return count($this->ask_person);
    }

    public function setQuestion( $question ) {

        $this->question = $question;
    }

    public function getQuestion( $i ) {

        return $this->question[$i];
    }

    public function setAnswer( $answer ) {

        $this->answer = $answer;
    }

    public function getAnswer( $i ) {

        return $this->answer[$i];
    }

    public function setAnswerPerson( $answer_person ) {

        $this->answer_person = $answer_person;
    }

    public function getAnswerPerson( $i ) {

        return $this->answer_person[$i];
    }

    public function setAnswerTime( $answer_time ) {

        $this->answer_time = $answer_time;
    }

    public function getAnswerTime( $i ) {

        $this->date = new DateTime();
        $this->date->setTimestamp( $this->answer_time[$i]);
        return $this->date->format("F d, Y");
    }

    public function setNoItems( $no_items ) {

        $this->no_items = $no_items;
    }

    public function getNoItems() {

        return $this->no_items;
    }

    public function countPages() {

        return ceil($this->countAskPerson() / 9);
    }
}