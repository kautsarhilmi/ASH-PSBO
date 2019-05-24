<?php

use Illuminate\Database\Seeder;
use App\Furniture;
use App\Tag;

class FurnituresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $furniture1 = Furniture::create([
            'name' => 'Anita Springbed',
            'width' => 2.0,
            'height' => 0.5,
            'length' => 2.0,
            'price' => 100000,
            'description' => 'Lorem ipsum dolor sit amet',
        ]);
        $furniture1->tags()->attach(Tag::find(1));

        $furniture2 = Furniture::create([
            'name' => 'Meja Ajaib',
            'width' => 1.0,
            'height' => 0.5,
            'length' => 2.0,
            'price' => 120000,
            'description' => 'Lorem ipsum dolor sit amet',
        ]);
        $furniture2->tags()->attach(Tag::find(1));

        $furniture3 = Furniture::create([
            'name' => 'Bangku Terbang',
            'width' => 2.0,
            'height' => 0.5,
            'length' => 1.0,
            'price' => 250000,
            'description' => 'Lorem ipsum dolor sit amet',
        ]);
        $furniture3->tags()->attach(Tag::find(2));
    }
}
