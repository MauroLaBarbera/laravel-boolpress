<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        $categories = ['HTML', 'CSS', 'PHP', 'JAVASCRIPT'];

        foreach ($categories as $category) {
            //1 Creare k'istanza
            $new_category = new Category();

            //2 Assegnazione chiavi
            $new_category->name = $category;
            $new_category->slug = Str::slug($category , '-');

            //Autosave
            $new_category->save();

        }
    }
}
