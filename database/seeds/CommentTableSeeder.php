<?php

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class CommentTableSeeder extends Seeder
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
        $users = User::lists('id')->toarray();
        $videos = User::lists('id')->toarray();
        foreach (range(1, 20) as $index) {
            Comment::create([
                'user_id' => $faker->randomElement($users),
                'video_id' => $faker->randomElement($videos),
                'comment' => $faker->sentence(),
                'vote' => $faker->sentence(),
            ]);
        }
    }
}
