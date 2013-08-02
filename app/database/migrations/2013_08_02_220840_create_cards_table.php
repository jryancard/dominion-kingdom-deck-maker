<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
            
            $table->text('name');
            $table->string('type');
            $table->string('image');
            
            $table->integer('cost_treasure');
            $table->integer('cost_potion');
            
            $table->integer('vp');
            
            $table->integer('change_buy');
            $table->integer('change_treasure');
            $table->integer('change_card');
            $table->integer('change_action');
            
            $table->text('description')->nullable();
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
		Schema::drop('cards');
	}

}
