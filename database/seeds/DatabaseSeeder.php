<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(DegreeTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(InterestLevelTableSeeder::class);
        $this->call(MaritalStatusTableSeeder::class);
    }
}
