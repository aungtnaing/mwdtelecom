<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBgphotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bgphotos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('photourl1'); 
			$table->string('photourl2'); 
			$table->string('photourl3'); 
			$table->string('photourl4'); 
			$table->string('photourl5'); 
			$table->string('photourl6'); 
			$table->string('photourl7'); 
			$table->string('photourl8'); 

			// $table->boolean('active'); 
			
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
		Schema::drop('bgphotos');
	}

}
