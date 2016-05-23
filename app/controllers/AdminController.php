<?php

class AdminController extends BaseController {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(){
		$this->AB = new About(); 
		$this->AP = new AppModel();

	}
	public function admin_page(){
		$abouts = $this->AB->all_abouts();
		$apps = $this->AP->all_apps();

		return View::make('admin_page', array('app' => $apps, 'about' => $abouts));
		
	}

	public function add(){
		return View::make('add');
	}


	public function add_about(){
		$this->AB->add_about(Input::Get('name'), Input::Get('age'), Input::Get('contact'), Input::Get('info'), Input::Get('front'));
		return Redirect::to('admin_page');
	}

	public function delete_aboutinfo(){
		$this->AB->delete_aboutinfo(Input::get('id'));
		return Redirect::to('admin_page');
	}

	public function add_appinfo(){
		$this->AP->add_appinfo(Input::Get('info'));
		return Redirect::to('admin_page');
	}

	public function update_aboutinfo(){
		$this->AP->update_appinfo($id);
	}

	public function delete_appinfo(){
		$this->AP->delete_appinfo(Input::get('id'));
		return Redirect::to('admin_page');
	}

}
