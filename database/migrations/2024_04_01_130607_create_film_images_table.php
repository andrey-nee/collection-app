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
    Schema::create('film_images', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('image');
      $table->bigInteger('film_id')->unsigned();

      // Удаляем строку, если удаляется связанный с ней фильм
      $table->foreign('film_id')
        ->references('id')
        ->on('films')
        ->onDelete('cascade');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('film_images');
  }
};
