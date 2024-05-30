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
                'tittle' => ''
        ]
            // Aggiungi altri fumetti qui
        ];

        foreach ($comics as $comic) {
            Comic::create($comic);
        }

        //



    }
}