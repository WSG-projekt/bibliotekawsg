<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowedTable extends Migration
{
    public function up()
    {
        Schema::create('borrowed', function (Blueprint $table) {

		$table->increments('ID_borrow');
		$table->integer('ID_customer');
		$table->integer('ID_book');
		$table->date('rental_date');
		$table->date('return_date');
		$table->unique('ID_customer');
		$table->unique('ID_book');
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowed');
    }
}
