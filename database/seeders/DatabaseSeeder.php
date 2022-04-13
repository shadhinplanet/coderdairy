<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Problem;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            User::create([
            'name'               => 'Shadhin Ahmed',
            'username'           => 'shadhin',
            'email'              => 'admin@admin.com',
            'password'           => bcrypt('123'),
            'email_verified_at'  => now(),
            'image'              => 'https://picsum.photos/300',
            ]);

            Category::factory(10)->create();
            Tag::factory(10)->create();
            Problem::factory(20)->create();

    }
}
