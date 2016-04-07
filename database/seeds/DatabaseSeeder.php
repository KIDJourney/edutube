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
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TeacherTablerSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(VideoTableSeeder::class);
        $this->call(FavoriteTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
