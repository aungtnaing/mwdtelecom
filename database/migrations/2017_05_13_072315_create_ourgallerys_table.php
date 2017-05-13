<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurgallerysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ourgallerys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('photourl1'); 
			$table->string('name');
			$table->string('type');

			$table->string('youtubelink');

			$table->boolean('active'); 
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));

			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));	

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ourgallerys');
	}

}
