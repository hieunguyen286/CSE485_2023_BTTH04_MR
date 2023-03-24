<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('students')->insert([
                'std_name' => $faker->name,
                'std_email' => $faker->unique()->email,
                'std_password' => bcrypt('password'),
                // 'std_password' => $faker->password,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
}