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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('language_id')->unsigned();
            $table->bigInteger('author_id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->text('text');
            $table->string('preview_image');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('language_id')
                ->on('languages')
                ->references('id');
            $table->foreign('author_id')
                ->on('users')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
