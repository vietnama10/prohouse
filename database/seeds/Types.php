<?php

use Illuminate\Database\Seeder;

class Types extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->insert([
            [
                'name' => 'Apartment for rent',
                'url' => 'apartment-for-rent',
                'sort_order' => 0,
                'is_active' => 1
            ],
            [
               'name' => 'Villa for rent',
                'url' => 'villa-for-rent',
                'sort_order' => 1,
                'is_active' => 1
            ],
            [
                'name' => 'Apartment for sale',
                'url' => 'apartment-for-sale',
                'sort_order' => 2,
                'is_active' => 1
            ],
            [
               'name' => 'Villa for sale',
                'url' => 'villa-for-sale',
                'sort_order' => 3,
                'is_active' => 1
            ],
            [
                'name' => 'Office and Land',
                'url' => 'office-land',
                'sort_order' => 4,
                'is_active' => 1
            ]
        ]);
    }
}
