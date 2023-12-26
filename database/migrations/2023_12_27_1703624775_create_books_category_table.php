<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('books_category', function (Blueprint $table) {

		$table->increments('ID_category');
		$table->string('category_name',100)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('books_category');
    }
}
