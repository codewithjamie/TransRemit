<?php

use Illuminate\Database\Seeder;

class agentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\agent::class, 15)->create();
    }
}
