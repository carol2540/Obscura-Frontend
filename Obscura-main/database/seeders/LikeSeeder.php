<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Likes;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $likes = [
            [
                'user_id' => 1,
                'gallery_id' => 1,
            ],
            [
                'user_id' => 2,
                'gallery_id' => 2,
            ],
            [
                'user_id' => 3,
                'gallery_id' => 2,
            ]
        ];

        foreach($likes as $like => $value){
            Likes::create($value);
        }
    }
}
