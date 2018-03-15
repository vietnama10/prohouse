<?php

use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'sku' => 'apm1',
                'name' => 'Single Home At Florida 5, Pinecrest',
                'description' => 'Beautiful home on quiet, tree lined street. Addition and renovation create desirable.',
                'price' => 800,
                'url_key'=> 'lorem-house-1',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/@16.4591816,107.651128,15z',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 1,
                'project_id' => 1,
            ],
            [
                'sku' => 'apm2',
                'name' => 'Villa On Grand Avenue',
                'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.',
                'price' => 800,
                'url_key'=> 'lorem-house-2',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/@16.4591816,107.651128,15z',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 1,
                'project_id' => 2,
            ],
            [
                'sku' => 'apm3',
                'name' => '1903 Hollywood Boulevard',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 800,
                'url_key'=> 'lorem-house-3',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/@16.4591816,107.651128,15z',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 2,
                'project_id' => 1,
            ],
            [
                'sku' => 'apm4',
                'name' => 'Villa In Hialeah, Dade County',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 800,
                'url_key'=> 'lorem-house-4',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/@16.4591816,107.651128,15z',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 4,
                'project_id' => 6,
            ],
            [
                'sku' => 'apm5',
                'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'description' => 'Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.',
                'price' => 800,
                'url_key'=> 'lorem-house-5',
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/@16.4591816,107.651128,15z',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 4,
                'project_id' => 6,
            ],
        ]);
    }
}
