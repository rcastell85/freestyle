<?php

use Illuminate\Database\Seeder;

class friendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Friend::class, 30)->create();  //
    }
}
