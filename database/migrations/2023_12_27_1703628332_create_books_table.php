<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
		$table->id();
        $table->unsignedBigInteger('genre_id');
		$table->string('title');
		$table->string('author');
        $table->timestamps();
        $table->foreign('genre_id')
            ->references('id')
            ->on('genres')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
