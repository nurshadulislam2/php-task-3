<?php 

class Audi extends Car{
    private $color;
    private $seats;

    public function setter($engineStatus, $bodyPart, $color, $seats){
        $this->engineStatus=$engineStatus;
        $this->bodyPart=$bodyPart;
        $this->color=$color;
        $this->seats=$seats;
    }

    public function getter(){
        echo "Audi engine status is {$this->engineStatus}, body part is {$this->bodyPart}, color {$this->color} and seats {$this->seats}";
    }
}