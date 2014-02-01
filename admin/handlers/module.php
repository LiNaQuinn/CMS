<?php

class Module {

	public $modules = array('content');
    protected $db;

	public function __construct(DBhandler $db){
        $this->db = $db;
		$this->loadModules($this->modules);
	}

	private function loadModules($arr){
		foreach ($arr as $key => $module) {
			debug::throwOut('Modul: '.$module.' loaded');
			include_once './modules/'.$module.'.php';
		}
	}
}