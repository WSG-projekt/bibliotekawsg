<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations_books', function (Blueprint $table) {
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('book_id');
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade')
                ->onUpdate('cascade');;;
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade')
                ->onUpdate('cascade');;;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_books');
    }
};
