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
        Schema::create('config_home', function (Blueprint $table) {
            $table->id();
            $table->string('title_1');
            $table->string('quote_1')->nullable();
            $table->text('content')->nullable();
            $table->string('title_2');
            $table->string('quote_2')->nullable();
            $table->string('title_3');
            $table->string('quote_3')->nullable();
            $table->string('image_3')->nullable();
            $table->string('title_4');
            $table->string('quote_4')->nullable();
            $table->string('title_5');
            $table->string('quote_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_home');
    }
};
