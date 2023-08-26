<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{

    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic) {


            $new_comic = new Comic();
            $comic['artists'] = implode(',', $comic['artists']);
            $comic['writers'] = implode(',', $comic['writers']);
            $new_comic->fill($comic);
            $new_comic->save();
        }
    }
}
