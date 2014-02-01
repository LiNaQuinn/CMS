<?php

class Debug {

    private static $debugEnabled = false;

    public function __construct($component, $enabled){
        self::$debugEnabled = $enabled;
        $this->throwOut($component.': debug enabled');
    }

    public static function throwOut($msg){
        if(self::$debugEnabled){
            $log = file_get_contents(DEBUG_LOG_FILE);
            $date = StrFTime("%d/%m/%y %H:%M:%S", Time());
            $log .= $date.' - '.$msg."\n";
            file_put_contents(DEBUG_LOG_FILE, $log);
        }
    }
}