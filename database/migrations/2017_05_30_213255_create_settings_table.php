<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('website_name', 100)->nullable();
			$table->string('website_short_name', 10)->nullable();
			$table->string('email', 30)->nullable();
			$table->string('address', 500)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('mobile', 20)->nullable();
			$table->string('facebook_link', 500)->nullable();
			$table->string('twitter_link', 500)->nullable();
			$table->string('instagram_link', 500)->nullable();
			$table->string('line_id', 20)->nullable();
			$table->text('vision', 65535)->nullable();
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
		Schema::drop('settings');
	}

}
