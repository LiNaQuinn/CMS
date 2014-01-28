<?php

class Session {

    public function __construct(){
        session_start();
        debug::throwOut("session started");
    }
}