<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 21; $i++) {
        DB::table('posts')->insert([
            'user_id' => mt_rand(1,3),
            'caption' => Str::random(20),
            'image' => "uploads/mKeDKX14VmQNGNlLmFDNCYj1skb0vMII8w8AE0lg.jpg",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);}
    }
}
