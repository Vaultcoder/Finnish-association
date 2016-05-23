<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class About extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'about';
	protected $fillable = array('name', 'age', 'contact', 'info', 'front');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function all_abouts(){
		$all_about = DB::table('about')
		->select('id','name', 'age', 'contact', 'info', 'front')

		->get();
		return $all_about;
	}

	public function add_about($na, $ag, $co, $in, $fr){
				
		About::create( array(
							'name' => $na,
							'age' => $ag,
							'contact' => $co,
							'info' => $in,
							'front' => $fr));
		
	}

	public function delete_aboutinfo($id){
		DB::table('about')
		->where('id', '=', $id )
		->delete();
				
	}

	public function update_about($id){

	}


}
