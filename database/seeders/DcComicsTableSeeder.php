<?php

namespace Database\Seeders;

use App\Models\DcComic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DcComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        foreach($comics as $comic){
            // Comic è il nome del model
            $newComics = new DcComic;
            $newComics->title = $comic['title'];
            $newComics->description = $comic['description'];
            $newComics->thumb = $comic['thumb'];
            $newComics->price = $comic['price'];
            $newComics->series = $comic['series'];
            $newComics->sale_date = $comic['sale_date'];
            $newComics->type = $comic['type'];       
            $newComics->save();    
        }
    }
}
