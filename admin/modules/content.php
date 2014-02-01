<?php

class ContentModule Extends Module {


	public function add(){
		$data = $this->db->fetch("SELECT * FROM content");
		return $data;
	}
}

