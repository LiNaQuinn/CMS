<?php

class Debug {

    private $debugEnabled = false;

    public function __construct($component, $enabled){
        $this->debugEnabled = $enabled;
        $this->throwOut('<strong>'.$component.'</strong>: debug enabled');
    }

    public function throwOut($msg){
        if($this->debugEnabled){
            $date = StrFTime(" %H:%M:%S", Time());
            echo $date.' - <em>'.$msg.'<em><br>';
        }
    }
}