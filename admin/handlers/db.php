<?php

class DBhandler {

    private $connection;
    public function __construct(){
        debug::throwOut("DBhandler ini");
    }

    public function connect(){
        $this->connection = mysqli_connect('localhost', 'root', '', 'cms');
        if(!$this->connection){
            debug::throwOut(mysqli_connect_error());
            exit;
        } else { debug::throwOut("DB    connected"); }
    }

    public function query($q){
        mysqli_query($this->connection, $q);
        debug::throwOut($q);
    }

    public function fetch($q){
        $result = mysqli_query($this->connection, $q);

        if (!$result) {
            debug::throwOut($this->connection->error);
            exit;
        }

        while ($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
}