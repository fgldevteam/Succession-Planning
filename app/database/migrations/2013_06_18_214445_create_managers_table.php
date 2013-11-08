<?php

use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('managers', function($table) {
			$table->increments('id'); //primary key
			$table->string('first');
			$table->string('last');
			$table->integer('store')->references('id')->on('stores');
			$table->string('position');
			$table->string('duration');

			$table->integer('past_store_1');
			$table->string('past_position_1');
			$table->string('past_duration_1');

			$table->integer('past_store_2');
			$table->string('past_position_2');
			$table->string('past_duration_2');

			$table->integer('past_store_3');
			$table->string('past_position_3');
			$table->string('past_duration_3');

			$table->integer('past_store_4');
			$table->string('past_position_4');
			$table->string('past_duration_4');

			$table->string('education');
			$table->string('edu_focus');

			$table->string('sport_1');
			$table->string('sport_level_1');
			$table->string('sport_2');
			$table->string('sport_level_2');
			$table->string('sport_3');
			$table->string('sport_level_3');

			$table->string('five_factors_score');
			$table->string('tribal_custsom_score');
			$table->string('leadership_brand_score');
			$table->string('ulead_grad');
			$table->string('move');
			$table->string('career_path');
			$table->string('career_path_other');
			$table->string('photo_large');
			$table->string('photo_thumb');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('managers');
	}

}