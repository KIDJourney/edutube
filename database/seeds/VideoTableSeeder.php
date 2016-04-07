<?php

use App\Models\Series;
use App\Models\Video;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class VideoTableSeeder extends Seeder
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

        $teachers = Teacher::lists('id')->toarray();
        $series = Series::lists('id')->toarray();

        foreach (range(1, 50) as $index) {
            Video::create([
                'title' => $faker->title,
                'description' => $faker->sentence(10),
                'video_url' => $faker->url,
                'cover_url' => $faker->url,
                'user_id' => $faker->randomElement($teachers),
                'series_id' => $faker->randomElement($series),
                'watch_count' => $faker->randomDigit(),
                'reply_count' => $faker->randomDigit(),
                'favorite_count' => $faker->randomDigit(),
            ]);
        }

    }
}
