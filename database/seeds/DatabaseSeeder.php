<?php

use App\Models\Series;
use App\Models\Teacher;
use App\Models\Videos;
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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TeacherTablerSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(VideoTableSeeder::class);
    }
}
