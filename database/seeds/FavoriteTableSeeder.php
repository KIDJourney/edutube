<?php

use App\Models\Video;
use App\Models\User;
use Illuminate\Database\Seeder;

class FavoriteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $videos = Video::all()->all();
        $users = User::all()->all();

        $faker = Faker\Factory::create();

        foreach ($videos as $video){
            $loops = rand(1,20);
            for ($i = 0 ; $i < $loops ; $i ++ ){
                try {
                    $user = $faker->randomElement($users);
                    $user->favorites()->attach($video);
                } catch (PDOException $e)
                {
                 #pass
                }
            }
        }
    }
}
