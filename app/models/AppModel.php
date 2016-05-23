<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class AppModel extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'apps';
	protected $fillable = array('info');
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function all_apps(){
		$all_app = DB::table('apps')
		->select('info', 'id')
		->get();
		return $all_app;
	}


	public function add_appinfo($info){
		AppModel::create( array(
							'info' => $info));
	}


	public function delete_appinfo($id){
		DB::table('apps')
		->where('id', '=', $id )
		->delete();
	}

	public function update_appinfo($id){

	}
}
