<?php

use Illuminate\Database\Migrations\Migration;

class CreateManagerListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manager_lists', function($table) {
			$table->increments('id'); //primary key
			$table->string('name', 50);
			$table->string('description', 500)->nullable();
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
		Schema::drop('manager_lists');
	}

}
