<?php

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'name' => 'Apartment for rent',
                'description' => 'Apartment for rent in Ho Chi Minh City',
                'image' => 'category.png',
                'sort_order' => 0,
                'display' => 1,
                'parent_id' => 0
            ],
            [
                'name' => 'Apartment for sale',
                'description' => 'Apartment for sale in Ho Chi Minh City',
                'image' => 'category.png',
                'sort_order' => 1,
                'display' => 1,
                'parent_id' => 0
            ]
        ]);
    }
}
