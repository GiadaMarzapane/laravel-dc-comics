<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// import del mio Model
use App\Models\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $element) {
            $newComic = new Comic();
            $newComic->title=$element['title'];
            $newComic->description = $element['description'];
            $newComic->img_path = $element['thumb'];
            $newComic->price = $element['price'];
            $newComic->series = $element['series'];
            $newComic->type = $element['type'];
            $newComic->save();
        }
    }
}
