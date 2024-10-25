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
            $table->id(); // ID tự động tăng
            $table->string('title'); // Tiêu đề bài viết
            $table->string('slug')->unique(); // Slug URL thân thiện với SEO
            $table->text('content'); // Nội dung chính của bài viết
            $table->string('excerpt')->nullable(); // Mô tả ngắn cho SEO
            $table->string('meta_description')->nullable(); // Mô tả meta cho SEO
            $table->string('meta_keywords')->nullable(); // Từ khóa meta cho SEO (tuỳ chọn)
            $table->string('featured_image')->nullable(); // URL của hình ảnh đại diện
            $table->boolean('is_published')->default(true); // Trạng thái của bài viết
            $table->timestamps(); // Thời gian tạo và cập nhật
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
