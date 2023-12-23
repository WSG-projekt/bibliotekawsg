<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {

		$table->integer('ID_admin',11);
		$table->string('name',50)->nullable()->default('NULL');
		$table->string('surname',50)->nullable()->default('NULL');
		$table->string('email',100)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
