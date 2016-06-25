<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('nickname');
			$table->date('date_met');
			$table->string('notes')->nullable();
			$table->enum('preferred_contact_method', ['email', 'phone'])->default('email');
			$table->string('email');
			$table->string('phone');
			$table->string('other_contact_info_type')->nullable();
			$table->string('other_contact_info_text')->nullable();
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contacts');
	}

}
