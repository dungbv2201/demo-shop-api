<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create(['name'=>'Áo thun']);
        \App\Models\Category::create(['name'=>'Quần jean']);
    }
}
