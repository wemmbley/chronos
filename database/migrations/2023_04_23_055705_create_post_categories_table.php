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
        Schema::create('post_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('language_id')->unsigned();
            $table->bigInteger('parent_category_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('language_id')
                ->on('languages')
                ->references('id');
            $table->foreign('parent_category_id')
                ->on('post_categories')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_categories');
    }
};
