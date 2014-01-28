<?php

class Debug {

    private static $debugEnabled = false;

    public function __construct($component, $enabled){
        self::$debugEnabled = $enabled;
        $this->throwOut('<strong>'.$component.'</strong>: debug enabled');
    }

    public static function throwOut($msg){
        if(self::$debugEnabled){
            $date = StrFTime(" %H:%M:%S", Time());
            echo $date.' - <em>'.$msg.'</em><br>';
        }
    }
}