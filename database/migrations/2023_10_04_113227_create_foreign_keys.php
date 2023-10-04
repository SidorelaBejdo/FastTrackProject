<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('brand_emails', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('ancillary_orders', function(Blueprint $table) {
			$table->foreign('airport_id')->references('id')->on('airports')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('brand_emails', function(Blueprint $table) {
			$table->dropForeign('brand_emails_user_id_foreign');
		});
		Schema::table('ancillary_orders', function(Blueprint $table) {
			$table->dropForeign('ancillary_orders_airport_id_foreign');
		});
	}
}