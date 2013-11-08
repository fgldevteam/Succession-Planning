<?php

use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stores', function($table) {
			$table->increments('id'); //primary key
			$table->string('banner');
			$table->integer('store_number')->unique();
			$table->string('name');
			$table->string('address');
			$table->string('city');
			$table->string('province');
			$table->string('pc');
			$table->integer('district')->references('id')->on('districts');
			$table->string('lat');
			$table->string('lng');
			$table->integer('state')->references('id')->on('store_states');;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stores');
	}

}