<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vote;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $votes = [
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

        foreach($votes as $vote => $value){
            Vote::create($value);
        }
    }
}
