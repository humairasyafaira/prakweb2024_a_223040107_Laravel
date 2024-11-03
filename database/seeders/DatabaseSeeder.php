<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Category::create([
        //     'name' => 'web-designer',
        //     'slug' => 'web-design',
        // ]);
        // Post::create([
        //     'title' => 'Creating Websites with Laravel',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //    'slug' => 'creating-websites-with-laravel',
        //    'body' => 'safadsflkfghdsf fhdsuifhdso fg fsdogihasdgosdaf fgoasdfhg sgasdh gosadh giasd gadsiufgh asdd fasdg fgilsadgf iuasdgfiuasdg 0rwg rwgh srohb foghb oadshgb dsadfas asddfsad asdasd '
        // ]);
        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
