<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;


class UsersTableSeeder extends Seeder
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

        foreach (range(1,100) as $index){
            User::create([
                'name'      =>$faker->userName(),
                'open_id'   =>$index,
                'stu_id'    =>$index,
                'password'  =>$faker->password(),
                'introduction'=>$faker->sentence()
            ]);
        }
    }

}
