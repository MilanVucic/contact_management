<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('followups', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('contact_id');
			$table->enum('preferred_followup_method', ['text', 'call', 'email', 'facebook', 'linkedin', 'other'])->default('text');
			$table->string('followup_method_data');
			$table->string('reason')->nullable();
			$table->date('next_meeting')->nullable();
			$table->boolean('recurring');
			$table->enum('recurring_interval', ['day', 'week', 'month', 'quarter'])->nullable();
			$table->integer('recurring_frequency')->nullable();
			$table->boolean('completed')->default('0');
			$table->text('meeting_notes')->nullable();
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
		Schema::drop('followups');
	}

}
