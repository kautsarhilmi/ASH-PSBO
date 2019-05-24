<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // seeding the furnitures
        $this->call(FurnituresTableSeeder::class);

        // seeding the tags
        $this->call(TagsTableSeeder::class);

        // seeding the users, houses, and rooms table by creating room for each
        // house for each user
        factory(App\User::class, 3)->create()->each(function ($user) {
            $user->houses()->saveMany(factory(App\House::class, 2)->create()->each(function ($house) {
                $house->rooms()->saveMany(factory(App\Room::class, 3)->create());
            }));
        });
    }
}
