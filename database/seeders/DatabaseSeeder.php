<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Work;
use App\Models\WorkImage;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        for ($i = 0; $i < 50; $i++) {
            $work = Work::create([
                'cata_id' => rand(12, 15),
                'title' => fake()->sentence(3),
                'slug' => Str::slug(fake()->sentence(3)),
                'link_video' => fake()->url(),
                'customer' => fake()->name(),
                'project_name' => fake()->sentence(3),
                'participants_count' => rand(1, 10),
                'year' => rand(2000, 2022),
                'location' => fake()->address(),
                'description' => fake()->sentence(10),
            ]);

            // Tạo 8 ảnh cho mỗi work
            for ($j = 0; $j < 8; $j++) {
                WorkImage::create([
                    'work_id' => $work->id, // Liên kết với work đã tạo
                    'image_path' => fake()->imageUrl(640, 480, 'business'), // Đường dẫn ảnh giả lập
                ]);
            }
        }
    }
}
