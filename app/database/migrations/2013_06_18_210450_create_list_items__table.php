<?php

use Illuminate\Database\Migrations\Migration;

class CreateListItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('list_items', function($table) {
			$table->increments('id'); //primary key
			$table->integer('list_id')->references('id')->on('lists');;
			$table->integer('manager_id')->references('id')->on('managers');;
			$table->integer('item_order');
			$table->string('note', 500)->nullable();
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
		Schema::drop('list_items');
	}

}