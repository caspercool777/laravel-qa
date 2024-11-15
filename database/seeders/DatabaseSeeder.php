<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //$question = Question::factory(10)->create();

        User::factory(3)->create()->each(function($u) {
            $u->questions()
            ->saveMany(
                Question::factory(rand(1,5))->make()
            );
        });
    }
}
