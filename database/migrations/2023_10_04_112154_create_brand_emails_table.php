<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandEmailsTable extends Migration {

	public function up()
	{
		Schema::create('brand_emails', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->unsignedBigInteger('user_id');
		});
	}

	public function down()
	{
		Schema::drop('brand_emails');
	}
}