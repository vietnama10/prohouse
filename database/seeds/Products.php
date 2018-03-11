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
                'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 800,
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
                'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 800,
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
                'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 800,
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
                'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 800,
                'size' => 120,
                'level' => 10,
                'bedroom' => 3,
                'bathroom' => 2,
                'status' => 1,
                'direction' => 'West',
                'location' => 'https://www.google.com/maps/@16.4591816,107.651128,15z',
                'address' => 'Cau Ngoi, Thuy Thanh, Huong Thuy, Thua Thien Hue',
                'type_id' => 4,
                'project_id' => 4,
            ],
            [
                'sku' => 'apm5',
                'name' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'price' => 800,
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
