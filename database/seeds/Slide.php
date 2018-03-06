<?php

use Illuminate\Database\Seeder;

class Slide extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('slide')->insert([
            [
                'link' => '/apartment-for-rent',
                'caption' => 'Apartment for rent in Ho Chi Minh City',
                'image' => 'images/slide/slide.png'
            ],
            [
                'link' => '/apartment-for-sale',
                'caption' => 'Apartment for sale in Ho Chi Minh City',
                'image' => 'images/slide/slide.png'
            ]
        ]);
    }
}
