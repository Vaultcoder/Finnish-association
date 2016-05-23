<?php

class AboutController extends BaseController {

	function __construct(){
		$this->AM = new About();
	}

	public function get_about($AboutName = False){
		if($AboutName){
		}
		else{
			$abouts = $this->AM->all_abouts();
			return View::make('om-oss', array('about' => $abouts));
		}

	}
}
