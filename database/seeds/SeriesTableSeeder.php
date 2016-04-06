<?php

use App\Models\Series;
use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        
        foreach (range(1,10) as $index){
            Series::create([
                'name'=>$faker->name,
                'description'=>$faker->sentence(),
                'count'=>$faker->randomDigit(),
            ]);
        }
    }
}
