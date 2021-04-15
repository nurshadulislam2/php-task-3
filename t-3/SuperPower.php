<?php

class SuperPower{
    public $name;

    public function __construct($name){
        $this->name=$name;
    }
    public function flying(){
        echo "{$this->name} can fly";
    }

    public function laserEye(){
        echo "{$this->name} has laser eye";
    }

    public function hammer(){
        echo "{$this->name} has hammer";
    }

    public function suprHero(){
        echo "{$this->name} is a super hero";
    }
}