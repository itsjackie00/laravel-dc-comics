<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    public function run()
    {
        $comics = [
            [
                'title' => 'Comic Title 1',
                'description' => 'Description for Comic 1',
                'thumb' => 'https://example.com/image1.jpg',
                'price' => 9.99,
                'series' => 'Series 1',
                'sale_date' => '2023-01-01',
                'type' => 'Type 1',
            ],
            [
                'title' => 'Comic Title 2',
                'description' => 'Description for Comic 2',
                'thumb' => 'https://example.com/image2.jpg',
                'price' => 19.99,
                'series' => 'Series 2',
                'sale_date' => '2023-02-01',
                'type' => 'Type 2',
            ],
            [
                'title' => 'Comic Title 3',
                'description' => 'Description for Comic 3',
                'thumb' => 'https://example.com/image3.jpg',
                'price' => 29.99,
                'series' => 'Series 3',
                'sale_date' => '2023-03-01',
                'type' => 'Type 3',
            ],
            [
                'title' => 'Comic Title 4',
                'description' => 'Description for Comic 4',
                'thumb' => 'https://example.com/image4.jpg',
                'price' => 39.99,
                'series' => 'Series 4',
                'sale_date' => '2023-04-01',
                'type' => 'Type 4',
            ],
            [
                'title' => 'Comic Title 5',
                'description' => 'Description for Comic 5',
                'thumb' => 'https://example.com/image5.jpg',
                'price' => 49.99,
                'series' => 'Series 5',
                'sale_date' => '2023-05-01',
                'type' => 'Type 5',
            ],
            // Aggiungi altri fumetti qui
        ];

        foreach ($comics as $comic) {
            Comic::create($comic);
        }

        //



    }
}