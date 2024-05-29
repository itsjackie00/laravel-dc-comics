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
            // Aggiungi altri fumetti qui
        ];

        foreach ($comics as $comic) {
            Comic::create($comic);
        }
    }
}