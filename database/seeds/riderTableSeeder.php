<?php

use Illuminate\Database\Seeder;

class riderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\system_book_rider::class, 70)->create();
    }
}
