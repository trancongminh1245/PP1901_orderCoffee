<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('post')->insert([
                'title' => Str::random(10),
                'content' => Str::random(10),
                'image' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
