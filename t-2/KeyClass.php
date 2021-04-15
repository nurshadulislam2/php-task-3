<?php 
class KeyClass{
    public $key;

    public function setter($key){
        $this->key=$key;
    }

    public function getter(){
        echo $this->key;
    }
}