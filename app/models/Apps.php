<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Apps extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'apps';
	protected $fillable = array('info');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

/*
	public function all_abouts(){
		$all_about = DB::table('about')
		->select('info')
		->get();
		return $all_info;
	}
*/
	public function add_appinfo($info){
	
		Apps::create( array(
							'info' => $info));
		
	}


}
