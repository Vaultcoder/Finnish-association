<?php

class AppController extends BaseController {

	public $restful = true;
	public $AM;

	function __construct(){
		$this->AM = new AppModel();
	}
	public function get_app($AppInfo = false){
		if($AppInfo){

		}else{
			$apps = $this->AM->all_apps();
			return View::make('app', array('app' => $apps));
		}
	}


}
