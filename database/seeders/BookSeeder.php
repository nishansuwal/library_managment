<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=[
            'title'=>'test',
            'publisher'=>'programming',
            'category'=>'test',
            'author'=>'test',
            'image' => fake()->imageUrl(),


        ];
        Book::create($user);
    }
}
