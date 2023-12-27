<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowedTable extends Migration
{
    public function up()
    {
        Schema::create('borrowed', function (Blueprint $table) {
		$table->id();
        $table->unsignedBigInteger('book_id');
        $table->foreign('book_id')->references('id')->on('books');
        $table->unsignedBigInteger('user_id');
        $table->foreign('user_id')->references('id')->on('users');
		$table->date('rental_date');
		$table->date('return_date');
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowed');
    }
}
