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
                'url_key' => 'apartment-for-rent',
                'sort_order' => 0,
                'is_active' => 1
            ],
            [
               'name' => 'Villa for rent',
                'url_key' => 'villa-for-rent',
                'sort_order' => 1,
                'is_active' => 1
            ],
            [
                'name' => 'Apartment for sale',
                'url_key' => 'apartment-for-sale',
                'sort_order' => 2,
                'is_active' => 1
            ],
            [
               'name' => 'Villa for sale',
                'url_key' => 'villa-for-sale',
                'sort_order' => 3,
                'is_active' => 1
            ],
            [
                'name' => 'Office and Land',
                'url_key' => 'office-land',
                'sort_order' => 4,
                'is_active' => 1
            ]
        ]);
    }
}
