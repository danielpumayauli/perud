<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'DUCHA',
        	'description' => 'descripcion'

        ]);
        Category::create([
        	'name' => 'JARDINERÍA',
        	'description' => 'descripcion'

        ]);
        Category::create([
        	'name' => 'LAVANDERÍA',
        	'description' => 'descripcion'

        ]);
        Category::create([
        	'name' => 'COCINA',
        	'description' => 'descripcion'

        ]);
    }
}
