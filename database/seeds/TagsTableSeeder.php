<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = Tag::create([
            'name' => 'Bedroom',
        ]);

        $tag2 = Tag::create([
            'name' => 'Kitchen',
        ]);
    }
}
