<?php 

class MyName{
    public $name;

    public function __construct($name){
        $this->name=$name;
    }

    public function welcome(){
        echo "Welcome {$this->name}";
    }
}