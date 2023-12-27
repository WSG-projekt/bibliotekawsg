<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksCollectionTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
		$table->id();
        $table->unsignedBigInteger('category_id');
		$table->string('title',100)->nullable()->default('NULL');
		$table->string('author',100)->nullable()->default('NULL');
        $table->foreign('category_id')
            ->references('id')
            ->on('books_category')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
