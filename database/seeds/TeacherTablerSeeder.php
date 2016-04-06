<?php

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherTablerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            Teacher::create([
                'name' => $faker->name(),
                'password' => $faker->sentence(),
                'introduction' => $faker->sentence(),
            ]);
        }
    }
}
