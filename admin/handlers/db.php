<?php

class DBhandler {

    public $connection;
    public function __construct(){
        debug::throwOut("DBhandler ini");
        $this->connect();
    }

    public function connect(){
        $this->connection = mysqli_connect('localhost', 'root', 'tucnak', 'cms');
        if(!$this->connection){
            debug::throwOut(mysqli_connect_error());
            exit;
        } else { debug::throwOut("DB connected"); }
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

    public function fetchUserId($user, $cryptedPass){
        // TODO: simplify this method
        $result = mysqli_query($this->connection, "
                SELECT id
                FROM users
                WHERE user = '$user'
                AND pass = '$cryptedPass'");

        if (!$result) {
            debug::throwOut($this->connection->error);
            exit;
        }

        if ($row = $result->fetch_assoc()){
            return $row;
        }

    }
}