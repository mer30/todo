<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer ('user_id')-> unsigned()->index();
			$table->foreign ('user_id')->reference ('id')->on ('users');
			$table->string ('name');
			$table->string ('slug');
			$table->LongText ('desc');
			$table->date('duedate');
			$table->boolean('completed')->default(false);
			$table->timestamps();
			$table->softDeletes();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
