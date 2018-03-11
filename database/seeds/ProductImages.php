<?php

use Illuminate\Database\Seeder;

class ProductImages extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('product_images')->insert([
            [
                'image' => 'product-img1.jpeg',
                'is_thumnail' => 1,
                'product_id' => 1
            ],
            [
                'image' => 'product-img2.jpeg',
                'is_thumnail' => 0,
                'product_id' => 1
            ],
            [
                'image' => 'product-img1.jpeg',
                'is_thumnail' => 1,
                'product_id' => 2
            ],
            [
                'image' => 'product-img2.jpeg',
                'is_thumnail' => 0,
                'product_id' => 2
            ],
            [
                'image' => 'product-img1.jpeg',
                'is_thumnail' => 1,
                'product_id' => 3
            ],
            [
                'image' => 'product-img2.jpeg',
                'is_thumnail' => 0,
                'product_id' => 3
            ],
            [
                'image' => 'product-img1.jpeg',
                'is_thumnail' => 0,
                'product_id' => 4
            ],
            [
                'image' => 'product-img2.jpeg',
                'is_thumnail' => 1,
                'product_id' => 4
            ],
            [
                'image' => 'product-img1.jpeg',
                'is_thumnail' => 0,
                'product_id' => 5
            ],
            [
                'image' => 'product-img2.jpeg',
                'is_thumnail' => 1,
                'product_id' => 5
            ]
        ]);
    }

}
