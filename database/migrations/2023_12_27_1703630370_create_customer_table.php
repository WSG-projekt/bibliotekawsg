<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {

		$table->increments('ID_customer');
		$table->string('name',50)->nullable()->default('NULL');
		$table->string('surname',50)->nullable()->default('NULL');
		$table->string('email',100)->nullable()->default('NULL');
		$table->string('phone_number',15)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
