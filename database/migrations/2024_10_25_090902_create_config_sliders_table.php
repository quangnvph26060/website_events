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
        Schema::create('config_sliders', function (Blueprint $table) {
            $table->id(); // Tạo khóa chính tự động tăng
            $table->string('path_image'); // Đường dẫn hình ảnh
            $table->string('title'); // Tiêu đề
            $table->text('short_content')->nullable(); // Nội dung ngắn
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_sliders');
    }
};
