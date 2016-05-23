<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('about', function($table)
	{
		$table->increments('id')->unique();
		$table->string('name');
		$table->integer('age');
		$table->string('contact');
		$table->text('info');
		$table->boolean('front');
		$table->timestamps();
	});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('about');
	}

}
