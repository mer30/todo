<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{

			$table->increments('id');
			$table->integer ('project_id')-> unsigned()->index();
			$table->foreign ('project_id')->reference ('id')->on ('projects')-> onDelete('cascade');
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
		Schema::drop('tasks');
	}

}
