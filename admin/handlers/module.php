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
            $moduleFile = './modules/'.$module.'.php';
            if(file_exists($moduleFile)){
			    include_once $moduleFile;
                debug::throwOut('Modul: '.$module.' loaded');
            } else {
                debug::throwOut('Modul: '.$module.' Error file does not exist');
            }
         }
	}
}