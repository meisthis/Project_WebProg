<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(ingredientSeeder::class);
        $this->call(labelSeeder::class);
        $this->call(recipeSeeder::class);
        $this->call(recipeDetailSeeder::class);
    }
}
