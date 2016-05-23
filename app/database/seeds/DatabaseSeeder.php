<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('UserTableSeeder');
		$this->call('AboutTableSeeder');
		$this->command->info('User Table Seeded!');
	}

}


class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		User::create(array(
			'username' => 'Admin',
			'password' => Hash::make('Admin')
		));
	}

}

class AboutTableSeeder extends Seeder{

	public function run()
	{
		DB::table('about')->delete();

		About::create(array(
			'name' 		=> 'Jens Wallhoff',
			'contact' 	=> 'Jens.Wallhoff@gmail.com',
			'info' 		=> 'Html, Javascript, Php',
			'front'		=> '0'
		));

		About::create(array(
			'name' 		=> 'David Olsson',
			'contact' 	=> 'David.Olsson@gmail.com',
			'info' 		=> 'Html, Javascript, Php',
			'front'		=> '0'
		));

		About::create(array(
			'name' 		=> 'Dennis Grundberg',
			'contact' 	=> 'Dennis.Grundberg@gmail.com',
			'info' 		=> 'Html, Css, Javascript',
			'front'		=> '1'
		));

		About::create(array(
			'name' 		=> 'Leo Magnusson',
			'contact' 	=> 'Leo.Magnusson@gmail.com',
			'info' 		=> 'Html, Css, Javascript, Php',
			'front'		=> '1'
		));

		About::create(array(
			'name' 		=> 'Johannes Westermark',
			'contact' 	=> 'Johannes.Westermark@gmail.com',
			'info' 		=> 'Html, Javascript, Php',
			'front'		=> '0'
		));

		About::create(array(
			'name' 		=> 'Kristofer Kinberg',
			'contact' 	=> 'Kristofer.Kinberg@gmail.com',
			'info' 		=> 'Html, Javascript, Php',
			'front'		=> '0'
		));

		About::create(array(
			'name' 		=> 'Eric Fridman',
			'contact' 	=> 'Eric.Fridman',
			'info' 		=> 'Html, Css, Javascript',
			'front'		=> '1'
		));


	}

}