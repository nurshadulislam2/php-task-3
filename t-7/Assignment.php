<?php

class Assignment{
    public $str;

    public function __construct($str){
        $this->str=$str;
    }

    public function totalWord(){
        return str_word_count($this->str);
    }

    public function lowestWord(){
        $words=explode(' ', $this->str);
        $lowestWordLength=strlen($words[0]);
        $lowestWord=$words[0];

        foreach($words as $word){
            if(strlen($word)<=$lowestWordLength){
                $lowestWordLength=strlen($word);
                $lowestWord=$word;
            }
        }

        echo "Lowest Word is  {$lowestWord}";
    }

    public function replaceWord(){
        echo str_replace("Aplication", "Website", $this->str);
    }
}