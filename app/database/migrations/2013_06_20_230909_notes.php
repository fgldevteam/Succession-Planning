<?php

use Illuminate\Database\Migrations\Migration;

class Notes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notes', function($table) {
			$table->increments('id'); //primary key
			$table->integer('manager_id')->references('id')->on('managers');
			$table->text('note');
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
		/Schema::drop('notes');
	}

}