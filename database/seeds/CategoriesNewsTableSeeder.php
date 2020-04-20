<?php

use Illuminate\Database\Seeder;

class CategoriesNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\CategoryNews::class, 100)->create();
    }
}
