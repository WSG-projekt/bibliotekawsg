<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksCollectionTable extends Migration
{
    public function up()
    {
        Schema::create('books_collection', function (Blueprint $table) {

		$table->increments('ID_book');
		$table->string('title',100)->nullable()->default('NULL');
		$table->string('author',100)->nullable()->default('NULL');
		$table->unsignedInteger('ID_category');
		$table->unique('ID_category');

        });
    }

    public function down()
    {
        Schema::dropIfExists('books_collection');
    }
}
