<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galleries = [
            [
                'name' => 'Kevin',
                'title' => 'Pemandangan Alam',
                'description' => 'If you\'re over eighteen, adult gymnastics provides...',
                'views' => 10,
                'image' => 'africa.jfif',
            ],
            [
                'name' => 'Feliciano',
                'title' => 'Logo indah',
                'description' => 'Pokoknya keren banget',
                'views' => 50,
                'image' => 'image1.jfif',
            ],
        ];

        foreach($galleries as $gallery => $value){
            Gallery::create($value);
        }
    }
}
