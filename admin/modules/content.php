<?php

class ContentModule Extends Module {


	public function retrieve(){
		$data = $this->db->fetch("SELECT * FROM content");
		return $data;
	}

    public function insert($text){
        $this->db->query("INSERT INTO content VALUES ('0', '$text')");
    }
}

